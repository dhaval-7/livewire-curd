<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- plugins:css -->
    <link rel="stylesheet" href={{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}>
    <link rel="stylesheet" href={{ asset('admin/vendors/base/vendor.bundle.base.css') }}>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href={{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href={{ asset('admin/css/style.css') }}>
    <!-- endinject -->
    <link rel="shortcut icon" href={{ asset('admin/images/favicon.png') }} />
    <title>{{ $title ?? 'Dashboard Home' }}</title>    
    @livewireStyles
</head>
<body>
    <div class="container-scroller">
        {{-- @include('components.layouts.nav') --}}
        @livewire('layouts.nav')
        <div class="container-fluid page-body-wrapper">
            @livewire('layouts.sideMenu')
            {{ $slot ?? ''}}
        </div>
    </div>
    
    <!-- plugins:js -->
    <script src={{ asset('admin/vendors/base/vendor.bundle.base.js') }}></script>
    <!-- Plugin js for this page-->
    <script src={{ asset('admin/vendors/chart.js/Chart.min.js') }}></script>
    <script src={{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }}></script>
    <script src={{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}></script>
    <!-- End plugin js for this page-->
    <script src={{ asset('admin/js/off-canvas.js') }}></script>
    <script src={{ asset('admin/js/hoverable-collapse.js') }}></script>
    <script src={{ asset('admin/js/template.js') }}></script>
    <!-- Custom js for this page-->
    <script src={{ asset('admin/js/dashboard.js') }}></script>
    <script src={{ asset('admin/js/data-table.js') }}></script>
    <script src={{ asset('admin/js/jquery.dataTables.js') }}></script>
    <script src={{ asset('admin/js/dataTables.bootstrap4.js') }}></script>
    <!-- End custom js for this page-->
    <script src={{ asset('admin/js/jquery.cookie.js') }} type="text/javascript"></script>
    @livewireScripts
    {{-- @livewire('layouts.script') --}}

</body>

</html>
