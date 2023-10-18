<!doctype html>
<html lang="en">

    <head>
        {{-- STYLE --}}
        @include('components.style')
        {{-- END OF STYLE --}}
    </head>

    <body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            {{-- HEADER --}}
            @include('components.header')
            {{-- END OF HEADER --}}

            <!-- ========== Left Sidebar Start ========== -->
            @include('components.sidebar')
            <!-- ========== Left Sidebar End ========== -->
            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            @yield('content')
            <!-- ============================================================== -->
            <!-- End right Content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END layout-wrapper -->


        <!-- JAVASCRIPT -->
        @include('components.scripts')
        <!-- END OF JAVASCRIPT -->
    </body>

</html>