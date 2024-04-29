
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Cards</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
@if (session('Gagal'))
    <div class="alert-danger" id="notification">
        {{ session('Gagal') }}
    </div>
@endif
@if (session('success'))
    <div id="notification" class=" alert-success">
        {{ session('success') }}
    </div>
@endif
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
        <div class="card">
            <div class="table-container">
                <table>
                    <tbody>
                        <tr class="table-head">
                            <td>PENGUMUMAN BEASISWA GEL II</td>
                            <td><a href="{{ route('download', ['filename' => 'Pengumuman Bantuan Biaya Pendidikan Gelombang 2.pdf']) }}"
                                    class="btn-unduh">Unduh</a></td>
                        </tr>
                        <tr class="table-head">
                            <td>SYARAT DAN KETENTUAN PENERIMA BANTUAN BEASISWA PENDIDIKAN</td>
                            <td><a href="{{ route('download', ['filename' => 'Syarat dan Ketentuan Penerima Bantuan Biaya Pendidikan.pdf']) }}"
                                    class="btn-unduh">Unduh</a></td>
                        </tr>
                        <tr class="table-head">
                            <td>DATA MAHASISWA CALON PENERIMA BANTUAN BIAYA PENDIDIKAN</td>
                            <td><a href="{{ route('download', ['filename' => 'Biodata Mahasiswa.pdf']) }}"
                                    class="btn-unduh">Unduh</a></td>
                        </tr>
                        <tr class="table-head">
                            <td>TEMPLATE SURAT PERMOHONAN DITUJUKAN KEPADA BAPAK WALI KOTA MEDAN Cq. KEPALA DINAS SOSIAL
                                KOTA MEDAN</td>
                            <td><a href="{{ route('download', ['filename' => 'Template Surat Permohonan Ditujukan Kepada Walikota Medan dan Kepala Dinsos.pdf']) }}"
                                    class="btn-unduh">Unduh</a></td>
                        </tr>
                        <tr class="table-head">
                            <td>TEMPLATE SURAT PERNYATAAN TIDAK MENERIMA BEASISWA/BANTUAN BIAYA PENDIDIKAN DARI SUMBER
                                LAIN</td>
                            <td><a href="{{ route('download', ['filename' => 'Surat Pernyataan Tidak Menerima Beasiswa Sumber Lain.pdf']) }}"
                                    class="btn-unduh">Unduh</a></td>
                        </tr>
                        <tr class="table-head">
                            <td>TEMPLATE SURAT PERNYATAAN TIDAK BERSTATUS SEBAGAI APARATUR SIPIL NEGARA(ASN)</td>
                            <td><a href="{{ route('download', ['filename' => 'Surat Pernyataan Tidak Berstatus Sebagai ASN.pdf']) }}"
                                    class="btn-unduh">Unduh</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="input-container">
                    <h3 class="login">Login</h3>
                    <input type="text" placeholder="Masukkan NIK" class="input-password" name="nik" id="nik">
                    <input type="password" placeholder="Masukkan Password" class="input-password" name="password" id="password">

                </div>
                <div class="btn-login">
                    <button type="submit"><i class="fas fa-key"></i> Login</button>
                    <a href ="/registrasi">Daftar Akun</a>
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
     {{-- <script>
        // Menyembunyikan notifikasi setelah 5 detik
        setTimeout(function(){
            var notification = document.getElementById('danger');
            if(notification) {
                notification.style.display = 'none';
            }
        }, 3000); // 5000 milidetik = 3 detik

    </script> --}}
</body>

</html>

