@include('includes.head')

<div class="card-container">
    <div class="card">
        <div class="box-title">
            <h2>Pengajuan Bantuan Biaya Pendidikan</h2>
            <p>Dinas Sosial Kota Medan</p>
        </div>
        <div class="table-container">
            <table>
                <tbody>
                    <tr class="table-head">
                        <td class="table-font">PENGUMUMAN BEASISWA GEL II</td>
                        <td><a href="{{ route('download', ['filename' => 'Pengumuman Bantuan Biaya Pendidikan Gelombang 2.pdf']) }}"
                                class="btn-unduh"><i class="fas fa-download"></i></a></td>
                    </tr>
                    <tr class="table-head">
                        <td class="table-font">SYARAT DAN KETENTUAN PENERIMA BANTUAN BEASISWA PENDIDIKAN</td>
                        <td><a href="{{ route('download', ['filename' => 'Syarat dan Ketentuan Penerima Bantuan Biaya Pendidikan.pdf']) }}"
                                class="btn-unduh"><i class="fas fa-download"></i></a></td>
                    </tr>
                    <tr class="table-head">
                        <td class="table-font">DATA MAHASISWA CALON PENERIMA BANTUAN BIAYA PENDIDIKAN</td>
                        <td><a href="{{ route('download', ['filename' => 'Biodata Mahasiswa.pdf']) }}"
                                class="btn-unduh"><i class="fas fa-download"></i></a></td>
                    </tr>
                    <tr class="table-head">
                        <td class="table-font">TEMPLATE SURAT PERMOHONAN DITUJUKAN KEPADA BAPAK WALI KOTA MEDAN Cq. KEPALA DINAS SOSIAL
                            KOTA MEDAN</td>
                        <td><a href="{{ route('download', ['filename' => 'Template Surat Permohonan Ditujukan Kepada Walikota Medan dan Kepala Dinsos.pdf']) }}"
                                class="btn-unduh"><i class="fas fa-download"></i></a></td>
                    </tr>
                    <tr class="table-head">
                       <td class="table-font">TEMPLATE SURAT PERNYATAAN TIDAK MENERIMA BEASISWA/BANTUAN BIAYA PENDIDIKAN DARI SUMBER
                            LAIN</td>
                        <td><a href="{{ route('download', ['filename' => 'Surat Pernyataan Tidak Menerima Beasiswa Sumber Lain.pdf']) }}"
                                class="btn-unduh"><i class="fas fa-download"></i></a></td>
                    </tr>
                    <tr class="table-head">
                        <td class="table-font">TEMPLATE SURAT PERNYATAAN TIDAK BERSTATUS SEBAGAI APARATUR SIPIL NEGARA(ASN)</td>
                        <td><a href="{{ route('download', ['filename' => 'Surat Pernyataan Tidak Berstatus Sebagai ASN.pdf']) }}"
                                class="btn-unduh"><i class="fas fa-download"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card1">
        <div class="box-image">
            <img src="{{ asset('image/logo-pemko.png') }}" class="icon1">
            <img src="{{ asset('image/kolaborasi-medan-berkah.png') }}" class="icon2">
        </div>
        <div class="box">
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
            <div class="btn-login">
                <button type="submit"> Login</button>
                <a href ="/registrasi">Daftar Akun</a>
            </div>
        </div>
    </div>
</div>
</body>

</html>

