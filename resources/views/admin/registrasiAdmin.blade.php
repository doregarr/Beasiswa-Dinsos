@include('components.includes.head-template')
<title>Registrasi Admin</title>

<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/admin/registrasi.css') }}">
</head>

@include('components.layouts.admin.navbar')
<main id="main" class="main">

    <section class="section dashboard">
            @if (session('success'))
                <div id="notification" class=" alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <body>

                <div class="card-container">

                    <div class="registrasi-container">
                       <div class="box-container">
                        <div class="box-registrasi">
                            <div class="input-container">
                                <h3 class="registrasi">Registrasi</h3>
                                <form method="POST" action="{{ route('registerAdmin') }}">
                                    @csrf
                                <div class="input-wrapper">

                                    <i for="nik" class="fas fa-id-card placeholder-icon"></i>
                                    <input type="text" id="nik" placeholder="Masukkan Nomor Induk Kependudukan"
                                        class="input-nik" name="nik">
                                </div>
                                <div class="input-wrapper">
                                    <i for="nama" class="fa fa-user placeholder-icon"></i>
                                    <input type="text" id="nama" placeholder="Masukkan Nama Anda"
                                        class="input-nik" name="name">
                                </div>
                                <div class="input-wrapper">
                                    <i for="email" class="fas fa-envelope placeholder-icon"></i>
                                    <input type="text" id="email" placeholder="Masukkan Email Anda"
                                        class="input-nik" name="email">
                                </div>
                                <div class="input-wrapper">
                                    <i for="nik" class="fas fa-lock placeholder-icon"></i>
                                    <input type="password" placeholder="Masukkan Password" class="input-password"name="password">
                                </div>
                            </div>
                            <div class="button">
                                <button type="submit" class="btn-daftar"> Tambah Admin </button>
                            </div>
                        </div>
                       </div>
                    </form>
                    </div>
                </div>
                <script>
                    // Menyembunyikan notifikasi setelah 5 detik
                    setTimeout(function(){
                        var notification = document.getElementById('notification');
                        if(notification) {
                            notification.style.display = 'none';
                        }
                    }, 3000); // 5000 milidetik = 3 detik

                </script>
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
