<div class="top-left">
    <div class="navbar-header">
            <a class="navbar-brand" href="{{route('dashboard')}}"><img src="{{asset('template/images/logo.svg')}}"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{asset('template/images/logo2.png')}}" alt="Logo"></a>
        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
    </div>
</div>
<div class="top-right">
    <div class="header-menu">
        <div class="header-left">
                <div class="user-area dropdown float-right">
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();" class="nav-link text-danger" data-toggle="tooltip" title="Logout"><i class="fa fa-power-off"></i> Logout</a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

    </div>
</div>
