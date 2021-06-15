<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankServices;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/transfer/{upi?}', function ($upi=null) {
    return view('moneyTransfer',['upi'=> $upi]);
});
Route::get('/holder', function () {
    return view('holder');
});


Route::get('/holder',[BankServices::class,'AccHolder']);
Route::post('/transfer',[BankServices::class,'money_transfer']);
Route::post('/afterpayement',[BankServices::class,'pay']);
Route::get('/transaction',[BankServices::class,'display_transaction']);
Route::post('/check_sender_upi',[BankServices::class,'check_sender']);
Route::post('/check_receiver_upi',[BankServices::class,'check_receiver']);
Route::post('/check_amount',[BankServices::class,'check_amount']);
