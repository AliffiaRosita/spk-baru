<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>

@include('template.partial-admin.header')

</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        @include('template.partial-admin.left-panel')
    </aside>
    <!-- /#left-panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            @include('template.partial-admin.nav-top')
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content" >
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                @yield('content')

                <!-- /Widgets -->

            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2019 Kelompok 2 SPK
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    @include('template.partial-admin.script')
    <!-- Scripts -->


</body>
</html>
