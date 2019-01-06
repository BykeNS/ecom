<!DOCTYPE html>
<html lang="en">

<head>

    @include('backend.includes.head')
    <title>@yield('page-title')</title>
    @yield('link')
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
       @include('backend.includes.nav')

        <!--Sidebar-->
       @include('backend.includes.sidebar')

        <div id="page-wrapper">
            <div class="row">
                 @include('includes.message')
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page-heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @yield('content')
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Js files -->
@include('backend.includes.script')
</body>

</html>
