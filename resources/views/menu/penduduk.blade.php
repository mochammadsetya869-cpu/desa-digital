<x-app-layout>

<div class="data-wrapper">

    <a href="/dashboard" class="kembali-link">
        ← Kembali ke Beranda
    </a>

    {{-- HEADER --}}
    <div class="data-header">
        <h1>Data Penduduk</h1>
        <p>Desa Leuwigede, Kabupaten Indramayu</p>
        <p>Data per {{ now()->translatedFormat('d F Y') }}</p>
    </div>

    {{-- BUTTON TAMBAH --}}
    @auth
    @if(strtolower(trim(auth()->user()->role)) === 'admin')

    <div style="margin-bottom:30px;">
        <a href="/penduduk/create" class="btn-simpan">
            + Tambah Penduduk
        </a>
    </div>

    @endif
    @endauth

    {{-- CARD STATISTIK --}}
    <div class="stat-grid">

        <div class="stat-card bg-blue">
            <div class="stat-icon">👥</div>
            <div class="stat-title">Total Penduduk</div>
            <div class="stat-number">{{ $total }}</div>
        </div>

        <div class="stat-card bg-cyan">
            <div class="stat-icon">👨</div>
            <div class="stat-title">Laki-laki</div>
            <div class="stat-number">{{ $laki }}</div>
        </div>

        <div class="stat-card bg-pink">
            <div class="stat-icon">👩</div>
            <div class="stat-title">Perempuan</div>
            <div class="stat-number">{{ $perempuan }}</div>
        </div>

        <div class="stat-card bg-green">
            <div class="stat-icon">👶</div>
            <div class="stat-title">Balita (0-5 tahun)</div>
            <div class="stat-number">{{ $balita }}</div>
        </div>

        <div class="stat-card bg-orange">
            <div class="stat-icon">🧒</div>
            <div class="stat-title">Anak-anak</div>
            <div class="stat-number">{{ $anak }}</div>
        </div>

        <div class="stat-card bg-purple">
            <div class="stat-icon">🧑</div>
            <div class="stat-title">Dewasa</div>
            <div class="stat-number">{{ $dewasa }}</div>
        </div>

        <div class="stat-card bg-red">
            <div class="stat-icon">👴</div>
            <div class="stat-title">Lansia</div>
            <div class="stat-number">{{ $lansia }}</div>
        </div>

    </div>

    {{-- DATA KK --}}
    <div class="section-card">

        <h2>Data Kartu Keluarga</h2>

        <div class="kk-grid">

            <div class="kk-box">
                <strong>Jumlah Kepala Keluarga</strong>
                <span>{{ $jumlahKK }} KK</span>
            </div>

            <div class="kk-box">
                <strong>Rata-rata Anggota per KK</strong>
                <span>{{ $rataAnggota }} orang</span>
            </div>

        </div>

    </div>

    {{-- PENDIDIKAN + PEKERJAAN --}}
    <div class="two-column">

        {{-- PENDIDIKAN --}}
        <div class="section-card">

            <h2>Tingkat Pendidikan</h2>

            @php
                $tidak_p = $total ? ($tidak / $total) * 100 : 0;
                $sd_p = $total ? ($sd / $total) * 100 : 0;
                $smp_p = $total ? ($smp / $total) * 100 : 0;
                $sma_p = $total ? ($sma / $total) * 100 : 0;
                $diploma_p = $total ? ($diploma / $total) * 100 : 0;
            @endphp

            <div class="progress-item">
                <div class="progress-top">
                    <span>Tidak/Belum Sekolah</span>
                    <strong>{{ $tidak }}</strong>
                </div>
                <div class="progress-bar-custom">
                    <div class="progress-fill" style="width: {{ $tidak_p }}%"></div>
                </div>
            </div>

            <div class="progress-item">
                <div class="progress-top">
                    <span>SD/Sederajat</span>
                    <strong>{{ $sd }}</strong>
                </div>
                <div class="progress-bar-custom">
                    <div class="progress-fill" style="width: {{ $sd_p }}%"></div>
                </div>
            </div>

            <div class="progress-item">
                <div class="progress-top">
                    <span>SMP/Sederajat</span>
                    <strong>{{ $smp }}</strong>
                </div>
                <div class="progress-bar-custom">
                    <div class="progress-fill" style="width: {{ $smp_p }}%"></div>
                </div>
            </div>

            <div class="progress-item">
                <div class="progress-top">
                    <span>SMA/Sederajat</span>
                    <strong>{{ $sma }}</strong>
                </div>
                <div class="progress-bar-custom">
                    <div class="progress-fill" style="width: {{ $sma_p }}%"></div>
                </div>
            </div>

            <div class="progress-item">
                <div class="progress-top">
                    <span>Diploma/Sarjana</span>
                    <strong>{{ $diploma }}</strong>
                </div>
                <div class="progress-bar-custom">
                    <div class="progress-fill" style="width: {{ $diploma_p }}%"></div>
                </div>
            </div>

        </div>

        {{-- PEKERJAAN --}}
        <div class="section-card">

            <h2>Mata Pencaharian</h2>

            @php
                $petani_p = $total ? ($petani / $total) * 100 : 0;
                $buruh_p = $total ? ($buruh / $total) * 100 : 0;
                $wiraswasta_p = $total ? ($wiraswasta / $total) * 100 : 0;
                $pns_p = $total ? ($pns / $total) * 100 : 0;
                $belum_p = $total ? ($belum / $total) * 100 : 0;
                $pensiunan_p = $total ? ($pensiunan / $total) * 100 : 0;
            @endphp

            <div class="progress-item">
                <div class="progress-top">
                    <span>Petani</span>
                    <strong>{{ $petani }}</strong>
                </div>
                <div class="progress-bar-custom">
                    <div class="progress-fill progress-green" style="width: {{ $petani_p }}%"></div>
                </div>
            </div>

            <div class="progress-item">
                <div class="progress-top">
                    <span>Buruh/Karyawan</span>
                    <strong>{{ $buruh }}</strong>
                </div>
                <div class="progress-bar-custom">
                    <div class="progress-fill progress-green" style="width: {{ $buruh_p }}%"></div>
                </div>
            </div>

            <div class="progress-item">
                <div class="progress-top">
                    <span>Wiraswasta</span>
                    <strong>{{ $wiraswasta }}</strong>
                </div>
                <div class="progress-bar-custom">
                    <div class="progress-fill progress-green" style="width: {{ $wiraswasta_p }}%"></div>
                </div>
            </div>

            <div class="progress-item">
                <div class="progress-top">
                    <span>PNS/TNI/Polri</span>
                    <strong>{{ $pns }}</strong>
                </div>
                <div class="progress-bar-custom">
                    <div class="progress-fill progress-green" style="width: {{ $pns_p }}%"></div>
                </div>
            </div>

            <div class="progress-item">
                <div class="progress-top">
                    <span>Belum/Tidak Bekerja</span>
                    <strong>{{ $belum }}</strong>
                </div>
                <div class="progress-bar-custom">
                    <div class="progress-fill progress-green" style="width: {{ $belum_p }}%"></div>
                </div>
            </div>

            <div class="progress-item">
                <div class="progress-top">
                    <span>Pensiunan</span>
                    <strong>{{ $pensiunan }}</strong>
                </div>
                <div class="progress-bar-custom">
                    <div class="progress-fill progress-green" style="width: {{ $pensiunan_p }}%"></div>
                </div>
            </div>

        </div>

    </div>

    {{-- DATA AGAMA --}}
    <div class="section-card">

        <h2>Data Agama</h2>

        <div class="agama-grid">

            <div class="agama-box" style="background:#dcfce7;">
                <h4>Islam</h4>
                <span style="color:#15803d;">{{ $islam }}</span>
            </div>

            <div class="agama-box" style="background:#dbeafe;">
                <h4>Kristen</h4>
                <span style="color:#2563eb;">{{ $kristen }}</span>
            </div>

            <div class="agama-box" style="background:#f3e8ff;">
                <h4>Katolik</h4>
                <span style="color:#9333ea;">{{ $katolik }}</span>
            </div>

            <div class="agama-box" style="background:#fef3c7;">
                <h4>Hindu</h4>
                <span style="color:#d97706;">{{ $hindu }}</span>
            </div>

            <div class="agama-box" style="background:#fef9c3;">
                <h4>Budha</h4>
                <span style="color:#ca8a04;">{{ $budha }}</span>
            </div>

        </div>

    </div>

    {{-- DAFTAR PENDUDUK --}}
    @auth
    @if(strtolower(trim(auth()->user()->role)) === 'admin')

    <div class="section-card">

        <h2>Daftar Penduduk</h2>

        <div style="overflow-x:auto;">

            <table class="pengajuan-table">

                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>JK</th>
                        <th>Umur</th>
                        <th>Pekerjaan</th>
                        <th>Aksi</th>
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

                        <td class="aksi">

                            <a href="/penduduk/edit/{{ $p->id }}"
                               class="btn-setuju">
                                Edit
                            </a>

                            <a href="/penduduk/hapus/{{ $p->id }}"
                               class="btn-tolak"
                               onclick="return confirm('Yakin hapus?')">
                                Hapus
                            </a>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

    @endif
    @endauth

    {{-- CATATAN --}}
    <div class="note-box">

        <h3>Catatan</h3>

        <p>
            Data penduduk ini diperbarui secara berkala setiap bulan
            berdasarkan laporan dari RT/RW dan hasil pendataan perangkat desa.
            Untuk informasi lebih detail, silakan hubungi Kantor Desa Leuwigede.
        </p>

    </div>

</div>

</x-app-layout>