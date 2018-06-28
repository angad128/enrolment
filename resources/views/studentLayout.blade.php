<!DOCTYPE html>
<html lang="en">

<head>
    @include('include/links')
    @yield('styles')
    <style type="text/css">
        #page-wrapper .dashboard {
            margin-top: 70px;
        }
        @media only screen and (max-width: 760px) {
            #page-wrapper .dashboard {
                margin-top: 120px;
            }
        }
    </style>
</head>

<body>
      <nav class="navbar navbar-default navbar-static-top navbar-fixed-top  " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li><a href="{{url('/studentProfile')}}""><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="{{url('/studentSetting')}}"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

    <div id="wrapper">

        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper -->

        @include('include/footer')

    </div>
    <!-- /#wrapper -->

    @include('include/scripts')
    @yield('scripts')
</body>



</html>
