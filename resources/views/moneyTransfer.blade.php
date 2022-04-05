<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Money Transfer - Bazzar Bank</title>
    <link rel="stylesheet" href= 'assets/bootstrap/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href='assets/fonts/font-awesome.min.css'>
    <link rel="stylesheet" href='assets/fonts/ionicons.min.css'>
    <link rel="stylesheet" href='assets/css/Footer-Dark.css'>
    <link rel="stylesheet" href='assets/bootstrap/css/Login-Form-Dark.css'>
</head>

<body id="page-top">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">
            <span class="iconify" data-icon="fa-bank" data-inline="false"></span>
            Bazzar Bank</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="\">Services</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div CLASS="BGIMG">
        <div class="container">
            
                <div class="intro-lead-in" style="font-size: 50px; font-family: 'Times New Roman', Times, serif;position: absolute;left:550px;top:120px;color:White">
                    <span><b><img src='assets/fonts/money-bill-alt-solid.svg' alt="img-error" height="100">&nbsp;&nbsp; Money Transfer</b></span></div>
                <!--<div class="intro-heading text-uppercase"><span>It's Nice To Meet You</span></div>
                <a style="border-radius: 36px;position: absolute;left:1400px;top:700px"class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" href="#services">Send Money</a>-->
            
        </div>
            <section class="login-dark" >
                @if(Session::has('orderId'))
                    <div class="container text-center">
                    <form action="/afterpayement" method="POST">
                        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                        <script
                            src="https://checkout.razorpay.com/v1/checkout.js"
                            data-key="{{ env('RAZORPAY_KEY') }}"
                            data-amount="{{ Session::get('amount') }}" 
                            data-currency="INR"
                            data-order_id="{{ Session::get('orderId') }}"
                            data-buttontext="Pay with Razorpay"
                            data-name="Bazzar Bank"
                            data-description="Powering your future Ideas and vision"
                            data-image="{{ asset('assets/img/bazzarbank.jpeg',env('secure')) }}"
                            data-theme.color="#F37254"
                        ></script>
                        <input type="hidden" custom="Hidden Element" name="hidden">
                        <a class="forgot" href="#">Don't refresh a page. </a>
                        {{ session()->forget('orderId')}}
                        </form>
                    </div>
                    
                 @else
                <form method="post" action="/transfer">
                    @csrf
                    <h2 class="sr-only">Login Form</h2>
                    <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                    @if($errors->any())
                    <span style="color:red">{{$errors->first()}}</span>
                    @endif
                    <div class="form-group">
                        @if($upi)
                        <input class="form-control" name="sender" id="sender" value="{{ $upi }}" readonly="readonly">
                        @else
                        <input class="form-control" type="email" name="sender" id="sender" placeholder="Sender UPI_ID" required></div>
                        @endif
                        <span style="color:red"id="sender_result"></span>
                    <div class="form-group">
                        
                        <input class="form-control" type="email" name="receiver" id="receiver" placeholder="Receiver UPI_ID" required></div>
                        <span style="color:red"id="receiver_result"></span>
                        <div class="form-group">
                            
                            <input class="form-control" type="number" id="amount" name="amount" placeholder="Amount in Rs(₹)" required>
                            <span style="color:red"id="amount_result"></span>
                        </div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send Money</button></div><a class="forgot" href="#">Terms & Conditions Applied </a>
                    
                </form>
                @endif
            </section>
    </div>

        @include('footer')            <!--footer Component-->

    <script src='assets/js/jquery.min.js'></script>
    <script src= 'assets/bootstrap/js/bootstrap.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src='assets/js/agency.js'></script>
</body>

</html>

<style>
    .BGIMG{
	WIDTH:100%;
	HEIGHT: 120vh;
	background-image:linear-gradient(27deg, #004E95 50%,#013a6b 50% );

}
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.razorpay-payment-button{
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
    </style>
<script>
        $('#sender').change(function(){
            var sender = $('#sender').val();
            if(sender != " "){
                $.ajax({
                    url:"<?php array('url');?>/check_sender_upi",
                    method:'post',
                    data: {sender:sender, _token: '{{csrf_token()}}'},
                    success:function(data){
                        $('#sender_result').html(data);
                    }
                });
            }
        });

        $('#receiver').change(function(){
            var receiver = $('#receiver').val();
            var sender = $('#sender').val();
            if(receiver != " " && sender != receiver){
                $.ajax({
                    url:"<?php array('url');?>/check_receiver_upi",
                    method:'post',
                    data: {receiver:receiver, _token: '{{csrf_token()}}'},
                    success:function(data){
                        $('#receiver_result').html(data);
                    }
                });
            }
            else{
                $('#receiver_result').html("Sender and receiver can't be same");
            }
            
        });
        $('#amount').change(function(){
            var sender = $('#sender').val();
            var amount = $('#amount').val();
            if(amount > 0){
                $.ajax({
                    url:"<?php array('url');?>/check_amount",
                    method:'post',
                    data: {amount:amount,sender:sender, _token: '{{csrf_token()}}'},
                    success:function(data){
                        $('#amount_result').html(data);
                    }
                });
            }
            else{
                $('#amount_result').html("Enter right amount");
            }
            
        });
        

    </script>