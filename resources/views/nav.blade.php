    <nav class="navbar navbar-light navbar-expand-md fixed-top" style="background-color:#ffffff;">
        <div class="container-fluid"><a class="navbar-brand" href="{{url('/')}}" style="margin-left: -15px"> </a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>

            <!-- login user -->

            <div class="collapse navbar-collapse" 
                id="navcol-1">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="width:90px;">&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="width:90px;">&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                </ul>
                <ul class="nav navbar-nav">
                   <li>
                        <a href="{{url('/')}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Home" style="margin-right: 20px;"><i class="fa fa-home"></i></a>
                   </li>
                   <li>
                        <a href="{{url('team')}}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Team" style="     margin-right: 20px"><i class="fa fa-users"></i></a>
                   </li>
                   <li>
                        <a href="{{route('dashboarduser')}}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Dashboard User" style="     margin-right: 20px"><i class="fa fa-user"></i></a>
                   </li>
                   <li>
                        <a href="{{url('logout')}}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Logout" style="padding-left: 10;"><i class="fa fa-close"></i></a>
                   </li>
                    
                </ul>
            </div>




             <!-- login admin -->

            <!-- <div class="collapse navbar-collapse" 
                id="navcol-1">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="width:90px;">&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="width:90px;">&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                </ul>
                <ul class="nav navbar-nav">
                   <li>
                        <a href="{{url('/')}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Home" style="margin-right: 20px;"><i class="fa fa-home"></i></a>
                   </li>
                   <li>
                        <a href="{{url('team')}}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Team" style="     margin-right: 20px"><i class="fa fa-users"></i></a>
                   </li>
                   <li>
                        <a href="{{route('dashboard')}}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Dashboard" style="     margin-right: 20px"><i class="fa fa-user"></i></a>
                   </li>
                   <li>
                        <a href="{{url('logout')}}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Logout" style="padding-left: 10;"><i class="fa fa-close"></i></a>
                   </li>
                    
                </ul>
            </div>
 -->

 <!-- guest -->

            <!-- <div class="collapse navbar-collapse" 
                id="navcol-1">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="width:90px;">&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="width:90px;">&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                </ul>
                <ul class="nav navbar-nav">
                   <li>
                        <a href="{{url('/')}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Home" style="margin-right: 20px;"><i class="fa fa-home"></i></a>
                   </li>
                   <li>
                        <a href="{{url('team')}}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Team" style="     margin-right: 20px"><i class="fa fa-users"></i></a>
                   </li>
                   <li>
                        <a href="{{url('register')}}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Team" style="     margin-right: 20px"><i class="fa fa-users"></i></a>
                   </li>
                   <li>
                        <a href="{{url('login')}}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Logout" style="padding-left: 10;"><i class="fa fa-close"></i></a>
                   </li>
                    
                </ul>
            </div>
 -->



        </div>
    </nav>
    