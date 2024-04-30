@include('components.includes.head')

<title>Formulir Biodata</title>
<link rel="stylesheet" href="{{ asset('css/components/layouts/biostyle.css') }}">
</head>

<body>
    <!-- @include('components.includes.title')  -->

    <div class="Foto">
        <div class="upload">
            <img src="{{ asset('image/noprofil.jpeg') }}" class="icon3" width="150" height="150" alt=" ">
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

        <div class="flex-container">
            <div class="data-card">
                <div class="card-header">
                    <h2><i class="fas fa-folder"></i> Data Keluarga </h2>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="ortu">Kelengkapan Orang Tua:</label>
                        <select id="jenis_kelamin" name="jenis_kelamin">
                            <option value="laki-laki">Lengkap</option>
                            <option value="perempuan">Yatim</option>
                            <option value="perempuan">Piatu</option>
                            <option value="perempuan">Yatim-piatu</option>
                        </select>
                    </div>
    
                    <div class="form-group">
                        <label for="status">Status Pernikahan Orang Tua:</label>
                        <select id="jenis_kelamin" name="jenis_kelamin">
                            <option value="laki-laki">Kawin</option>
                            <option value="perempuan">Cerai Hidup</option>
                            <option value="perempuan">Cerai Mati</option>
    
                        </select>
                    </div>
    
                    <div class="form-group">
                        <label for="Ayah">Nama Ayah:</label>
                        <input type="text" id="ayah" name="ayah">
                    </div>
    
                    <div class="form-group">
                        <label for="perkerjaanayah">Pekerjaan Ayah:</label>
                        <input type="text" id="perkerjaanayah" name="perkerjaanayah">
                    </div>
    
                    <div class="form-group">
                        <label for="ibu">Nama Ibu:</label>
                        <input type="text" id="ibu" name="ibu" size="30">
                    </div>
    
                    <div class="form-group">
                        <label for="pekerjaanibu">Pekerjaan IBU:</label>
                        <input type="text" id="pekerjaanibu" name="pekerjaanibu" size="30">
                    </div>
    
    
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <input type="text" id="alamat" name="alamat" size="30">
                    </div>
    
                    <div class="form-group">
                        <label for="waortu">No. Handphone/WA:</label>
                        <input type="text" id="waortu" name="waortu" size="30" maxlength="13">
                    </div>
    
    
                    <div class="form-group">
                        <label for="wali">Nama Wali:</label>
                        <input type="text" id="wali" name="wali" size="30">
                    </div>
    
                    <div class="form-group">
                        <label for="pwali">Pekerjaan Wali:</label>
                        <input type="text" id="pwali" name="pwali" size="30">
                    </div>
    
                    <div class="form-group">
                        <label for="nowali">No. Handphone/WA:(wali):</label>
                        <input type="text" id="nowali" name="nowali" size="30" maxlength="13">
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

</body>

</html>
