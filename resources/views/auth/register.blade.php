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

<body style="background-image:url(&quot;assets/img/refg2-01.png&quot;);background-color:rgba(0,0,0,0);background-position:center;background-size:cover;background-repeat:no-repeat;">
    <div id="hero-top">
         @include('nav')
    </div>
    <div class="register-photo" style="height:625PX;background-color:rgba(255,255,255,0);">
        <div class="form-container" style="width:750px;margin-top:25px;">
            <div class="image-holder" style="width:375px;background-image:url(&quot;assets/img/bgregi-01.png&quot;);"></div>
            <form method="post" action="{{ route('register') }}" style="width:375px;">
                @csrf
                <h2 class="text-center"><strong>Create</strong> an Account</h2>
                <div class="form-group">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" style="font-size:13px;">
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password"placeholder="Password" style="font-size:13px;">
                </div>
                <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm-password"  style="font-size:13px;">
            </div>
                <div class="form-group">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama" style="font-size:13px;">
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="pria" value="Pria" name="gender" class="custom-control-input">
                    <label class="custom-control-label" for="pria">Pria</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="Wanita" name="gender" value="Wanita" class="custom-control-input">
                    <label class="custom-control-label" for="Wanita">Wanita</label>
                  </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign Up</button></div><a href="{{url('login')}}" class="already" style="font-size:11px;padding-top:3px;height:20;">Sudah punya akun ? Sign In Disini</a></form>
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
