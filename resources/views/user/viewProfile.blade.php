@include('components.includes.head-template')
<title>Penerimaan Bantuan Beasiswa Dinsos</title>

<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/components/layouts/biostyle.css') }}">
</head>

@include('components.layouts.user.navbar')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Biodata</h1>
    </div>

    <section class="section dashboard">
        </head>
        <div class="Foto">
            <div class="upload">
                <img src="{{ asset('image/noprofil.jpeg') }}" class="icon3" width="150" height="150"
                    alt=" ">
                <div class="round">
                    <input type="file">
                    <i class="fa fa-camera"></i>
                </div>
            </div>
            <span style="display: block; text-align: center; margin-top: 5px;">Pas Foto (Max 2 MB)</span>
        </div>
        <div class="biodata-container">
            <div class="flex-container">
                <div class="data-card">
                    <div class="card-header">
                        <h2><i class="fas fa-folder"></i> Data Pribadi</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <div class="label-text">-</div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin:</label>
                            <div class="label-text">-</div>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat lahir :</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="nik">NIK:</label>
                            <div class="label-text">-</div>

                        </div>

                        <div class="form-group">
                            <label for="agama">Agama:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="wa">No Handphone / WA:</label>
                            <div class="label-text">-</div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="kelurahan">kelurahan:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="kecamatan">Kecamatan:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="kota">Kota:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="bank">Nama Bank:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="norek">No Rekening:</label>
                            <div class="label-text">-</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-container">
                <div class="data-card">
                    <div class="card-header">
                        <h2><i class="fas fa-folder"></i> Profil Akademik</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="universitas">Universitas</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="lokasi_universitas">Lokasi Universitas:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="fakultas">Fakultas:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="jurusan">Jurusan:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="nim">NIM:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="tahun_masuk">Tahun Masuk :</label>
                            <div class="label-text">-</div>
                        </div>


                        <div class="form-group">
                            <label for="semester">Semester:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="ipk">Nilai IPK Terakhir:</label>
                            <div class="label-text">-</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-container">
                <div class="data-card">
                    <div class="card-header">
                        <h2><i class="fas fa-folder"></i> Data Keluarga </h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="ortu">Kelengkapan Orang Tua:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="status">Status Pernikahan Orang Tua:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="Ayah">Nama Ayah:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="perkerjaanayah">Pekerjaan Ayah:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="ibu">Nama Ibu:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="pekerjaanibu">Pekerjaan IBU:</label>
                            <div class="label-text">-</div>
                        </div>


                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="waortu">No. Handphone/WA:</label>
                            <div class="label-text">-</div>
                        </div>


                        <div class="form-group">
                            <label for="wali">Nama Wali:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="pwali">Pekerjaan Wali:</label>
                            <div class="label-text">-</div>
                        </div>

                        <div class="form-group">
                            <label for="nowali">No. Handphone/WA:(wali):</label>
                            <div class="label-text">-</div>
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
        </div>
        </form>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>

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
    </section>
    </body>
</main>
