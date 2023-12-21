@extends('layout')

@section('title', 'Hasil ')

@section('content')

<!-- ======= Hasil Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Hasil</h2>
        <p>List Siswa yang Terdaftar Beasiswa</p>
      </div>

      <table class="data-table table stripe hover nowrap" id="hasil">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">Semester</th>
                    <th scope="col">IPK</th>
                    <th scope="col">Pilihan Beasiswa</th>
                    <th scope="col">Status Pengajuan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->email }}</td>
                        <td>{{ $d->nomor_hp }}</td>
                        <td>{{ $d->semester }}</td>
                        <td>{{ $d->ipk }}</td>
                        <td>{{ $d->jenis_beasiswa }}</td>
                        <td>{{ $d->status_ajuan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pilihan Beasiswa</h5>

                    <!-- Pie Chart -->
                    <canvas id="pieChart" style="max-height: 400px;"></canvas>
                    <script>
                        var akademik = {{ $akademik }}
                        var nonakademik = {{ $nonakademik }}
                        console.log(akademik, nonakademik)
                        document.addEventListener("DOMContentLoaded", () => {
                            new Chart(document.querySelector('#pieChart'), {
                                type: 'pie',
                                data: {
                                    labels: [
                                        'Akademik',
                                        'Nonakademik',
                                    ],
                                    datasets: [{
                                        label: 'jenis beasiswa',
                                        data: [
                                            akademik,
                                            nonakademik
                                        ],
                                        backgroundColor: [
                                            // 'rgb(255, 99, 132)', // pink
                                            'rgb(54, 162, 235)',
                                            'rgb(255, 205, 86)' // kuning
                                        ],
                                        hoverOffset: 4
                                    }]
                                }
                            });
                        });
                    </script>
                    <!-- End Pie CHart -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="{{ asset('assets-admin/vendor/chart.js/chart.umd.js') }}"></script>
    </div>
</section>
<!-- End Hasil Section -->


@endsection