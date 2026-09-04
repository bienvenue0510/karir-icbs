<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'application_code',
        'name',
        'email',
        'phone',
        'formasi',
        'bidang_studi',
        'jenis_kelamin',
        'pendidikan_terakhir',
        'aktivitas_pendidikan',
        'rekrutmen_instansi_lain',
        'merokok',
        'komitmen_masa_tugas',
        'komitmen_tidak_mengikuti_seleksi_lain',
        'kursus_pelatihan',
        'pengalaman_kerja',
        'pengalaman_organisasi',
        'prestasi',
        'alasan_bergabung',
        'bahasa_asing',
        'facebook',
        'instagram',
        'tiktok',
        'riwayat_penyakit',
        'riwayat_kecelakaan',
        'kepemilikan_kendaraan',
        'pernyataan_kandidat',
        'kesediaan_pembina_asrama',
    ];

    protected function casts(): array
    {
        return [
            'bahasa_asing' => 'array',
            'merokok' => 'boolean',
            'pernyataan_kandidat' => 'boolean',
        ];
    }
}