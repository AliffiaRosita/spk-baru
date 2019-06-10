            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('dashboard')}}"><img src="{{asset('template/images/logo.svg')}}"></a>
                    <a class="navbar-brand hidden" href="./"><img src="{{asset('template/images/logo2.png')}}" alt="Logo"></a>
                    
                </div>
            </div>

            <!-- login user -->
            
            <div class="top-right">
                <div class="header-menu">

                    <div class="user-area dropdown float-right">
                        <a href="{{url('/')}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Home"><i class="fa fa-home"></i></a>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="{{url('team')}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Team"><i class="fa fa-users"></i></a>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="{{route('dashboarduser')}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Dashboard User"><i class="fa fa-user"></i></a>
                    </div>


                    <div class="user-area dropdown float-right">
                        <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Logout"><i class="fa fa-close"></i></a>
                    </div>

                </div>
            </div>



<!-- login admin -->
<!--             
            <div class="top-right">
                <div class="header-menu">

                    <div class="user-area dropdown float-right">
                        <a href="{{url('/')}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Home"><i class="fa fa-home"></i></a>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="{{url('team')}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Team"><i class="fa fa-users"></i></a>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="{{route('dashboard')}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Dashboard Admin"><i class="fa fa-user"></i></a>
                    </div>


                    <div class="user-area dropdown float-right">
                        <a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Logout"><i class="fa fa-close"></i></a>
                    </div>

                </div>
            </div>
 -->