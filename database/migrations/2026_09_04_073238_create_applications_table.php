<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();

            $table->string('application_code')->unique();

            $table->string('name');
            $table->string('email');
            $table->string('phone');

            $table->string('formasi');
            $table->string('bidang_studi')->nullable();

            $table->string('jenis_kelamin');

            $table->string('pendidikan_terakhir');
            $table->text('aktivitas_pendidikan')->nullable();

            $table->text('rekrutmen_instansi_lain')->nullable();

            $table->boolean('merokok')->nullable();

            $table->text('komitmen_masa_tugas')->nullable();
            $table->text('komitmen_tidak_mengikuti_seleksi_lain')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};