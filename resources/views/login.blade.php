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

<body style="background-color:rgba(0,0,0,0);background-image:url(&quot;assets/img/Untitled-1-01-01.png&quot;);background-size:cover;background-repeat:no-repeat;background-position:center;">
    <div id="hero-top">
        @include('nav')
    </div>
    <div class="login-clean" style="height:625px;background-color:rgba(241,247,252,0);">
        <form method="post" style="margin-top:35px;">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon fa fa-users"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" style="font-size:13px;"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" style="font-size:13px;"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign In</button></div><a href="{{url('/register')}}" class="forgot" style="font-size:11px;">Belum punya akun ? <strong>Sign Up</strong></a></form>
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
