<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @yield('title');
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    <!-- third party css -->
    <link href="{{ asset('admin/assets/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css">
    <!-- third party css end -->

    <!-- App css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style">
    <link href="{{ asset('admin/assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style">
</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.partial.leftSidebar')
        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                @include('admin.partial.search')
                @include('admin.partial.content')
                @yield('content')
            </div> <!-- content -->
            <!-- Footer Start -->
            <footer class="footer">
                @include('admin.partial.footer')
            </footer>
            <!-- end Footer -->
        </div>
    </div>
    <!-- bundle -->
    <script src="{{ asset('admin/assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.min.js') }}"></script>

    <!-- third party js -->
    <script src="{{ asset('admin/assets/js/vendor/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/dataTables.checkboxes.min.js') }}"></script>

    <!-- third party js ends -->

    <!-- demo app -->
    {{-- <script src="{{ asset('admin/assets/js/pages/demo.products.js') }}"></script> --}}
    <!-- end demo js-->
    @yield('checkbox')
</body>

</html>
