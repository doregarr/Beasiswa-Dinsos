@include('components.includes.head-template')
<title>Penerimaan Bantuan Beasiswa Dinsos</title>

<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/components/layouts/file-upload.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/layouts/user/breadcrumbs.css') }}">
</head>

@include('components.layouts.user.navbar')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Formulir Pendaftran</h1>
        @include('components.layouts.user.breadcrumbs')
        </div>
    </div>

    <section class="section dashboard">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="card-title">Upload Documents</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="upload-file">
                            <label for="surat_permohonan" class="form-label">Surat Asli Permohonan</label>
                            <input type="file" class="form-control @error('surat_permohonan') is-invalid @enderror"
                                id="surat_permohonan" name="surat_permohonan">
                            @error('surat_permohonan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="biodata_pribadi" class="form-label">Scan Asli Biodata
                                Pribadi</label>
                            <input type="file" class="form-control @error('biodata_pribadi') is-invalid @enderror"
                                id="biodata_pribadi" name="biodata_pribadi">
                            @error('biodata_pribadi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="pas_foto" class="form-label">Pas Foto Ukuran</label>
                            <input type="file" class="form-control @error('pas_foto') is-invalid @enderror"
                                id="pas_foto" name="pas_foto">
                            @error('file3')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="kk" class="form-label">Rekening Bank Aktif</label>
                            <input type="file" class="form-control @error('kk') is-invalid @enderror" id="kk"
                                name="kk">
                            @error('kk')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="ktp" class="form-label">Kartu Tanda Penduduk</label>
                            <input type="file" class="form-control @error('ktp') is-invalid @enderror" id="ktp"
                                name="ktp">
                            @error('ktp')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="upload-file">
                            <label for="ktm" class="form-label">Kartu Aktif Mahasiswa</label>
                            <input type="file" class="form-control @error('ktm') is-invalid @enderror" id="ktm"
                                name="ktm">
                            @error('ktm')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="surat_aktif_kuliah" class="form-label">Scan Surat Asli
                                Permohonan</label>
                            <input type="file" class="form-control @error('surat_aktif_kuliah') is-invalid @enderror"
                                id="surat_aktif_kuliah" name="surat_aktif_kuliah">
                            @error('surat_aktif_kuliah')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="dtks" class="form-label">Lembar DTKS dari Dinas Sosial Kota
                                Medan</label>
                            <input type="file" class="form-control @error('dtks') is-invalid @enderror"
                                id="dtks" name="dtks">
                            @error('dtks')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="surat_beasiswa" class="form-label">Surat Pernyataan Tidak Sedang
                                Menerima
                                Beasiswa</label>
                            <input type="file" class="form-control @error('surat_beasiswa') is-invalid @enderror"
                                id="surat_beasiswa" name="surat_beasiswa">
                            @error('surat_beasiswa')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="surat_orangtua/wali" class="form-label">Surat Pernyataan yang
                                Bersangkutan
                                Orang Tua/Wali Tidak Berstatus ASN</label>
                            <input type="file"
                                class="form-control @error('surat_orangtua/wali') is-invalid @enderror"
                                id="surat_orangtua/wali" name="surat_orangtua/wali">
                            @error('surat_orangtua/wali')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="transkrip_nilai" class="form-label">Transkrip Nilai
                                Terakhir</label>
                            <input type="file" class="form-control @error('transkrip_nilai') is-invalid @enderror"
                                id="transkrip_nilai" name="transkrip_nilai">
                            @error('transkrip_nilai')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="tagihan_ukt" class="form-label">Tagihan Uang Kuliah/Bukti
                                Pembayaran
                                Uang Kuliah Terakhir</label>
                            <input type="file" class="form-control @error('tagihan_ukt') is-invalid @enderror"
                                id="tagihan_ukt" name="tagihan_ukt">
                            @error('tagihan_ukt')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="upload-file">
                            <label for="rekening_bank" class="form-label">Rekening Bank Aktif</label>
                            <input type="file" class="form-control @error('rekening_bank') is-invalid @enderror"
                                id="rekening_bank" name="rekening_bank">
                            @error('rekening_bank')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class=" btn-submit">Submit</button>
                    </form>
                </div>
            </div>

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
