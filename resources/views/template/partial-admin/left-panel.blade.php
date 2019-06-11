<nav class="navbar navbar-expand-sm navbar-default">
    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="mb-3 mt-3">
            <img class="align-self-center rounded-circle mr-3" style="width:60px; height:60px;" alt="" src="{{asset('storage/'.Auth::user()->avatar)}}"> <p class="d-inline">{{Auth::user()->name}}</p>
            </li>

        <li class="{{ \Request::is('admin/dashboard') ? 'active' : '' }}">
            <a href="{{route('dashboard')}} "><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
            </li>
            <li class="{{ \Request::is('admin/user') || \Request::is('admin/user/*')  ? 'active' : '' }}" >
                    <a href="{{route('user.index')}}"><i class="menu-icon fa fa-user"></i>User </a>
                </li>
            <li class="{{ \Request::is('admin/criteria')|| \Request::is('admin/criteria/*')  ? 'active' : '' }}" >
                <a href="{{route('criteria.index')}}"><i class="menu-icon fa fa-check-square-o"></i>Criteria </a>
            </li>
            <li class="{{ \Request::is('admin/kost')|| \Request::is('admin/kost/*')  ? 'active' : '' }}" >
                <a href="{{route('kost.index')}}"><i class="menu-icon fa fa-home"></i>Kost </a>
            </li>
            <li class="{{ \Request::is('admin/prosesKriteria') ? 'active' : '' }}" >
                <a href="{{route('form.kriteria')}}"><i class="menu-icon fa fa-home"></i>Proses Hitung</a>
            </li>
        </ul>
    </div>
</nav>
