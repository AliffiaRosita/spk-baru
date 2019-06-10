<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>

@include('template.partial.header')

</head>

<body>
 

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            @include('template.partial.right-panel')
        </header>
    </div>


        <!-- /#header -->
        <!-- Content -->
        <div class="content" >
            <!-- Animated -->
            <div class="animated fadeIn" style="margin-top: 0px">
                <!-- DI IF KAN SUAPYA HEADER ADMIN KELUAR -->
                @yield('contentheaderuser')
                
                @yield('contentheaderadmin')
                

           <!--  <div id="right-panel" class="right-panel"> -->
                @yield('contentuser')
            <!-- </div> -->
              

              

            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>

        <!-- Footer -->

       <!--  <footer class="site-footer">
            <div class="footer-inner bg-primary">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2019 Kelompok 2 SPK
                    </div>
                </div>
            </div>
        </footer> -->
        

        

        <!-- /.site-footer -->
    <!-- /#right-panel -->
    <!-- BAKCUP ADMIN -->

    @include('template.partial.script')
    <!-- Scripts -->


</body>
</html>
