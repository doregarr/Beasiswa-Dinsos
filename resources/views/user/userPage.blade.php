@include('components.includes.head-template')
<title>Penerimaan Bantuan Beasiswa Dinsos</title>

<link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>

@include('components.layouts.user.navbar')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>

    </div>

    <section class="section dashboard">
    </section>


    <!-- Vendor JS Files -->
    {{-- {{ asset('css/style.css') }} --}}
    <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

    </body>

    </html>
