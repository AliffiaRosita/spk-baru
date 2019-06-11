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
                        <a href="{{url('team')}}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Team"><i class="fa fa-users"></i></a>
                    </div>

                    @auth

                    @if (Auth::user()->role =='user')
                    <div class="user-area dropdown float-right">
                        <a href="{{route('dashboarduser')}}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Dashboard User" style="     margin-right: 20px"><i class="fa fa-user"></i></a>
                   </div>
                   @else
                   <div class="user-area dropdown float-right">
                        <a href="{{route('dashboard')}}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Dashboard Admin" style="     margin-right: 20px"><i class="fa fa-user"></i></a>
                   </div>
                   @endif
                    @endauth

                    @guest
                    <div class="user-area dropdown float-right">
                            <a href="{{route('login')}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Login"><i class="fa fa-sign-in"></i></a>
                        </div>
                    @else
                        <div class="user-area dropdown float-right">
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Logout"><i class="fa fa-close"></i></a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                    @endguest


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
