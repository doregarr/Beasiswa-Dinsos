<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Cards</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="card-container">
        <div class="card">
            <h2>Pengajuan Bantuan Biaya Pendidikan</h2>
            <p>Dinas Sosial Kota Medan</p>
            <div class="card-inner">
               <div class="table-container">
                <table>
                    <tbody>
                    <tr class="table-head">
                        <td>PENGUMUMAN BEASISWA GEL II</td>
                        <td><button class="btn-unduh">Unduh</button></td>
                    </tr>
                    <tr class="table-head">
                        <td>DATA MAHASISWA CALON PENERIMA BANTUAN BIAYA PENDIDIKAN</td>
                        <td><button class="btn-unduh">Unduh</button></td>
                    </tr>
                    <tr class="table-head">
                        <td>TEMPLATE SURAT PERMOHONAN DITUJUKAN KEPADA BAPAK WALI KOTA MEDAN Cq. KEPALA DINAS SOSIAL KOTA MEDAN</td>
                        <td><button class="btn-unduh">Unduh</button></td>
                    </tr>
                    <tr class="table-head">
                        <td>TEMPLATE SURAT PERNYATAAN TIDAK MENERIMA BEASISWA/BANTUAN BIAYA PENDIDIKAN DARI SUMBER LAIN</td>
                        <td><button class="btn-unduh">Unduh</button></td>
                    </tr>
                    <tr class="table-head">
                        <td>TEMPLATE SURAT PERNYATAAN TIDAK BERSTATUS SEBAGAI APARATUR SIPIL NEGARA(ASN)</td>
                        <td><button class="btn-unduh">Unduh</button></td>
                    </tr>
                    </tbody>
                </table>
               </div>
            </div>
        </div>
        <div class="card1">
            <div class="box">
                <img src="{{ asset('image/logo-pemko.png') }}" class="icon1">
                <img src="{{ asset('image/kolaborasi-medan-berkah.png') }}" class="icon2">
            </div>
            <div class="box1">
                <div class="text">
<h3 class="login">Login</h3>
<input type="text" placeholder="Masukkan Nomor Induk Kependudukan" class="input1">
<br>

<input type="password" placeholder="Masukkan Password" class="input2">
<div class="btn-login">
    <button type="submit" > Login</button>
    <a href >Daftar Akun</a>
</div>
</div>

</div>

        </div>
    </div>
    </div>
</body>
</html>