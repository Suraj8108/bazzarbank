@component('mail::message')

Dear {{ $user->Name }},

Payment Transfered Successfully.<br>
<br>
| Following are the Payment Details: | |
| :--- |  -----------:|
|Sender UPI id| {{ $payment->sender_upi }} |
|Receiver UPI id| {{ $payment->receiver_upi }}|
|Payment_id| {{ $payment->payment_id }}|
|Amount Transfered| {{ $payment->amount }}|

<br>
This is system generated mail. Please don't reply to this mail.<br>
Thanks,<br>
{{ config('app.name') Team}}
@endcomponent
