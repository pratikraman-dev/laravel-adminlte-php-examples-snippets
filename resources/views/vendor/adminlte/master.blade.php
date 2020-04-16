<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title_prefix', config('adminlte.title_prefix', ''))
        @yield('title', config('adminlte.title', 'AdminLTE 3'))
        @yield('title_postfix', config('adminlte.title_postfix', ''))
    </title>

    @if(! config('adminlte.enabled_laravel_mix'))
            <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
          href="{{ asset('vendor/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('vendor/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('vendor/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('vendor/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('vendor/plugins/summernote/summernote-bs4.css') }}">
    <!-- Ion Slider -->
    <link rel="stylesheet" href="{{ asset('vendor/plugins/ion-rangeslider/css/ion.rangeSlider.min.css') }}">
    <!-- bootstrap slider -->
    <link rel="stylesheet" href="{{ asset('vendor/plugins/bootstrap-slider/css/bootstrap-slider.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('vendor/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/sweetalert2/sweetalert2.min.css')  }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('vendor/plugins/toastr/toastr.min.css')  }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet"
          href="{{ asset ('vendor/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')  }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('vendor/plugins/select2/css/select2.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')  }}">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('vendor/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')  }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('vendor/overlayScrollbars/css/dataTables.bootstrap4.css') }}">
    <!-- jsGrid -->
    <link rel="stylesheet" href="{{ asset('vendor/plugins/jsgrid/jsgrid.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/jsgrid/jsgrid-theme.min.css')  }}">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="{{ asset('vendor/plugins/fullcalendar/main.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/fullcalendar-daygrid/main.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/fullcalendar-timegrid/main.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/fullcalendar-bootstrap/main.min.css')  }}">
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="{{ asset('vendor/plugins/ekko-lightbox/ekko-lightbox.css')  }}">


    @include('adminlte::plugins', ['type' => 'css'])

    @yield('adminlte_css_pre')

    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">

    @yield('adminlte_css')

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @else
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @endif

</head>
<body class="@yield('classes_body')" @yield('body_data')>

@yield('body')

@if(! config('adminlte.enabled_laravel_mix'))
        <!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('vendor/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('vendor/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('vendor/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('vendor/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('vendor/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('vendor/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('vendor/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('vendor/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendor/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('vendor/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('vendor/dist/js/pages/dashboard.js') }}"></script>
<!-- PAGE SCRIPTS -->
<script src="{{ asset('vendor/dist/js/pages/dashboard2.js') }}"></script>
<script src="{{ asset('vendor/dist/js/pages/dashboard3.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('vendor/overlayScrollbars/js/demo.js') }}"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('vendor/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('vendor/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- FLOT CHARTS -->
<script src="{{ asset('vendor/plugins/flot/jquery.flot.js') }}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{ asset('vendor/plugins/flot-old/jquery.flot.resize.min.js') }}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{ asset('vendor/plugins/flot-old/jquery.flot.pie.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('vendor/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- Ion Slider -->
<script src="{{ asset('vendor/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')  }}"></script>
<!-- Bootstrap slider -->
<script src="{{ asset('vendor/plugins/bootstrap-slider/bootstrap-slider.min.js')  }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('vendor/plugins/sweetalert2/sweetalert2.min.js')  }}"></script>
<!-- Toastr -->
<script src="{{ asset('vendor/plugins/toastr/toastr.min.js')  }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset('vendor/plugins/bs-custom-file-input/bs-custom-file-input.min.js')  }}"></script>
<!-- Select2 -->
<script src="{{ asset('vendor/plugins/select2/js/select2.full.min.js')  }}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{ asset('vendor/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')  }}"></script>
<!-- InputMask -->
<script src="{{ asset('vendor/plugins/inputmask/min/jquery.inputmask.bundle.min.js')  }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('vendor/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')  }}"></script>
<!-- Bootstrap Switch -->
<script src="{{ asset('vendor/plugins/bootstrap-switch/js/bootstrap-switch.min.js')  }}"></script>
<!-- jquery-validation -->
<script src="{{ asset('vendor/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('vendor/overlayScrollbars/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/overlayScrollbars/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('vendor/overlayScrollbars/js/dataTables.bootstrap4.js') }}"></script>
<!-- jsGrid -->
<script src="{{ asset('vendor/plugins/jsgrid/demos/db.js')  }}"></script>
<script src="{{ asset('vendor/plugins/jsgrid/jsgrid.min.js')  }}"></script>
<!-- fullCalendar 2.2.5 -->
<script src="{{ asset('vendor/plugins/fullcalendar/main.min.js')  }}"></script>
<script src="{{ asset('vendor/plugins/fullcalendar-daygrid/main.min.js')  }}"></script>
<script src="{{ asset('vendor/plugins/fullcalendar-timegrid/main.min.js')  }}"></script>
<script src="{{ asset('vendor/plugins/fullcalendar-interaction/main.min.js')  }}"></script>
<script src="{{ asset('vendor/plugins/fullcalendar-bootstrap/main.min.js')  }}"></script>
<!-- Ekko Lightbox -->
<script src="{{ asset('vendor/plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>


@yield('validaction')
@include('adminlte::plugins', ['type' => 'js'])
@yield('adminlte_js')
@else
    <script src="{{ asset('js/app.js') }}"></script>
    @endif

            <!-- datatable script path of this blade file view/backend/tables/data.blade.php -->
    @yield('myscript')
            <!-- dashboard script path of this blade file view/backend/dashboard.blade.php -->
    @yield('dashboard')
            <!-- calendar script path of this blade file view/backend/calendar.blade.php -->
    @yield('calendar')
            <!-- gallery script path of this blade file view/backend/gallery.blade.php -->
    @yield('gallery')
            <!-- chart script path of this blade file view/backend/charts/chartjs.blade.php -->
    @yield('chartjs')
            <!-- for flotchart script path of this blade file view/backend/charts/flot.blade.php -->
    @yield('flot')
            <!-- for inlinechart script path of this blade file view/backend/charts/inline.blade.php -->
    @yield('inline1')<!-- script is not working -->
    <!-- UI elements script path of this blade file view/backend/ui/general.blade.php -->
    @yield('generalui')
            <!-- sliders elements script path of this blade file view/backend/ui/sliders.blade.php -->
    @yield('sliders')
            <!-- modals elements script path of this blade file view/backend/ui/modals.blade.php -->
    @yield('modals')
            <!-- ribbon elements script path of this blade file view/backend/ui/ribbons.blade.php -->
    @yield('ribbon')
            <!--  advanced form script path of this blade file view/backend/forms/advanced.blade.php -->
    @yield('advanced')
            <!--  editor form script path of this blade file view/backend/forms/editors.blade.php -->
    @yield('editor')
            <!--  validation form script path of this blade file view/backend/forms/validation.blade.php -->
    @yield('validation')
            <!--  jsgrid table script path of this blade file view/backend/tables/jagrid.blade.php -->
    @yield('jagrid')
            <!--  mailbox script path of this blade file view/backend/mailbox/inbox.blade.php -->
    @yield('inbox')
            <!--  compose script path of this blade file view/backend/mailbox/compose.blade.php -->
    @yield('compose')
</body>
</html>
