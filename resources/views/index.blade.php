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

<body style="background-color:rgba(0,0,0,0);background-image:url(&quot;assets/img/spkspk2d-01.png&quot;);background-position:center;background-size:cover;background-repeat:no-repeat;">
    <div></div>
    <section class="d-flex flex-column justify-content-between" id="hero" style="background-image:url(&quot;BG1A.png&quot;);background-position:center;background-size:contain;height:625px;background-repeat:no-repeat;background-color:rgba(255,255,255,0);">
        <div id="hero-top">
            @include('nav')
        </div>
        <div class="container" style="margin-top:179px;">
            <div class="row" style="margin-left:5px;">
                <div class="col-lg-7 col-xl-6 offset-xl-0" style="padding-bottom:100px;padding-right:82px;">
                    <h1 style="width:501px;font-family:Poppins, sans-serif;font-style:normal;font-weight:bold;letter-spacing:4px;font-size:45px;">SISTEM PENDUKUNG KEPUTUSAN<br></h1>
                    <p style="font-family:Poppins, sans-serif;line-height:24px;margin-top:15px;font-size:15px;color:rgb(121,121,121);margin-bottom:15px;">Menentukan Kost yang terbaik didaerah Universitas Mulawarman menggunakan metode AHP</p>
                    <div class="row">
                        <div class="col-auto col-xl-4 offset-xl-0 with-borders" data-aos="fade-up" data-aos-delay="500" style="padding-right:-31px;"><a class="btn btn-primary btn-block reserve-button" role="button" href="{{route('user.form.kriteria')}}" style="width:150px;margin-top:10px;background-color:#ff6d65;height:50px;font-family:Montserrat, sans-serif;font-weight:600;font-size:13px;font-style:normal;padding-right:12px;margin-left:-2px;padding-top:12px;">Coba Sekarang</a></div>
                    </div>
                </div>
                <div class="col" style="padding-bottom:100px;padding-right:82px;"></div>
            </div>
        </div>
        <div id="hero-bottom"></div>
    </section>
    <section class="d-flex align-items-center" data-aos="fade-up" data-aos-duration="700" id="aero" style="background-image:url(&quot;BG1B.png&quot;);height:625px;background-position:center;background-size:contain;background-repeat:no-repeat;">
        <div class="container">
            <div class="row" style="margin-top:-190px;margin-right:-70px;margin-left:0px;">
                <div class="col" style="padding-bottom:100px;padding-right:82px;"></div>
                <div class="col" style="padding-bottom:100px;padding-right:82px;">
                    <h2 style="color:#ff6d65;font-family:Poppins, sans-serif;font-weight:bold;font-size:35px;margin-bottom:8px;">AHP ?&nbsp;</h2>
                    <p style="color:rgb(121,121,121);font-size:15px;font-family:Poppins, sans-serif;margin-top:15px;margin-bottom:15px;">AHP merupkan suatu metode pendukung keputusan yang dikembangkan oleh professor matematika University of Pittsburgh, Thomas L. Satty.</p>
                    <p style="color:rgb(121,121,121);font-size:15px;font-family:Poppins, sans-serif;margin-top:15px;margin-bottom:15px;">Hal yang paling utama dalam AHP adalah hirarki fungsional dengan input utamanya berasal dari persepsi manusia. Dengan hirarki masalah kompleks dan tak terstruktur dapat dipecahkan ke dalam kelompok-kelompoknya dan diatur menjadi sebuah
                        bentuk hirarki.</p>
                    <div class="row">
                        <div class="col" data-aos="fade-up" data-aos-delay="400"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="testimonials-clean" style="height:625px;background-image:url(&quot;BG1C.png&quot;);background-position:center;background-size:contain;background-repeat:no-repeat;background-color:rgba(255,255,255,0);">
        <div class="container" style="padding-top:40px;">
            <div class="intro" style="padding-top:70px;">
                <h2 class="text-center" style="margin-bottom:50px;margin-top:20px;padding-top:50px;">TESTIMONAL</h2>
                <p class="text-center" style="margin-top:-30px;">Lihat siapa saja yang sudah menggunakan sistem</p>
            </div>
            <div class="row people" style="margin-top:70px;">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">saya merasa sangat tertolong untuk memilihk kost yang sesuai</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/1.jpg">
                        <h5 class="name">Rafif Khosyi&nbsp;</h5>
                        <p class="title">bLuE fAcE , yEAh AiGHtT</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">2D waifu is bless and curse at the same time</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/3.jpg">
                        <h5 class="name">Bram Dhia</h5>
                        <p class="title">DKV UI, 2016</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box" style="margin-top:0px;">
                        <p class="description">gucci gang gucci gang gucci gang gucci gang , lil pump uh .. yah</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/2.jpg">
                        <h5 class="name">Lil Sur</h5>
                        <p class="title">Begone Thot<br><br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonials-clean" style="height:625px;background-image:url(&quot;BG1C.png&quot;);background-position:center;background-size:contain;background-repeat:no-repeat;background-color:rgba(255,255,255,0);">
        <div class="container">
            <div class="row people" style="margin-top:70px;">
                <div class="col-md-6 col-lg-4 item"></div>
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
