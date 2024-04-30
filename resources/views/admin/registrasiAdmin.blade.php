 @include('components.includes.head')

<link rel="stylesheet" href="{{ asset('css/registrasi.css') }}">
<title>Registrasi</title>
</head>
@if (session('success'))
    <div id="notification" class=" alert-success">
        {{ session('success') }}
    </div>
@endif
<body>

    @include('components.includes.title')

    <div class="card-container">

        <div class="registrasi-container">
           <div class="box-container">
            <div class="box-registrasi">
                <div class="input-container">
                    <h3 class="registrasi">Registrasi</h3>
                    <form method="POST" action="{{ route('register') }}">
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
                    <button type="submit" class="btn-daftar"> Registrasi </button>
                    <a href ="/" class="btn-login">Login</a>
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

</html>
