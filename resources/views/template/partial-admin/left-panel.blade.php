<nav class="navbar navbar-expand-sm navbar-default">
    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="mb-3 mt-3">
                    <img class="align-self-center rounded-circle mr-3" style="width:60px; height:60px;" alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYAnqnTlCKxvbWg6NUb5PJ8Q6lRXFi3_ou3MUhYUAw_CT8G2A3Bg"> <p class="d-inline">john Doe</p>
            </li>

        <li class="{{ \Request::is('dashboard') ? 'active' : '' }}">
            <a href="{{route('dashboard')}} "><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
            </li>
            <li class="{{ \Request::is('user') || \Request::is('user/*')  ? 'active' : '' }}" >
                    <a href="{{route('user.index')}}"><i class="menu-icon fa fa-user"></i>User </a>
                </li>
            <li class="{{ \Request::is('criteria')|| \Request::is('criteria/*')  ? 'active' : '' }}" >
                <a href="{{route('criteria.index')}}"><i class="menu-icon fa fa-check-square-o"></i>Criteria </a>
            </li>
            <li class="{{ \Request::is('kost')|| \Request::is('kost/*')  ? 'active' : '' }}" >
                <a href="{{route('kost.index')}}"><i class="menu-icon fa fa-home"></i>Kost </a>
            </li>
            <li class="{{ \Request::is('prosesKriteria') ? 'active' : '' }}" >
                <a href="{{route('form.kriteria')}}"><i class="menu-icon fa fa-home"></i>Proses Hitung</a>
            </li>
        </ul>
    </div>
</nav>
