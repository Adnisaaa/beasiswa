@extends('layout')

@section('title', 'Pendaftaran')

@section('content')

<!-- ======= Daftar Section ======= -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Daftar</h2>
        <p>Registrasi Beasiswa</p>
      </div>

      <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
            @if (Session::has('success'))
            <a href="/hasil">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </a>
        @endif
        <form action="{{ route('pendaftaran.store') }}" method="POST" class="text-main"
            enctype="multipart/form-data" id="beasiswaForm">
            @csrf
            <div class="row g-3">
                <div class="col-md-12">
                    <select class="form-select border-0 bg-light px-4" name="nim" id="nim"
                        style="height: 55px;">
                        <option value="" disabled selected>Pilih NIM</option>
                        <!-- Tampilkan daftar NIM dari database -->
                        @foreach ($daftarNIM as $nim)
                            <option value="{{ $nim }}">{{ $nim }}</option>
                        @endforeach
                    </select>
                    <div class="errors text-danger" style="font-size: 14px">
                        {{ $errors->pendaftaran->first('nim') }}</div>
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control border-0 bg-light px-4" name="nama"
                        placeholder="Nama Lengkap" value="{{ isset($mahasiswa->nama) ? $nama : '' }}"
                        style="height: 55px;" readonly>
                    <div class="errors text-danger" style="font-size: 14px">
                        {{ $errors->pendaftaran->first('nama') }}</div>
                </div>
                <div class="col-md-12">
                    <input type="email" class="form-control border-0 bg-light px-4" name="email"
                        placeholder="Masukan Email" style="height: 55px;">
                    <div class="errors text-danger" style="font-size: 14px">
                        {{ $errors->pendaftaran->first('email') }}</div>
                </div>
                <div class="col-md-12">
                    <input type="number" class="form-control border-0 bg-light px-4" name="nomor_hp"
                        placeholder="Masukan Nomor HP"
                        style="height: 55px;">
                    <div class="errors text-danger" style="font-size: 14px">
                        {{ $errors->pendaftaran->first('nomor_hp') }}</div>
                </div>
                <div class="col-md-12">
                    <select class="form-select border-0 bg-light px-4" name="semester" id style="height: 55px;">
                        <option value="" disabled selected>Pilih Semester</option>
                        @for ($i = 1; $i <= 8; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    <div class="errors text-danger" style="font-size: 14px">
                        {{ $errors->pendaftaran->first('semester') }}</div>
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control border-0 bg-light px-4" name="ipk"
                        id="ipk" value="{{ isset($mahasiswa->ipk) ? $ipk : '' }}"
                        placeholder="Masukan IPK" style="height: 55px;" readonly>
                    <div class="errors text-danger" style="font-size: 14px">
                        {{ $errors->pendaftaran->first('ipk') }}
                    </div>
                    <div id="ipkMessage" class="errors text-danger" style="font-size: 14px; display: none;">
                        Maaf, anda tidak bisa melanjutkan pendaftaran beasiswa karena IPK Anda kurang dari 3.
                    </div>
                </div>

                <div class="col-md-12">
                    <select class="form-select border-0 bg-light px-4" name="jenis_beasiswa"
                        style="height: 55px;" id="jenisBeasiswa" disabled>
                        <option value="" disabled selected>Jenis Beasiswa</option>
                        <option value="akademik">Akademik</option>
                        <option value="nonakademik">Non Akademik</option>
                    </select>
                    {{-- <div id="ipkMessage" class="errors text-danger" style="font-size: 14px; display: none;">
                        Maaf, anda tidak bisa melanjutkan pendaftaran beasiswa karena IPK Anda kurang dari 3.
                    </div> --}}
                </div>

                <div class="col-md-12">
                    <input type="file" class="form-control border-0 bg-light px-4" name="upload_berkas"
                        id="uploadBerkas" style="height: 55px;" disabled>
                    <div class="errors text-danger" style="font-size: 14px">
                        {{ $errors->pendaftaran->first('upload_berkas') }}</div>
                        <small class="form-text text-muted">
                            * Harap unggah file dalam format pdf, jpg, jpeg.
                        </small>
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <div class="col-md-6 text-center">
                            <button id="btnDaftar" class="btn btn-primary py-3" type="submit" disabled>Daftar</button>
                            <button id="btnCancel" class="btn btn-secondary py-3" type="button">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>     
      </div>

    </div>
</section>
<!-- End Daftar Section -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        let ipkValue = "";
        // Menangkap perubahan pada pilihan NIM
        $('#nim').on('change', function() {
            var nim = $(this).val();

            // Lakukan permintaan AJAX untuk mengambil data mahasiswa berdasarkan NIM
            $.ajax({
                url: '/get-mahasiswa/' + nim, // Ganti dengan URL yang sesuai di aplikasi Anda
                dataType: 'json',
                type: 'GET',
                success: function(data) {
                    // Isi nilai nama dan IPK dengan data yang diambil dari server
                    $('input[name="nama"]').val(data.nama);
                    $('input[name="ipk"]').val(data.ipk);
                    ipkValue = data.ipk;
                    console.log(ipkValue);

                    // Memeriksa apakah IPK kurang dari 3
                    if (ipkValue < 3) {
                        // Menampilkan pesan dan menonaktifkan input jenis beasiswa
                        $('#ipkMessage').show();
                        $('#jenisBeasiswa').prop('disabled', true);
                        $('#uploadBerkas').prop('disabled', true);
                        $('#btnDaftar').prop('disabled', true);
                    } else {
                        // Sembunyikan pesan dan aktifkan input jenis beasiswa
                        $('#ipkMessage').hide();
                        $('#jenisBeasiswa').prop('disabled', false);
                        $('#uploadBerkas').prop('disabled', false);
                        $('#btnDaftar').prop('disabled', false);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });

        // Menangani klik pada tombol batal
        $('#btnCancel').on('click', function() {
            // Reset formulir dan sembunyikan pesan IPK
            $('#beasiswaForm')[0].reset();
            $('#ipkMessage').hide();

            // Menonaktifkan input jenis beasiswa, upload berkas, dan tombol daftar
            $('#jenisBeasiswa').prop('disabled', true);
            $('#uploadBerkas').prop('disabled', true);
            $('#btnDaftar').prop('disabled', true);
        });
    });
</script>


@endsection