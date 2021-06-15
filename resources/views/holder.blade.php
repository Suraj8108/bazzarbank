<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Account Holders - Bazzar Bank</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/bootstrap/css/Login-Form-Dark.css">
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
    <div class="BGIMG" >
        <div class="container">
            
                <div class="intro-lead-in" style="font-size: 50px; font-family: 'Times New Roman', Times, serif;position: absolute;left:550px;top:120px;color:White">
                    <span><b><img src="assets/fonts/money-bill-alt-solid.svg" alt="img-error" height="100">&nbsp;&nbsp; Account Holders</b></span></div>
                <!--<div class="intro-heading text-uppercase"><span>It's Nice To Meet You</span></div>
                <a style="border-radius: 36px;position: absolute;left:1400px;top:700px"class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" href="#services">Send Money</a>-->
            
        </div>
        <section class="article-list1" style="color:white;position: relative;left:120px;top:120px;">

                <div class="row articles"> 
                    @foreach($holders as $holder)
                    <div class="col-sm-6 col-md-4 item">
                        @if($holder['photo'])
                        <img src="assets/img/{{ $holder['photo'] }}.jpg" height="120px" width="120px" stylt="padding:100px">

                        @else
                        <a href="#"><i class="fa fa-user fa-4x" aria-hidden="true"></i></a>
                        @endif
                        <h3 class="name">{{ $holder['Name'] }}</h3>
                        <p class="description">UPI_ID: {{ $holder['upi_id'] }}</p>
                        <p class="description">Balance : ₹ {{ $holder['Balance'] }}<br>
                        <a class="action" href="transfer/{{ $holder['upi_id'] }}">Send Money<i class="fa fa-arrow-circle-right"></i></a></p>
                    </div>
                    @endforeach
                    <!--<div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/loft.jpg"></a>
                        <h3 class="name">Cookies Encrypt</h3>
                        <p class="description">Encrypt a ookie so that other website won't steal data or cookies created by other websites.This will provide an enhanced security to websites. </p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>-->
                                       
                    
                    
                </div>
                <br><br><!--
                <div style="text-align:center">
               <a href="#" style=" color: lightgray;"> <i class="fa fa-plus" aria-hidden="true"style="font-size: 20px; ">Add a task</i> </a>
            </div>--></div>
           
        </section>
    </div>
        

    <footer>
        <div class="container">
            <div class="row">
                <div ><span class="copyright">Copyright&nbsp;© Bazzar Bank 2021</span></div>
                <div class="col-md-4">
                    <ul>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#" style="color: black">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#" style="color: black">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>
<style>
    .BGIMG{
	WIDTH:100%;
	min-height: 500px;
	background-image:linear-gradient(27deg, #004E95 50%,#013a6b 50% );

}
i.fa {
  display: inline-block;
  padding: 0.5em 0.6em;
  color:black;
  
}
    </style>