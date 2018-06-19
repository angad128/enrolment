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

    <div id="wrapper">

        @include('include/sidebar')

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
