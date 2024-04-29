@include('components.includes.head')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<title>Login</title>
</head>

<body>
    @include('components.includes.title')
    
    <div class="card-container">

        @include('components.layouts.unduh')

        <div class="login-container">
            <div class="box-container">
                <div class="box-login">
                    <div class="input-container">
                        <h3 class="login">Login</h3>
                        <div class="input-wrapper">
                            <i for="nik" class="fas fa-id-card placeholder-icon"></i>
                            <input type="text" id="nik" placeholder="Masukkan Nomor Induk Kependudukan"
                                class="input-nik">
                        </div>
                        <div class="input-wrapper">
                            <i for="nik" class="fas fa-lock placeholder-icon"></i>
                            <input type="password" placeholder="Masukkan Password" class="input-password">
                        </div>
                    </div>
                    <div class="button">
                        <button type="submit" class="btn-login"> Login</button>
                        <a href="/registrasi" class="btn-daftar">Daftar Akun</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
