<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profil_desa')->insert([
        'nama_desa' => 'Leuwigede',
        'kecamatan' => 'Widasari',
        'kabupaten' => 'Indramayu',
        'provinsi' => 'Jawa Barat',
        'kode_pos' => '45252',
        'luas_wilayah' => '12.5 km²',
        'visi' => 'Terwujudnya Desa Leuwigede yang Maju, Sejahtera, Mandiri, dan Religius',
        'misi' => "1. Meningkatkan kualitas SDM\n2. Mengembangkan ekonomi desa\n3. Meningkatkan pelayanan publik\n4. Membangun infrastruktur\n5. Memperkuat budaya lokal\n6. Meningkatkan partisipasi masyarakat"
    ]);
        //
    }
}
