<x-app-layout>

<div class="container mt-4">

    <a href="/dashboard" class="btn btn-outline-primary mb-3">
        ← Kembali ke Beranda
    </a>

    <h2 class="text-center fw-bold">Data Penduduk</h2>
    <p class="text-center text-muted">Desa Leuwigede</p>

    {{-- TOMBOL TAMBAH --}}
    @auth
    @if(strtolower(trim(auth()->user()->role)) === 'admin')
    <a href="/penduduk/create" class="btn btn-success mb-3">
        + Tambah Penduduk
    </a>
    @endif
    @endauth

    {{-- CARD --}}
    <div class="row mt-4 g-4">

        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-dashboard bg-blue">
                <div class="card-icon">👥</div>
                <p>Total Penduduk</p>
                <h2>{{ $total }}</h2>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-dashboard bg-cyan">
                <div class="card-icon">👤</div>
                <p>Laki-laki</p>
                <h2>{{ $laki }}</h2>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-dashboard bg-pink">
                <div class="card-icon">👩</div>
                <p>Perempuan</p>
                <h2>{{ $perempuan }}</h2>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-dashboard bg-green">
                <div class="card-icon">👶</div>
                <p>Balita</p>
                <h2>{{ $balita }}</h2>
            </div>
        </div>

    </div>

    {{-- UMUR --}}
    <div class="row mt-3 g-4">

        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-dashboard bg-orange">
                <div class="card-icon">🧒</div>
                <p>Anak</p>
                <h2>{{ $anak }}</h2>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-dashboard bg-purple">
                <div class="card-icon">🧑</div>
                <p>Dewasa</p>
                <h2>{{ $dewasa }}</h2>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3">
            <div class="card-dashboard bg-red">
                <div class="card-icon">👴</div>
                <p>Lansia</p>
                <h2>{{ $lansia }}</h2>
            </div>
        </div>

    </div>

{{-- ===================== DATA KK ===================== --}}
    <div class="card mt-4 p-4 shadow-sm">
        <h5>Data Kartu Keluarga</h5>

        <div class="row mt-3">
            <div class="col-md-6">
                <div class="p-3 rounded bg-light d-flex justify-content-between">
                    <span>Jumlah KK</span>
                    <b>{{ $jumlahKK }} KK</b>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-3 rounded bg-light d-flex justify-content-between">
                    <span>Rata-rata anggota</span>
                    <b>{{ $rataAnggota }} orang</b>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card p-4 shadow-sm">
            <h5>Tingkat Pendidikan</h5>

            @php
                $tidak_p = $total ? ($tidak / $total) * 100 : 0;
                $sd_p = $total ? ($sd / $total) * 100 : 0;
                $smp_p = $total ? ($smp / $total) * 100 : 0;
                $sma_p = $total ? ($sma / $total) * 100 : 0;
                $diploma_p = $total ? ($diploma / $total) * 100 : 0;
            @endphp

            Tidak/Belum Sekolah ({{ $tidak }})
            <div class="progress mb-2">
                <div class="progress-bar bg-primary" style="width: {{ $tidak_p }}%"></div>
            </div>

            SD/Sederajat ({{ $sd }})
            <div class="progress mb-2">
                <div class="progress-bar bg-primary" style="width: {{ $sd_p }}%"></div>
            </div>

            SMP/Sederajat ({{ $smp }})
            <div class="progress mb-2">
                <div class="progress-bar bg-primary" style="width: {{ $smp_p }}%"></div>
            </div>

            SMA/Sederajat ({{ $sma }})
            <div class="progress mb-2">
                <div class="progress-bar bg-primary" style="width: {{ $sma_p }}%"></div>
            </div>

            Diploma/Sarjana ({{ $diploma }})
            <div class="progress mb-2">
                <div class="progress-bar bg-primary" style="width: {{ $diploma_p }}%"></div>
            </div>

        </div>

    </div>
    {{-- PEKERJAAN --}}
    <div class="col-md-6">
        <div class="card p-4 shadow-sm">
            <h5>Mata Pencaharian</h5>

            @php
                $petani_p = $total ? ($petani / $total) * 100 : 0;
                $buruh_p = $total ? ($buruh / $total) * 100 : 0;
                $wiraswasta_p = $total ? ($wiraswasta / $total) * 100 : 0;
                $pns_p = $total ? ($pns / $total) * 100 : 0;
                $tidak_p = $total ? ($tidakKerja / $total) * 100 : 0;
            @endphp

            Petani ({{ $petani }})
            <div class="progress mb-2">
                <div class="progress-bar bg-success" style="width: {{ $petani_p }}%"></div>
            </div>

            Buruh ({{ $buruh }})
            <div class="progress mb-2">
                <div class="progress-bar bg-success" style="width: {{ $buruh_p }}%"></div>
            </div>

            Wiraswasta ({{ $wiraswasta }})
            <div class="progress mb-2">
                <div class="progress-bar bg-success" style="width: {{ $wiraswasta_p }}%"></div>
            </div>

            PNS/TNI/Polri ({{ $pns }})
            <div class="progress mb-2">
                <div class="progress-bar bg-success" style="width: {{ $pns_p }}%"></div>
            </div>

            Tidak Bekerja ({{ $tidakKerja }})
            <div class="progress mb-2">
                <div class="progress-bar bg-success" style="width: {{ $tidak_p }}%"></div>
            </div>

            Pensiunan ({{ $pensiunan }})
            <div class="progress mb-2">
                <div class="progress-bar bg-success" style="width: {{ $pensiunan }}%"></div>
            </div>

        </div>
    </div>

<div class="card mt-4 p-4 shadow-sm">
    <h5>Data Agama</h5>

        <div class="row text-center">

            <div class="col">Islam<br><b>{{ $islam }}</b></div>
            <div class="col">Kristen<br><b>{{ $kristen }}</b></div>
            <div class="col">Katolik<br><b>{{ $katolik }}</b></div>
            <div class="col">Hindu<br><b>{{ $hindu }}</b></div>
            <div class="col">Budha<br><b>{{ $budha }}</b></div>

        </div>
    
</div>

{{-- ===================== DATA PENDUDUK (CRUD) ===================== --}}
@auth
@if(strtolower(auth()->user()->role) === 'admin')

<div class="card mt-4 p-4 shadow-sm">

    <h5>Daftar Penduduk</h5>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>JK</th>
                <th>Umur</th>
                <th>Pekerjaan</th>

                @auth
                @if(strtolower(trim(auth()->user()->role)) === 'admin')
                <th>Aksi</th>
                @endif
                @endauth
            </tr>
        </thead>

        <tbody>
            @foreach($data as $p)
            <tr>
                <td>{{ $p->nik }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->jenis_kelamin }}</td>
                <td>{{ \Carbon\Carbon::parse($p->tanggal_lahir)->age }}</td>
                <td>{{ $p->pekerjaan }}</td>

                @auth
                @if(strtolower(trim(auth()->user()->role)) === 'admin')
                <td>
                    <a href="/penduduk/edit/{{ $p->id }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <a href="/penduduk/hapus/{{ $p->id }}"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin hapus?')">
                        Hapus
                    </a>
                </td>
                @endif
                @endauth

            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endif
@endauth
<div class="card p-3 mt-4 bg-light">
        <h6>Catatan</h6>
        <ul style="font-size:14px;">
            <li>Data penduduk ini diperbarui secara berkala setiap bulan berdasarkan laporan dari RT/RW dan hasil pendataan perangkat desa.
                 Untuk informasi lebih detail, silakan hubungi Kantor Desa Leuwigede.</li>
        </ul>
    </div>

</x-app-layout>