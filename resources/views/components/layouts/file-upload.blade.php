@include('includes.head')
<link rel="stylesheet" href="{{ asset('css/components/layouts/file-upload.css') }}">
</head>

<body>
    @include('includes.title')
    <div class="upload-container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="card-title">Upload Documents</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('file.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="upload-file">
                                <label for="scan_permohonan1" class="form-label">Surat Asli Permohonan</label>
                                <input type="file" class="form-control @error('file1') is-invalid @enderror"
                                    id="scan_permohonan" name="file1">
                                @error('file1')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="upload-file">
                                <label for="scan_permohonan2" class="form-label">Scan Asli Biodata Pribadi</label>
                                <input type="file" class="form-control @error('file2') is-invalid @enderror"
                                    id="scan_permohonan" name="file2">
                                @error('file2')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="upload-file">
                                <label for="scan_permohonan3" class="form-label">Pas Foto Ukuran</label>
                                <input type="file" class="form-control @error('file3') is-invalid @enderror"
                                    id="scan_permohonan" name="file3">
                                @error('file3')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="upload-file">
                                <label for="scan_permohonan4" class="form-label">Kartu Tanda Penduduk</label>
                                <input type="file" class="form-control @error('file4') is-invalid @enderror"
                                    id="scan_permohonan" name="file4">
                                @error('file4')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="upload-file">
                                <label for="scan_permohonan5" class="form-label">Kartu Aktif Mahasiswa</label>
                                <input type="file" class="form-control @error('file5') is-invalid @enderror"
                                    id="scan_permohonan" name="file5">
                                @error('file5')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="upload-file">
                                <label for="scan_permohonan6" class="form-label">Scan Surat Asli Permohonan</label>
                                <input type="file" class="form-control @error('file6') is-invalid @enderror"
                                    id="scan_permohonan" name="file6">
                                @error('file6')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="upload-file">
                                <label for="scan_permohonan7" class="form-label">Lembar DTKS dari Dinas Sosial Kota
                                    Medan</label>
                                <input type="file" class="form-control @error('file7') is-invalid @enderror"
                                    id="scan_permohonan" name="file7">
                                @error('file7')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="upload-file">
                                <label for="scan_permohonan8" class="form-label">Surat Asli Permohonan Kepada Dinas
                                    Sosial Kota Medan</label>
                                <input type="file" class="form-control @error('file8') is-invalid @enderror"
                                    id="scan_permohonan" name="file8">
                                @error('file8')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="upload-file">
                                <label for="scan_permohonan9" class="form-label">Surat Pernyataan Tidak Sedang Menerima
                                    Beasiswa</label>
                                <input type="file" class="form-control @error('file9') is-invalid @enderror"
                                    id="scan_permohonan" name="file9">
                                @error('file9')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="upload-file">
                                <label for="scan_permohonan10" class="form-label">Surat Pernyataan yang Bersangkutan
                                    Orang Tua/Wali Tidak Berstatus ASN</label>
                                <input type="file" class="form-control @error('file10') is-invalid @enderror"
                                    id="scan_permohonan" name="file10">
                                @error('file10')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="upload-file">
                                <label for="scan_permohonan11" class="form-label">Transkrip Nilai Terakhir</label>
                                <input type="file" class="form-control @error('file11') is-invalid @enderror"
                                    id="scan_permohonan" name="file11">
                                @error('file11')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="upload-file">
                                <label for="scan_permohonan12" class="form-label">Tagihan Uang Kuliah/Bukti Pembayaran
                                    Uang Kuliah Terakhir</label>
                                <input type="file" class="form-control @error('file12') is-invalid @enderror"
                                    id="scan_permohonan" name="file12">
                                @error('file12')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="upload-file">
                                <label for="scan_permohonan13" class="form-label">Rekening Bank Aktif</label>
                                <input type="file" class="form-control @error('file13') is-invalid @enderror"
                                    id="scan_permohonan" name="file13">
                                @error('file13')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="upload-file">
                                <label for="scan_permohonan14" class="form-label">Rekening Bank Aktif</label>
                                <input type="file" class="form-control @error('file14') is-invalid @enderror"
                                    id="scan_permohonan" name="file14">
                                @error('file14')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class=" btn-submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
