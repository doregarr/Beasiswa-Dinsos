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
        <form action="{{ route('storeDataKeluarga') }}" method="POST">
            @csrf
        <div class="biodata-container">
            <div class="flex-container-row">
                <div class="data-card">
                    <div class="card-header">
                        <h2><i class="fas fa-folder"></i> Data Keluarga </h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="ortu">Kelengkapan Orang Tua:</label>
                            <select id="statusOrangTua" name="statusOrangTua">
                                <option value="Lengkap">Lengkap</option>
                                <option value="Yatim">Yatim</option>
                                <option value="Piatu">Piatu</option>
                                <option value="Yatim-Piatu">Yatim-piatu</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="status">Status Pernikahan Orang Tua:</label>
                            <select id="statusPernikahan" name="statusPernikahan">
                                <option value="Kawin">Kawin</option>
                                <option value="Cerai Hidup">Cerai Hidup</option>
                                <option value="Cerai Mati">Cerai Mati</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Ayah">Nama Ayah:</label>
                            <input type="text" id="namaAyah" name="namaAyah">
                        </div>

                        <div class="form-group">
                            <label for="perkerjaanayah">Pekerjaan Ayah:</label>
                            <input type="text" id="pekerjaanAyah" name="pekerjaanAyah">
                        </div>

                        <div class="form-group">
                            <label for="ibu">Nama Ibu:</label>
                            <input type="text" id="namaIbu" name="namaIbu" size="30">
                        </div>

                        <div class="form-group">
                            <label for="pekerjaanibu">Pekerjaan IBU:</label>
                            <input type="text" id="pekerjaanIbu" name="pekerjaanIbu" size="30">
                        </div>


                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <input type="text" id="alamat" name="alamat" size="30">
                        </div>

                        <div class="form-group">
                            <label for="waortu">No. Handphone/WA:(Orang Tua)</label>
                            <input type="text" id="noHP" name="noHP" size="30" maxlength="13">
                        </div>


                        <div class="form-group">
                            <label for="wali">Nama Wali:</label>
                            <input type="text" id="namaWali" name="namaWali" size="30">
                        </div>

                        <div class="form-group">
                            <label for="pwali">Pekerjaan Wali:</label>
                            <input type="text" id="pekerjaanWali" name="pekerjaanWali" size="30">
                        </div>

                        <div class="form-group">
                            <label for="nowali">No. Handphone/WA:(Wali)</label>
                            <input type="text" id="noHPWali" name="noHPWali" size="30" maxlength="13">
                        </div>

                        <script>
                            document.getElementById('biodataForm').addEventListener('submit', function(event) {
                                // Validasi untuk foto
                                var fileInput = document.getElementById('foto');
                                var fileSize = fileInput.files[0].size; // Ukuran dalam bytes
                                var maxSize = 5 * 1024 * 1024; // Ukuran maksimal 5 MB
                                var allowedTypes = ['image/jpeg', 'image/png', 'image/gif']; // Tipe file yang diizinkan
                                var fileType = fileInput.files[0].type;

                                if (fileSize > maxSize) {
                                    alert('Ukuran file foto tidak boleh lebih dari 5 MB');
                                    event.preventDefault();
                                } else if (!allowedTypes.includes(fileType)) {
                                    alert('Tipe file foto tidak valid. Harap unggah file dengan format JPG, PNG, atau GIF');
                                    event.preventDefault();
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
            <button class="btn-submit" type="submit" >Submit</button>
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
    <script>
        // Menyembunyikan notifikasi setelah 5 detik
        setTimeout(function(){
            var notification = document.getElementById('notification');
            if(notification) {
                notification.style.display = 'none';
            }
        }, 3000); // 5000 milidetik = 3 detik


    </script>
    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

    </body>
