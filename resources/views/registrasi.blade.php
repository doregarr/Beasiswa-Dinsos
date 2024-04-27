@include('includes.head')

<link rel="stylesheet" href="{{ asset('css/registrasi.css') }}">
</head>

<body>

    <div class="title-container">
        <div class="box-title">
            <h2>Pengajuan Bantuan Biaya Pendidikan</h2>
            <p>Dinas Sosial Kota Medan</p>
        </div>
        <div class="box-image">
            <img src="{{ asset('image/logo-pemko.png') }}" class="icon1">
            <img src="{{ asset('image/kolaborasi-medan-berkah.png') }}" class="icon2">
        </div>
    </div>

    <div class="card-container">
        
        @include('components.layouts.unduh')
        <div class="registrasi-container">
           <div class="box-container">
            <div class="box-registrasi">
                <div class="input-container">
                    <h3 class="registrasi">Registrasi</h3>
                    <div class="input-wrapper">
                        <i for="nik" class="fas fa-id-card placeholder-icon"></i>
                        <input type="text" id="nik" placeholder="Masukkan Nomor Induk Kependudukan"
                            class="input-nik">
                    </div>
                    <div class="input-wrapper">
                        <i for="nama" class="fa fa-user placeholder-icon"></i>
                        <input type="text" id="nama" placeholder="Masukkan Nama Anda"
                            class="input-nik">
                    </div>
                    <div class="input-wrapper">
                        <i for="email" class="fas fa-envelope placeholder-icon"></i>
                        <input type="text" id="email" placeholder="Masukkan Email Anda"
                            class="input-nik">
                    </div>
                    <div class="input-wrapper">
                        <i for="nik" class="fas fa-lock placeholder-icon"></i>
                        <input type="password" placeholder="Masukkan Password" class="input-password">
                    </div>
                </div>
                <div class="button">
                    <button onclick="window.location.href='/'" type="submit" class="btn-login"> Login</button>
                    <a href="/registrasi" class="btn-daftar">Daftar Akun</a>
                </div>
            </div>
           </div>
        </div>
    </div>
</body>

</html>
