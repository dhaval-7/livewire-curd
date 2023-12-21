<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title ?? 'Dashboard Home' }}</title>
    {{-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href={{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}>
    <link rel="stylesheet" href={{ asset('admin/vendors/base/vendor.bundle.base.css') }}>
    <link rel="stylesheet" href={{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}>
    <link rel="stylesheet" href={{ asset('admin/css/style.css') }}> --}}
    
    <link rel="shortcut icon" href={{ asset('admin/images/favicon.png') }} />
    
    
    @livewireStyles
    @vite(['resources/js/app.js'])  
</head>

<body>
    <div class="container-scroller">
        @livewire('layouts.nav')
        {{-- @include('components.layouts.nav') --}}

        <div class="container-fluid page-body-wrapper">
            @livewire('layouts.sideMenu')
            {{ $slot ?? '' }}
        </div>
    </div>
</body>
@livewireScripts
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" ></script>

{{-- <script src={{ asset('admin/vendors/base/vendor.bundle.base.js') }}></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src={{ asset('admin/vendors/chart.js/Chart.min.js') }}></script>
<script src={{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }}></script>
<script src={{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src={{ asset('admin/js/off-canvas.js') }}></script>
<script src={{ asset('admin/js/hoverable-collapse.js') }}></script>
<script src={{ asset('admin/js/template.js') }}></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src={{ asset('admin/js/dashboard.js') }}></script>
<script src={{ asset('admin/js/data-table.js') }}></script>
<script src={{ asset('admin/js/jquery.dataTables.js') }}></script>
<script src={{ asset('admin/js/dataTables.bootstrap4.js') }}></script>
<!-- End custom js for this page-->

<script src={{ asset('admin/js/jquery.cookie.js') }} type="text/javascript"></script> --}}
{{-- <script rel="stylesheet" href={{ asset('public/assets/build/adminTheme-a9be76ce.js') }}> --}}

</html>
