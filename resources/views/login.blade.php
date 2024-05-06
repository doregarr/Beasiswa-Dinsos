@include('components.includes.head')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<title>Login</title>
</head>
@if (session('success'))
    <div id="notification" class=" alert-success">
        {{ session('success') }}
    </div>
@endif

<body>
    @include('components.includes.title')

    <p class="total-pendaftar">Total Pendaftar: / 125</p>
    <div class="card-container">

        @include('components.layouts.unduh')

        <div class="login-container">
            <div class="box-container">
                <div class="box-login">

                    <div class="input-container">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <h3 class="login">Login</h3>
                        <div class="input-wrapper">
                            <i for="nik" class="fas fa-id-card placeholder-icon"></i>
                            <input type="text" id="nik" placeholder="Masukkan Nomor Induk Kependudukan"
                                class="input-nik" name="nik">
                        </div>
                        <div class="input-wrapper">
                            <i for="nik" class="fas fa-lock placeholder-icon"></i>
                            <input type="password" placeholder="Masukkan Password" class="input-password" name="password">
                        </div>
                    </div>
                    <div class="button">
                        <button type="submit" class="btn-login"> Login</button>
                        <a href="/registrasi" class="btn-daftar">Daftar Akun</a>
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

</body>
      @include('components.layouts.footer')
</html>
