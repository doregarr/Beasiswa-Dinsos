@include('components.includes.head-template')
<title>Penerimaan Bantuan Beasiswa Dinsos</title>

<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/components/layouts/biostyle.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/layouts/user/breadcrumbs.css') }}">
</head>

@include('components.layouts.user.navbar')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Formulir Pendaftran</h1>
        @include('components.layouts.user.breadcrumbs')
    </div>

    <section class="section dashboard">
        <form action="file-upload" method="">
            <div class="biodata-container">
                <div class="flex-container-row">
                    <div class="data-card">
                        <div class="card-header">
                            <h2><i class="fas fa-folder"></i> Profil Akademik</h2>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="universitas">Universitas</label>
                                <input type="text" id="universitas" name="universitas" size="30">
                            </div>
        
                            <div class="form-group">
                                <label for="lokasi_universitas">Lokasi Universitas:</label>
                                <input type="text" id="lokuniv" name="lokuniv" size="30">
                            </div>
        
                            <div class="form-group">
                                <label for="fakultas">Fakultas:</label>
                                <input type="text" id="fakultas" name="fakultas">
                            </div>
        
                            <div class="form-group">
                                <label for="jurusan">Jurusan:</label>
                                <input type="text" id="jurusan" name="jurusan">
                            </div>
        
                            <div class="form-group">
                                <label for="nim">NIM:</label>
                                <input type="text" id="nim" name="nim" size="30">
                            </div>
        
                            <div class="form-group">
                                <label for="tahun_masuk">Tahun Masuk :</label>
                                <input type="text" id="tahunmasuk" name="tahunmasuk" size="30">
                            </div>
        
        
                            <div class="form-group">
                                <label for="semester">Semester:</label>
                                <input type="text" id="semester" name="semester" size="30">
                            </div>
        
                            <div class="form-group">
                                <label for="ipk">Nilai IPK Terakhir:</label>
                                <input type="text" id="ipk" name="ipk" size="30">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn-submit" type="submit">Submit</button>
            </div>
        </form>
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
