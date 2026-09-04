<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->text('kursus_pelatihan')->nullable();
            $table->text('pengalaman_kerja')->nullable();
            $table->text('pengalaman_organisasi')->nullable();
            $table->text('prestasi')->nullable();

            $table->text('alasan_bergabung')->nullable();

            $table->json('bahasa_asing')->nullable();

            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('tiktok')->nullable();

            $table->text('riwayat_penyakit')->nullable();
            $table->text('riwayat_kecelakaan')->nullable();

            $table->string('kepemilikan_kendaraan')->nullable();

            $table->boolean('pernyataan_kandidat')->default(false);

            $table->string('kesediaan_pembina_asrama')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dropColumn([
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
            ]);
        });
    }
};