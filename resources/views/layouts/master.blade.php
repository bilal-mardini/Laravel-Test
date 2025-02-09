<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light"
    data-menu-styles="dark">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
@include('admin.partials.head')
@stack('styles')
<body dir="rtl">
    <!-- LOADER -->
    <div id="loader">
        <img src="{{ asset('build/assets/images/media/loader.svg') }}" alt="">
    </div>
    <!-- END LOADER -->
    <!-- PAGE -->
    <div class="page">
        @include('admin.partials.header')
        @include('admin.partials.switcher')
        @include('admin.partials.sidebar')
        <!-- MAIN-CONTENT -->
        @yield('content')
        <!-- END MAIN-CONTENT -->
        @include('admin.partials.footer')
    </div>
    <!-- END PAGE-->
    @include('admin.partials.scripts')
    @stack('scripts')
</body>

</html>
