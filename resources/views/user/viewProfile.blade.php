@include('components.includes.head-template')
<title>Penerimaan Bantuan Beasiswa Dinsos</title>

<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/components/layouts/biostyle.css') }}">
<style>
        /* CSS untuk styling */
        .upload-container {
            margin-top: 20px;
        }

        .upload-file {
            margin-bottom: 20px;
            position: relative;
        }

        .upload-file label {
            display: block;
            margin-bottom: 5px;
        }

        .upload-file input[type="file"] {
            width: calc(100% - 120px); /* Lebar kotak input dikurangi dengan lebar tombol View */
        }

        .view-button {
            position: absolute;
            top: 0;
            right: 0;
            margin-top: 32px;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none; /* Menghapus garis bawah */
        }
    </style>
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
        <div class="flex-container">
            <div class="data-card">
                <div class="card-header">
                    <h2><i class="fas fa-folder"></i> Dokumen </h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="upload-file">
                                <label for="surat_permohonan">Surat Asli Permohonan Ditujukan Kepada Bapak Wali Kota</label>
                                <input type="file" class="form-control @error('surat_permohonan') is-invalid @enderror" id="surat_permohonan" name="surat_permohonan">
                                <a href="#" class="view-button" id="view_surat_permohonan">View</a>
                                @error('surat_permohonan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="upload-file">
                                <label for="biodata_pribadi">Scan Asli Biodata Pribadi</label>
                                <input type="file" class="form-control @error('biodata_pribadi') is-invalid @enderror" id="biodata_pribadi" name="biodata_pribadi">
                                <a href="#" class="view-button" id="view_biodata_pribadi">View</a>
                                @error('biodata_pribadi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        <div class="upload-file">
                            <label for="pas_foto" class="form-label">Pas Foto Ukuran</label>
                            <input type="file" class="form-control @error('pas_foto') is-invalid @enderror" id="pas_foto" name="pas_foto">
                            <a href="#" class="view-button" id="view_pas_foto">View</a>
                            @error('file3')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="kk" class="form-label">Kartu Keluarga</label>
                            <input type="file" class="form-control @error('kk') is-invalid @enderror" id="kk" name="kk">
                            <a href="#" class="view-button" id="view_kk">View</a>
                            @error('kk')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="ktp" class="form-label">Kartu Tanda Penduduk</label>
                            <input type="file" class="form-control @error('ktp') is-invalid @enderror" id="ktp" name="ktp">
                            <a href="#" class="view-button" id="view_ktp">View</a>
                            @error('ktp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="upload-file">
                            <label for="ktm" class="form-label">Kartu Aktif Mahasiswa</label>
                            <input type="file" class="form-control @error('ktm') is-invalid @enderror" id="ktm" name="ktm">
                            <a href="#" class="view-button" id="view_ktm">View</a>
                            @error('ktm')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="surat_aktif_kuliah" class="form-label">Scan Surat Keterangan AKtif Kuliah</label>
                            <input type="file" class="form-control @error('surat_aktif_kuliah') is-invalid @enderror" id="surat_aktif_kuliah" name="surat_aktif_kuliah">
                            <a href="#" class="view-button" id="view_surat_aktif_kuliah">View</a>
                            @error('surat_aktif_kuliah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="dtks" class="form-label">Lembar DTKS dari Dinas Sosial Kota Medan</label>
                            <input type="file" class="form-control @error('dtks') is-invalid @enderror" id="dtks" name="dtks">
                            <a href="#" class="view-button" id="view_dtks">View</a>
                            @error('dtks')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="surat_beasiswa" class="form-label">Surat Pernyataan Tidak Sedang Menerima Beasiswa</label>
                            <input type="file" class="form-control @error('surat_beasiswa') is-invalid @enderror" id="surat_beasiswa" name="surat_beasiswa">
                            <a href="#" class="view-button" id="view_surat_beasiswa">View</a>
                            @error('surat_beasiswa')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="surat_orangtua/wali" class="form-label">Surat Pernyataan yang Bersangkutan Orang Tua/Wali Tidak Berstatus ASN</label>
                            <input type="file" class="form-control @error('surat_orangtua/wali') is-invalid @enderror" id="surat_orangtua/wali" name="surat_orangtua/wali">
                            <a href="#" class="view-button" id="view_surat_orangtua/wali">View</a>
                            @error('surat_orangtua/wali')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="transkrip_nilai" class="form-label">Transkrip Nilai Terakhir</label>
                            <input type="file" class="form-control @error('transkrip_nilai') is-invalid @enderror" id="transkrip_nilai" name="transkrip_nilai">
                            <a href="#" class="view-button" id="view_transkrip_nilai">View</a>
                            @error('transkrip_nilai')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="tagihan_ukt" class="form-label">Tagihan Uang Kuliah/Bukti Pembayaran Uang Kuliah Terakhir</label>
                            <input type="file" class="form-control @error('tagihan_ukt') is-invalid @enderror" id="tagihan_ukt" name="tagihan_ukt">
                            <a href="#" class="view-button" id="view_tagihan_ukt">View</a>
                            @error('tagihan_ukt')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="rekening_bank" class="form-label">Rekening Bank Aktif</label>
                            <input type="file" class="form-control @error('rekening_bank') is-invalid @enderror" id="rekening_bank" name="rekening_bank">
                            <a href="#" class="view-button" id="view_rekening_bank">View</a>
                            @error('rekening_bank')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
        <script>
        // Fungsi untuk menampilkan tautan untuk membuka file saat tombol "View" diklik
        function showFileView(fileInputId) {
            var fileInput = document.getElementById(fileInputId);
            var viewButton = document.getElementById('view_' + fileInputId);

            if (fileInput && viewButton) {
                viewButton.addEventListener('click', function(event) {
                    event.preventDefault(); // Menghentikan perilaku default dari tombol "View"
                    
                    // Membuat tautan untuk membuka file yang dipilih
                    var fileUrl = URL.createObjectURL(fileInput.files[0]);
                    window.open(fileUrl); // Membuka tautan file di jendela baru
                });
            }
        }

        // Panggil fungsi untuk setiap input file yang ingin Anda gunakan
        showFileView('surat_permohonan'); // Ubah 'surat_permohonan' sesuai dengan id input file Anda
        showFileView('biodata_pribadi');
        showFileView('pas_foto');
        showFileView('kk');
        showFileView('ktp');
        showFileView('ktm');
        showFileView('surat_aktif_kuliah');
        showFileView('dtks');
        showFileView('surat_beasiswa');
        showFileView('surat_orangtua/wali');
        showFileView('transkrip_nilai');
        showFileView('tagihan_ukt');
        showFileView('rekening_bank');
         // Ubah 'biodata_pribadi' sesuai dengan id input file Anda
        // Panggil lagi fungsi ini untuk input file lainnya jika diperlukan
    </script>
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
