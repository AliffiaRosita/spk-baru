
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK AHP</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
</head>

<body style="background-image:url(&quot;assets/img/da-01.png&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;background-color:rgb(255,255,255);">
    <div id="hero-top">
        @include('nav')
    </div>
    <div class="team-clean" style="height:1100px;background-color:rgba(255,255,255,0);">
        <div class="container">
            <div class="intro" style="padding-top:50px;">
                <h2 class="text-center">TEAM</h2>
                <p class="text-center" style="margin-top:-30px;margin-bottom:30px;">KELOMPOK 2 AHP&nbsp;</p>
            </div>
            <div class="row people">
            <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="{{asset('assets/img/mona.jpg')}}">
                    <h3 class="name"><strong>Aliffia Rosita</strong><br></h3>
                    <p class="title">1615015169</p>
                    <p class="title">BACK-END</p>
                    <div class="social"><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/ur.png">
                    <h3 class="name">Rafif Khosyi</h3>
                    <p class="title">1615015055</p>
                    <p class="title">FRONT-END</p>
                    <div class="social"><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/3.jpg">
                    <h3 class="name">Deni Saputra</h3>
                    <p class="title">1615015084</p>
                    <p class="title">LAPORAN</p>
                    <div class="social"><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                <div class="col"></div>
                <div class="col-md-6 col-lg-4 item" style="margin-top:15px;"><img class="rounded-circle" src="assets/img/3.jpg">
                    <h3 class="name">Muhammad Sahli Nasuha</h3>
                    <p class="title">1615015090</p>
                    <p class="title">LAPORAN</p>
                    <div class="social"><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                <div class="col-md-6 col-lg-4 item" style="margin-top:15px;"><img class="rounded-circle" src="assets/img/3.jpg">
                    <h3 class="name">Carl Kent</h3>
                    <p class="title">Stylist</p>
                    <p class="title">Stylist</p>
                    <div class="social"><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
     @include('footer')
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        } );
    </script>
</body>

</html>
