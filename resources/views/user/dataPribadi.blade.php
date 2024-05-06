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
        <form action="data-keluarga" method="">
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
                <div class="flex-container-row">
                    <div class="data-card">
                        <div class="card-header">
                            <h2><i class="fas fa-folder"></i> Data Pribadi</h2>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" id="nama" name="nama" size="30">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin:</label>
                                <select id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="laki-laki">Laki-laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat lahir :</label>
                                <input type="text" id="tempatlahir" name="tempatlahir" size="30">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir:</label>
                                <input type="date" id="tanggal_lahir" name="tanggal_lahir">
                            </div>

                            <div class="form-group">
                                <label for="nik">NIK:</label>
                                <input type="text" id="nik" name="nik" size="16" maxlength="16">

                            </div>

                            
                            <div class="form-group">
                                <label for="agama">Agama:</label>
                                <select id="agama" name="agama">
                                    <option value="islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Khonghucu">Khonghucu</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="agama">Agama:</label>
                                <input type="text" id="agama" name="agama" size="30">
                            </div>

                            <div class="form-group">
                                <label for="wa">No Handphone / WA:</label>
                                <input type="text" id="wa" name="wa" size="30">
                            </div>
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="text" id="email" name="email" size="30">
                            </div>

                            <div class="form-group">
                                <label for="kelurahan">kelurahan:</label>
                                <input type="text" id="kelurahan" name="kelurahan" size="30">
                            </div>

                            <div class="form-group">
                                <label for="kecamatan">Kecamatan:</label>
                                <input type="text" id="kecamatan" name="kecamatan" size="30">
                            </div>

                            <div class="form-group">
                                <label for="kota">Kota:</label>
                                <input type="text" id="kota" name="kota" size="30">
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" id="alamat" name="alamat" size="30">
                            </div>

                            <div class="form-group">
                                <label for="bank">Nama Bank:</label>
                                <input type="text" id="bank" name="norek" size="30">
                            </div>

                            <div class="form-group">
                                <label for="norek">No Rekening:</label>
                                <input type="text" id="norek" name="norek" size="30">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn-submit" type="submit">Submit</button>
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
