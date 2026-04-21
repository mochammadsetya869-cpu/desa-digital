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

    {{-- TABEL --}}
    <div class="card mt-4 p-3 shadow">
        <h5>Daftar Penduduk</h5>

        <table class="table mt-3">
            <thead>
                <tr>

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

                    @auth
                    @if(strtolower(trim(auth()->user()->role)) === 'admin')
                    <td>
                        <a href="/penduduk/edit/{{ $p->id }}" class="btn btn-warning btn-sm">Edit</a>

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
{{-- ===================== DATA KK ===================== --}}
<div class="card mt-4 p-4 shadow-sm">
    <h5>Data Kartu Keluarga</h5>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="p-3 rounded bg-light d-flex justify-content-between">
                <span>Jumlah KK</span>
                <b>724 KK</b>
            </div>
        </div>

        <div class="col-md-6">
            <div class="p-3 rounded bg-light d-flex justify-content-between">
                <span>Rata-rata anggota</span>
                <b>3.5 orang</b>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">

    {{-- PENDIDIKAN --}}
    <div class="col-md-6">
        <div class="card p-4 shadow-sm">
            <h5>Tingkat Pendidikan</h5>

            <div class="mt-3">
                Tidak/Belum Sekolah
                <div class="progress mb-2">
                    <div class="progress-bar bg-primary" style="width:40%"></div>
                </div>

                SD/Sederajat
                <div class="progress mb-2">
                    <div class="progress-bar bg-primary"
                        style="width: {{ $total ? ($sd / $total) * 100 : 0 }}%">
                    </div>
                </div>

                SMP/Sederajat
                <div class="progress mb-2">
                    <div class="progress-bar bg-primary"
                        style="width: {{ $total ? ($smp / $total) * 100 : 0 }}%">
                    </div>
                </div>

                SMA/Sederajat
                <div class="progress mb-2">
                    <div class="progress-bar bg-primary"
                        style="width: {{ $total ? ($sma / $total) * 100 : 0 }}%">
                    </div>
                </div>

                Diploma/Sarjana
                <div class="progress mb-2">
                    <div class="progress-bar bg-primary"
                        style="width: {{ $total ? ($diploma / $total) * 100 : 0 }}%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- PEKERJAAN --}}
    <div class="col-md-6">
        <div class="card p-4 shadow-sm">
            <h5>Mata Pencaharian</h5>

            <div class="mt-3">
                Petani
                <div class="progress mb-2">
                    <div class="progress-bar bg-success" style="width:70%"></div>
                </div>

                Buruh/Karyawan Swasta
                <div class="progress mb-2">
                    <div class="progress-bar bg-success" style="width:40%"></div>
                </div>

                Wiraswasta
                <div class="progress mb-2">
                    <div class="progress-bar bg-success" style="width:30%"></div>
                </div>

                PNS/TNI/Polri
                <div class="progress mb-2">
                    <div class="progress-bar bg-success" style="width:30%"></div>
                </div>

                Pensiunan
                <div class="progress mb-2">
                    <div class="progress-bar bg-success" style="width:30%"></div>
                </div>

                Belum/Tidak Bekerja
                <div class="progress mb-2">
                    <div class="progress-bar bg-success" style="width:30%"></div>
                </div>
            </div>
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

    </form>
  </div>
</div>

</x-app-layout>