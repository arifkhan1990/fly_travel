
<!DOCTYPE html>

<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    @include('backend.layouts.head_css')
</head>
<!-- END: Head -->
<body class="app">
    @include('backend.layouts.mobileSideNavbar')
<div class="flex">
    <!-- BEGIN: Side Menu -->
    @include('backend.layouts.sidenav')
    <!-- END: Side Menu -->
    <!-- BEGIN: Content -->
    <div class="content">
        @include('backend.layouts.topNavBar')
      @yield('main_content')
    </div>
    <!-- END: Content -->
</div>
    @include('backend.layouts.footer_js')
</body>
</html>
