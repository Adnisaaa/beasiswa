@extends('layout')

@section('title', 'Homepage')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Selamat Datang </h1>
        <h1>di sistem pendaftaran beasiswa kami!</h1>
        <h2>
          Dengan bangga, kami mempersembahkan platform pendaftaran beasiswa online yang untuk memudahkan proses pengajuan beasiswa di kampus ini. Semoga berhasil dalam perjalanan akademis Anda ❤ ❤ ❤
        </h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Lihat Beasiswa & Persyaratannya</a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section>
<!-- End Hero -->

<!-- ======= Pilihan Beasiswa Section ======= -->
<section id="about" class="about">
  <div class="container mt-3">

    <div class="row justify-content-between">
      <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
        <img src="assets/img/about-img.png" class="img-fluid" alt="" data-aos="zoom-in">
      </div>
      <div class="col-lg-6 pt-5 pt-lg-0">
        <h3 data-aos="fade-up">Pilihan Beasiswa</h3>
        <p data-aos="fade-up" data-aos-delay="100">
          Berikut dibawah ini merupakan pilihan beasiswa yang tersedia, beserta persyaratan-nya:
        </p>
        <div class="row">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-receipt"></i>
            <h4>Beasiswa Akademik</h4>
            <ul>
                <li>IPK minimal 3</li>
                <li>Mahasiswa aktif di Kampuskuaja</li>
                <li>Memiliki Sertifikat olimpiade sains internasional</li>
                <li>Melampirkan surat rekomendasi dari dosen atau supervisor penelitian</li>
            </ul>
            {{-- <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p> --}}
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-cube-alt"></i>
            {{-- <i class="bi bi-card-list"></i> --}}
            {{-- <i class="bi bi-dice-5"></i> --}}
            <h4>Beasiswa Non-Akademik</h4>
            <ul>
                <li>IPK minimal 3</li>
                <li>Mahasiswa aktif di Kampuskuaja</li>
                <li>Memiliki prestasi tingkat nasional bidang seni, olahraga, atau lainnya</li>
                <li>Melampirkan portfolio atau dokumentasi yang mendukung prestasi atau bakat</li>
            </ul>
            {{-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p> --}}
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- End Pilihan Beasiswa Section -->

@endsection