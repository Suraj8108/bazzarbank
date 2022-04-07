<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Bazzar Bank</title>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link rel="stylesheet" href={{ asset("assets/bootstrap/css/bootstrap.min.css", env("secure")) }}>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href={{ asset("assets/fonts/font-awesome.min.css", env("secure")) }}>
</head>

<body id="page-top">
    @include('header')
    <header class="masthead" style="height: 970px;background-image:url('assets/img/header-bg.jpg');">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in" style="font-family: 'Times New Roman', Times, serif;position: absolute;left:1000px;top:200px;color:White"><span><b>WE'RE HERE FOR YOU</b></span></div>
                <!--<div class="intro-heading text-uppercase"><span>It's Nice To Meet You</span></div>-->
                <a style="border-radius: 36px;position: absolute;left:1100px;top:600px"class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" href="#services">Tell me more</a>
            </div>
        </div>
    </header>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Services</h2>
                    <h3 class="text-muted section-subheading">Powering Your Ideas</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4"><span class="fa-stack fa-4x"><img class="svg" src={{ asset("assets/fonts/hand-holding-usd-solid.svg", env("secure")) }} alt="img-error"height="150"></span>
                    <a href="/transfer"><h4 class="section-heading"style="padding: 50px;">Money Transfer</h4></a>
                    <!--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>-->
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><img class="svg"  src={{ asset("assets/fonts/user-solid.svg", env("secure")) }} alt="img-error" height="150"></span>
                    <a href="/holder"><h4 class="section-heading"style="padding: 50px;">Account Holders</h4></a>
                    <!--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>-->
                </div>
                <div class="col-md-4"><span class="fa-stack fa-4x"><img class="svg" src={{ asset("assets/fonts/exchange-alt-solid.svg", env("secure")) }} alt="img-error"height="150"></span>
                    <a href="/transaction"><h4 class="section-heading"style="padding: 50px;">All Transactions</h4><a>
                    <!--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>-->
                </div>
            </div>
        </div>
    </section>
    <section id="contact" style="background-image:url('assets/img/map-image.png');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Contact Us</h2>
                    <h3 class="text-muted section-subheading">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group"><input class="form-control" type="text" id="name" placeholder="Your Name *" required=""><small class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="email" id="email" placeholder="Your Email *" required=""><small class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="tel" placeholder="Your Phone *" required=""><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><textarea class="form-control" id="message" placeholder="Your Message *" required=""></textarea><small class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div><button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('footer')
    <script src={{ asset("assets/js/jquery.min.js", env("secure")) }}></script>
    <script src={{ asset("assets/bootstrap/js/bootstrap.min.js", env("secure")) }}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src={{ asset("assets/js/agency.js", env("secure")) }}></script>
</body>

</html>