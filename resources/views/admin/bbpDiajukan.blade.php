@include('components.includes.head-template')
<title>Penerimaan Bantuan Beasiswa Dinsos</title>

<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<link href="{{ asset('css/admin/bbpStyle.css') }}" rel="stylesheet">
</head>

@include('components.layouts.admin.navbar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>BBP Diajukan</h1>
        </div>

<div class="container-bbp">
    
    <div class="button-container">
        <button class="btn-status" onclick="changeColor(this)">Pengajuan</button>
        <button class="btn-status" onclick="changeColor(this)">Diproses</button>
        <button class="btn-status" onclick="changeColor(this)">Ditolak</button>
    </div>
       <div class="table-container">
        <table class="table-bbp">
            <tr class="table-head">
              <th>NO</th>
              <th>Tanggal Pengajuan</th>
              <th>NIK</th>
              <th>Nama Mahasiswa</th>
              <th>Kota</th>
              <th>Kecamatan</th>
              <th>Kelurahan</th>
              <th>Alamat Lengkap</th>
              <th>Status DTKS</th>
              <th>Action</th>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>

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
        {{-- button --}}
        <script src="{{ asset('js/button.js') }}"></script>

</body>

</html>
