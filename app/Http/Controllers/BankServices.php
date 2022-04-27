<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PaymentMail;
use App\Models\accholder;
use App\Models\Payment;
use Razorpay\Api\Api;
use Session;
use Config;
Use Redirect;

class BankServices extends Controller
{
    //
    function AccHolder(){
        $users = accholder::all();
        //dd($users);
        return view('holder',['holders'=>$users]);
    }
    function money_transfer(Request $req){
        $sender_upi = $req->input('sender');
        $receiver_upi = $req->input('receiver');
        $amount = $req->input('amount');
        if($this->check_sender($req) == Config::get('common.upi') || $this->check_receiver($req) == Config::get('common.upi') 
        || $this->check_amount($req) == Config::get('common.amount')){
            return Redirect::back()->withErrors(['Please do the necessary changes']);
        }

        $api = new Api(env("RAZORPAY_KEY"), env("RAZORPAY_SECRET"));
        $order  = $api->order->create([
            'receipt'         => 'order_rcptid_11',
            'amount'          => $amount*100, // amount in the smallest currency unit
            'currency'        => 'INR',// <a href="/docs/payment-gateway/payments/international-payments/#supported-currencies"  target="_blank">See the list of supported currencies</a>.)
          ]);
        $orderId = $order['id'];

        $user_pay = new Payment();
        $user_pay->sender_upi = $sender_upi;
        $user_pay->receiver_upi = $receiver_upi;
        $user_pay->amount = $amount;
        $user_pay->payment_id = $orderId;
        $user_pay->save();

        Session::put('orderId',$orderId);
        Session::put('amount',$amount);
        Session::put('sender',$sender_upi);
        Session::put('receiver',$receiver_upi);
        Session::put('verify',"0");
        return redirect('/transfer');

    }

    function pay(Request $req){
        $data = $req->all();
        $sender = Session::get('sender');
        $receiver = Session::get('receiver');
        $amount = Session::get('amount');


        $sender_update = accholder::where('upi_id',$sender)->first();
        $sender_update->Balance -= $amount;
        $sender_update->save();

        $receiver_update = accholder::where('upi_id',$receiver)->first();
        $receiver_update->Balance += $amount;
        $receiver_update->save();

        $user = Payment::where('payment_id',$data['razorpay_order_id'])->first();
        $user->payment_done = true;
        $user->razorpay_id = $data['razorpay_payment_id'];
        $user->save();

        Mail::to($sender)->send(new PaymentMail($sender_update, $user));
        session()->flush();

        return view('success');
    }

    function check_sender(Request $req){
        $sender = $req['sender'];
        if(!accholder::where('upi_id','=',$sender)->exists()){
            return "UPI ID doesn't exists";
        }
    }

    function check_receiver(Request $req){
        $receiver = $req['receiver'];
        if(!accholder::where('upi_id','=',$receiver)->exists()){
            return "UPI ID doesn't exists";
        }
    }
    
    function check_amount(Request $req){
        $sender_upi = $req['sender'];
        $amount = $req['amount'];
        $sender = accholder::where('upi_id',$sender_upi)->first();
        if($sender){
            if($sender['Balance'] < $amount){
                return "Sender doesn't have that much amount";
            }
        }
        else{
            return "Enter a valid UPI_ID";
        }
    }

    function check_pin(Request $req){
        $sender_upi = Session::get('sender');
        $pin = $req['pin'];
        $sender = accholder::where('upi_id',$sender_upi)->first();
        if($sender){
            if($sender['upi_pin'] == $pin){
                Session::put("verify", "1");
                return "true";
            }
            else{
                return "false";
            }
        }
        else{
            return "false";
        }
    }

    function display_transaction(){
        $transactions = Payment::all();
        //dd($transactions_success);

        return view('transaction',['tansactions'=>$transactions]);
    }
}
