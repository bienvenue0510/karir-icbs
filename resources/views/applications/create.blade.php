@extends('layouts.app')

@section('title', 'Form Lamaran - Karir ICBS')

@section('content')

    <main class="min-h-screen bg-[#F4F7FA] py-12 lg:py-20">
        <div class="mx-auto max-w-5xl px-6 lg:px-8">

            {{-- Header --}}
            <div class="mb-10 text-center">
                <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-[#F15A24]">
                    Karir ICBS
                </p>

                <h1 class="text-3xl font-bold tracking-tight text-[#17365D] sm:text-4xl">
                    Form Lamaran
                </h1>

                <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-slate-600">
                    Silakan lengkapi seluruh data yang diperlukan untuk mengajukan lamaran
                    bergabung bersama ICBS Payakumbuh.
                </p>
            </div>

            {{-- Form Container --}}
            <form
                action="#"
                method="POST"
                enctype="multipart/form-data"
                class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 sm:p-8 lg:p-10"
            >
                @csrf

                {{-- ========================================================= --}}
                {{-- SECTION 1 — DATA LAMARAN --}}
                {{-- ========================================================= --}}
                <section>
                    <div class="mb-6 border-b border-slate-200 pb-4">
                        <h2 class="text-xl font-semibold text-[#17365D]">
                            Data Lamaran
                        </h2>

                        <p class="mt-1 text-sm text-slate-500">
                            Informasi dasar mengenai posisi yang Anda lamar.
                        </p>
                    </div>

                    {{-- Formasi --}}
                    <div>
                        <label for="formasi" class="block text-sm font-medium text-slate-700">
                            Formasi yang ingin Anda lamar
                            <span class="text-[#F15A24]">*</span>
                        </label>

                        <select
                            id="formasi"
                            name="formasi"
                            required
                            class="mt-2 block w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-700 shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                        >
                            <option value="">Pilih formasi</option>
                            <option value="Guru Bidang Studi">Guru Bidang Studi</option>
                            <option value="Pembina Asrama (Musyrif)">Pembina Asrama (Musyrif)</option>
                            <option value="Tenaga Kesehatan">Tenaga Kesehatan</option>
                            <option value="Karyawan">Karyawan</option>
                        </select>
                    </div>

                    {{-- Bidang Studi --}}
                    <div id="bidang-studi-wrapper" class="mt-6 hidden">
                        <label for="bidang_studi" class="block text-sm font-medium text-slate-700">
                            Mata Pelajaran/Bidang Studi yang dilamar
                        </label>

                        <p class="mt-1 text-sm text-slate-500">
                            Diisi khusus bagi pelamar Guru Bidang Studi.
                        </p>

                        <select
                            id="bidang_studi"
                            name="bidang_studi"
                            class="mt-2 block w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-700 shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                        >
                            <option value="">Pilih bidang studi</option>
                            <option value="Aqidah">Aqidah</option>
                            <option value="Bahasa Arab">Bahasa Arab</option>
                            <option value="Bahasa Jepang">Bahasa Jepang</option>
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                            <option value="Budaya Alam Minangkabau">Budaya Alam Minangkabau</option>
                            <option value="Bimbingan Konseling">Bimbingan Konseling</option>
                            <option value="Biologi">Biologi</option>
                            <option value="Ekonomi">Ekonomi</option>
                            <option value="Fiqh">Fiqh</option>
                            <option value="Fisika">Fisika</option>
                            <option value="Geografi">Geografi</option>
                            <option value="Hadist">Hadist</option>
                            <option value="Informatika">Informatika</option>
                            <option value="IPA">IPA</option>
                            <option value="IPS">IPS</option>
                            <option value="Kimia">Kimia</option>
                            <option value="Matematika">Matematika</option>
                            <option value="Muhadatsah">Muhadatsah</option>
                            <option value="Nahwu">Nahwu</option>
                            <option value="PAI">PAI</option>
                            <option value="Pendidikan Kewarganegaraan">Pendidikan Kewarganegaraan</option>
                            <option value="Penjaskes">Penjaskes</option>
                            <option value="Sejarah">Sejarah</option>
                            <option value="Seni Budaya">Seni Budaya</option>
                            <option value="Shorof">Shorof</option>
                            <option value="Sosiologi">Sosiologi</option>
                            <option value="Tafsir">Tafsir</option>
                            <option value="Tahfidz">Tahfidz</option>
                            <option value="Tarikh">Tarikh</option>
                            <option value="Ulum Hadist">Ulum Hadist</option>
                            <option value="Ulum Tafsir">Ulum Tafsir</option>
                            <option value="Ushul Fiqih">Ushul Fiqih</option>
                        </select>
                    </div>
                </section>


                {{-- ========================================================= --}}
                {{-- SECTION 2 — DATA DIRI --}}
                {{-- ========================================================= --}}
                <section class="mt-12">
                    <div class="mb-6 border-b border-slate-200 pb-4">
                        <h2 class="text-xl font-semibold text-[#17365D]">
                            Data Diri
                        </h2>

                        <p class="mt-1 text-sm text-slate-500">
                            Lengkapi identitas dan informasi kontak Anda.
                        </p>
                    </div>

                    <div class="grid gap-6 md:grid-cols-2">

                        {{-- Nama --}}
                        <div>
                            <label for="name" class="block text-sm font-medium text-slate-700">
                                Nama Lengkap
                                <span class="text-[#F15A24]">*</span>
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                required
                                placeholder="Masukkan nama lengkap"
                                class="mt-2 block w-full rounded-xl border border-slate-300 px-4 py-3 text-sm shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            >
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="email" class="block text-sm font-medium text-slate-700">
                                Email
                                <span class="text-[#F15A24]">*</span>
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                                placeholder="nama@email.com"
                                class="mt-2 block w-full rounded-xl border border-slate-300 px-4 py-3 text-sm shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            >
                        </div>

                        {{-- Phone --}}
                        <div>
                            <label for="phone" class="block text-sm font-medium text-slate-700">
                                Nomor WhatsApp/Telepon
                                <span class="text-[#F15A24]">*</span>
                            </label>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                required
                                placeholder="08xxxxxxxxxx"
                                class="mt-2 block w-full rounded-xl border border-slate-300 px-4 py-3 text-sm shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            >
                        </div>

                        {{-- Jenis Kelamin --}}
                        <div>
                            <label for="jenis_kelamin" class="block text-sm font-medium text-slate-700">
                                Jenis Kelamin
                                <span class="text-[#F15A24]">*</span>
                            </label>

                            <select
                                id="jenis_kelamin"
                                name="jenis_kelamin"
                                required
                                class="mt-2 block w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            >
                                <option value="">Pilih jenis kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                    </div>
                </section>


                {{-- ========================================================= --}}
                {{-- SECTION 3 — KUALIFIKASI --}}
                {{-- ========================================================= --}}
                <section class="mt-12">
                    <div class="mb-6 border-b border-slate-200 pb-4">
                        <h2 class="text-xl font-semibold text-[#17365D]">
                            Kualifikasi
                        </h2>

                        <p class="mt-1 text-sm text-slate-500">
                            Informasi pendidikan dan kondisi terkait proses rekrutmen.
                        </p>
                    </div>

                    <div class="space-y-6">

                        {{-- Pendidikan --}}
                        <div>
                            <label for="pendidikan_terakhir" class="block text-sm font-medium text-slate-700">
                                Jenjang Pendidikan Terakhir
                                <span class="text-[#F15A24]">*</span>
                            </label>

                            <select
                                id="pendidikan_terakhir"
                                name="pendidikan_terakhir"
                                required
                                class="mt-2 block w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-700 shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            >
                                <option value="">Pilih jenjang pendidikan</option>
                                <option value="Doktoral (S3)">Doktoral (S3)</option>
                                <option value="Magister (S2)">Magister (S2)</option>
                                <option value="Sarjana (S1)">Sarjana (S1)</option>
                                <option value="Profesi">Profesi</option>
                                <option value="Diploma">Diploma</option>
                                <option value="SMA/Pondok Pesantren/Sederajat">SMA/Pondok Pesantren/Sederajat</option>
                            </select>
                        </div>

                        {{-- Aktivitas Pendidikan --}}
                        <div>
                            <label for="aktivitas_pendidikan" class="block text-sm font-medium text-slate-700">
                                Aktivitas pendidikan
                                <span class="text-[#F15A24]">*</span>
                            </label>

                            <select
                                id="aktivitas_pendidikan"
                                name="aktivitas_pendidikan"
                                required
                                class="mt-2 block w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-700 shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            >
                                <option value="">Pilih aktivitas pendidikan</option>
                                <option value="Sedang menempuh studi S1/S2/S3/Profesi">
                                    Sedang menempuh studi S1/S2/S3/Profesi
                                </option>
                                <option value="Sudah menyelesaikan studi">
                                    Sudah menyelesaikan studi
                                </option>
                                <option value="Other">
                                    Lainnya
                                </option>
                            </select>
                        </div>

                        {{-- Rekrutmen Instansi Lain --}}
                        <div>
                            <label for="rekrutmen_instansi_lain" class="block text-sm font-medium text-slate-700">
                                Rekrutmen di instansi lain
                                <span class="text-[#F15A24]">*</span>
                            </label>

                            <select
                                id="rekrutmen_instansi_lain"
                                name="rekrutmen_instansi_lain"
                                required
                                class="mt-2 block w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-700 shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            >
                                <option value="">Pilih jawaban</option>
                                <option value="Sedang mengikuti proses seleksi di instansi lain">
                                    Sedang mengikuti proses seleksi di instansi lain
                                </option>
                                <option value="Hanya mengajukan lamaran ke ICBS Payakumbuh">
                                    Hanya mengajukan lamaran ke ICBS Payakumbuh
                                </option>
                            </select>
                        </div>

                        {{-- Merokok --}}
                        <div>
                            <label for="merokok" class="block text-sm font-medium text-slate-700">
                                Apakah saudara merokok?
                                <span class="text-[#F15A24]">*</span>
                            </label>

                            <select
                                id="merokok"
                                name="merokok"
                                required
                                class="mt-2 block w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-700 shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            >
                                <option value="">Pilih jawaban</option>
                                <option value="0">Tidak</option>
                                <option value="1">Ya</option>
                            </select>
                        </div>

                    </div>
                </section>


                {{-- ========================================================= --}}
                {{-- SECTION 4 — KOMITMEN --}}
                {{-- ========================================================= --}}
                <section class="mt-12">
                    <div class="mb-6 border-b border-slate-200 pb-4">
                        <h2 class="text-xl font-semibold text-[#17365D]">
                            Komitmen Pelamar
                        </h2>

                        <p class="mt-1 text-sm text-slate-500">
                            Kesediaan dan komitmen selama bekerja di ICBS Payakumbuh.
                        </p>
                    </div>

                    <div class="space-y-4">

                        <label class="flex cursor-pointer gap-3 rounded-xl border border-slate-200 p-4 transition hover:bg-slate-50">
                            <input
                                type="checkbox"
                                name="komitmen_masa_tugas"
                                value="Bersedia melaksanakan tugas sekurang-kurangnya 1 tahun/selama masa kontrak berlaku"
                                class="mt-1 h-4 w-4 rounded border-slate-300 text-[#17365D] focus:ring-[#17365D]"
                            >

                            <span class="text-sm leading-6 text-slate-700">
                                Bersedia melaksanakan tugas sekurang-kurangnya 1 tahun/selama masa kontrak berlaku.
                            </span>
                        </label>

                        <label class="flex cursor-pointer gap-3 rounded-xl border border-slate-200 p-4 transition hover:bg-slate-50">
                            <input
                                type="checkbox"
                                name="komitmen_tidak_mengikuti_seleksi_lain"
                                value="Bersedia tidak mengikuti seleksi di instansi lain selama masa kontrak masih berlaku"
                                class="mt-1 h-4 w-4 rounded border-slate-300 text-[#17365D] focus:ring-[#17365D]"
                            >

                            <span class="text-sm leading-6 text-slate-700">
                                Bersedia tidak mengikuti seleksi di instansi lain selama masa kontrak masih berlaku.
                            </span>
                        </label>

                    </div>
                </section>


                {{-- ========================================================= --}}
                {{-- SECTION 5 — LATAR BELAKANG --}}
                {{-- ========================================================= --}}
                <section class="mt-12">
                    <div class="mb-6 border-b border-slate-200 pb-4">
                        <h2 class="text-xl font-semibold text-[#17365D]">
                            Latar Belakang & Pengalaman
                        </h2>

                        <p class="mt-1 text-sm text-slate-500">
                            Ceritakan pengalaman dan pencapaian yang pernah Anda miliki.
                        </p>
                    </div>

                    <div class="space-y-6">

                        {{-- Kursus --}}
                        <div>
                            <label for="kursus_pelatihan" class="block text-sm font-medium text-slate-700">
                                Kursus Pelatihan Yang Pernah Diikuti
                            </label>

                            <textarea
                                id="kursus_pelatihan"
                                name="kursus_pelatihan"
                                rows="4"
                                placeholder="Nama Pelatihan - Lokasi Pelatihan - Lembaga Pelaksana - Tahun Pelatihan"
                                class="mt-2 block w-full rounded-xl border border-slate-300 px-4 py-3 text-sm shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            ></textarea>

                            <p class="mt-2 text-xs text-slate-500">
                                Format: Nama Pelatihan (spasi) Lokasi Pelatihan (spasi) Lembaga Pelaksana (spasi) Tahun Pelatihan
                            </p>
                        </div>

                        {{-- Pengalaman Kerja --}}
                        <div>
                            <label for="pengalaman_kerja" class="block text-sm font-medium text-slate-700">
                                Pengalaman Kerja
                            </label>

                            <textarea
                                id="pengalaman_kerja"
                                name="pengalaman_kerja"
                                rows="4"
                                placeholder="Jabatan - Instansi/Perusahaan - Tahun"
                                class="mt-2 block w-full rounded-xl border border-slate-300 px-4 py-3 text-sm shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            ></textarea>

                            <p class="mt-2 text-xs text-slate-500">
                                Format: Jabatan (spasi) Instansi/Perusahaan (spasi) Tahun
                            </p>
                        </div>

                        {{-- Pengalaman Organisasi --}}
                        <div>
                            <label for="pengalaman_organisasi" class="block text-sm font-medium text-slate-700">
                                Pengalaman Organisasi
                            </label>

                            <textarea
                                id="pengalaman_organisasi"
                                name="pengalaman_organisasi"
                                rows="4"
                                placeholder="Jabatan - Nama Organisasi - Tahun"
                                class="mt-2 block w-full rounded-xl border border-slate-300 px-4 py-3 text-sm shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            ></textarea>

                            <p class="mt-2 text-xs text-slate-500">
                                Format: Jabatan (spasi) Nama Organisasi (spasi) Tahun
                            </p>
                        </div>

                        {{-- Prestasi --}}
                        <div>
                            <label for="prestasi" class="block text-sm font-medium text-slate-700">
                                Prestasi Yang Pernah Diraih
                            </label>

                            <textarea
                                id="prestasi"
                                name="prestasi"
                                rows="4"
                                placeholder="Peringkat/Peran - Nama Kompetensi/Event - Penyelenggara - Tahun"
                                class="mt-2 block w-full rounded-xl border border-slate-300 px-4 py-3 text-sm shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            ></textarea>

                            <p class="mt-2 text-xs text-slate-500">
                                Format: Peringkat/Peran (spasi) Nama Kompetensi/Event Yang Diikuti (spasi) Penyelenggara Kegiatan (spasi) Tahun Pelaksanaan
                            </p>
                        </div>

                        {{-- Alasan --}}
                        <div>
                            <label for="alasan_bergabung" class="block text-sm font-medium text-slate-700">
                                Alasan ingin bergabung di ICBS Payakumbuh
                                <span class="text-[#F15A24]">*</span>
                            </label>

                            <textarea
                                id="alasan_bergabung"
                                name="alasan_bergabung"
                                rows="5"
                                required
                                placeholder="Tuliskan alasan Anda ingin bergabung dengan ICBS Payakumbuh..."
                                class="mt-2 block w-full rounded-xl border border-slate-300 px-4 py-3 text-sm shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            ></textarea>
                        </div>

                    </div>
                </section>


                {{-- ========================================================= --}}
                {{-- SECTION 6 — BAHASA & MEDIA SOSIAL --}}
                {{-- ========================================================= --}}
                <section class="mt-12">
                    <div class="mb-6 border-b border-slate-200 pb-4">
                        <h2 class="text-xl font-semibold text-[#17365D]">
                            Bahasa Asing & Media Sosial
                        </h2>

                        <p class="mt-1 text-sm text-slate-500">
                            Informasi tambahan mengenai kemampuan bahasa dan akun media sosial.
                        </p>
                    </div>

                    {{-- Bahasa Asing --}}
                    <div>
                        <p class="text-sm font-medium text-slate-700">
                            Bahasa Asing Yang Dikuasai
                        </p>

                        <div class="mt-3 grid gap-3 sm:grid-cols-2 md:grid-cols-3">

                            <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 p-3">
                                <input
                                    type="checkbox"
                                    name="bahasa_asing[]"
                                    value="Arab"
                                    class="h-4 w-4 rounded border-slate-300 text-[#17365D] focus:ring-[#17365D]"
                                >
                                <span class="text-sm text-slate-700">Arab</span>
                            </label>

                            <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 p-3">
                                <input
                                    type="checkbox"
                                    name="bahasa_asing[]"
                                    value="Inggris"
                                    class="h-4 w-4 rounded border-slate-300 text-[#17365D] focus:ring-[#17365D]"
                                >
                                <span class="text-sm text-slate-700">Inggris</span>
                            </label>

                            <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 p-3">
                                <input
                                    type="checkbox"
                                    name="bahasa_asing[]"
                                    value="Mandarin"
                                    class="h-4 w-4 rounded border-slate-300 text-[#17365D] focus:ring-[#17365D]"
                                >
                                <span class="text-sm text-slate-700">Mandarin</span>
                            </label>

                            <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 p-3">
                                <input
                                    type="checkbox"
                                    name="bahasa_asing[]"
                                    value="Jepang"
                                    class="h-4 w-4 rounded border-slate-300 text-[#17365D] focus:ring-[#17365D]"
                                >
                                <span class="text-sm text-slate-700">Jepang</span>
                            </label>

                            <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 p-3">
                                <input
                                    type="checkbox"
                                    name="bahasa_asing[]"
                                    value="Other"
                                    class="h-4 w-4 rounded border-slate-300 text-[#17365D] focus:ring-[#17365D]"
                                >
                                <span class="text-sm text-slate-700">Lainnya</span>
                            </label>

                        </div>
                    </div>

                    {{-- Media Sosial --}}
                    <div class="mt-8 grid gap-6 md:grid-cols-3">

                        <div>
                            <label for="facebook" class="block text-sm font-medium text-slate-700">
                                Nama Akun Facebook
                                <span class="text-[#F15A24]">*</span>
                            </label>

                            <input
                                type="text"
                                id="facebook"
                                name="facebook"
                                required
                                placeholder="Tidak Punya/Tidak Aktif"
                                class="mt-2 block w-full rounded-xl border border-slate-300 px-4 py-3 text-sm shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            >
                        </div>

                        <div>
                            <label for="instagram" class="block text-sm font-medium text-slate-700">
                                Nama Akun Instagram
                                <span class="text-[#F15A24]">*</span>
                            </label>

                            <input
                                type="text"
                                id="instagram"
                                name="instagram"
                                required
                                placeholder="Tidak Punya/Tidak Aktif"
                                class="mt-2 block w-full rounded-xl border border-slate-300 px-4 py-3 text-sm shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            >
                        </div>

                        <div>
                            <label for="tiktok" class="block text-sm font-medium text-slate-700">
                                Nama Akun Tiktok
                                <span class="text-[#F15A24]">*</span>
                            </label>

                            <input
                                type="text"
                                id="tiktok"
                                name="tiktok"
                                required
                                placeholder="Tidak Punya/Tidak Aktif"
                                class="mt-2 block w-full rounded-xl border border-slate-300 px-4 py-3 text-sm shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            >
                        </div>

                    </div>
                </section>


                {{-- ========================================================= --}}
                {{-- SECTION 7 — INFORMASI TAMBAHAN --}}
                {{-- ========================================================= --}}
                <section class="mt-12">
                    <div class="mb-6 border-b border-slate-200 pb-4">
                        <h2 class="text-xl font-semibold text-[#17365D]">
                            Informasi Tambahan
                        </h2>

                        <p class="mt-1 text-sm text-slate-500">
                            Informasi tambahan yang diperlukan dalam proses rekrutmen.
                        </p>
                    </div>

                    <div class="space-y-6">

                        {{-- Riwayat Penyakit --}}
                        <div>
                            <label for="riwayat_penyakit" class="block text-sm font-medium text-slate-700">
                                Apakah anda memiliki riwayat penyakit?
                                <span class="text-[#F15A24]">*</span>
                            </label>

                            <textarea
                                id="riwayat_penyakit"
                                name="riwayat_penyakit"
                                rows="3"
                                required
                                placeholder="Jika ada, sebutkan nama penyakit. Jika tidak ada, tuliskan 'Tidak Ada'."
                                class="mt-2 block w-full rounded-xl border border-slate-300 px-4 py-3 text-sm shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            ></textarea>
                        </div>

                        {{-- Kecelakaan --}}
                        <div>
                            <label for="riwayat_kecelakaan" class="block text-sm font-medium text-slate-700">
                                Pernahkah Anda mengalami kecelakaan berat?
                                <span class="text-[#F15A24]">*</span>
                            </label>

                            <textarea
                                id="riwayat_kecelakaan"
                                name="riwayat_kecelakaan"
                                rows="3"
                                required
                                placeholder="Jika pernah, sebutkan jenis dan waktu kejadian. Jika tidak, tuliskan 'Tidak Pernah'."
                                class="mt-2 block w-full rounded-xl border border-slate-300 px-4 py-3 text-sm shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            ></textarea>
                        </div>

                        {{-- Kendaraan --}}
                        <div>
                            <label for="kepemilikan_kendaraan" class="block text-sm font-medium text-slate-700">
                                Kepemilikan kendaraan bermotor
                            </label>

                            <input
                                type="text"
                                id="kepemilikan_kendaraan"
                                name="kepemilikan_kendaraan"
                                placeholder="Contoh: Sepeda motor / Mobil / Tidak memiliki"
                                class="mt-2 block w-full rounded-xl border border-slate-300 px-4 py-3 text-sm shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            >
                        </div>

                        {{-- Kesediaan Pembina Asrama --}}
                        <div>
                            <label for="kesediaan_pembina_asrama" class="block text-sm font-medium text-slate-700">
                                Kesediaan menjadi Pembina Asrama
                                <span class="text-[#F15A24]">*</span>
                            </label>

                            <select
                                id="kesediaan_pembina_asrama"
                                name="kesediaan_pembina_asrama"
                                required
                                class="mt-2 block w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm text-slate-700 shadow-sm focus:border-[#17365D] focus:outline-none focus:ring-2 focus:ring-[#17365D]/10"
                            >
                                <option value="">Pilih jawaban</option>
                                <option value="Bersedia">Bersedia</option>
                                <option value="Belum bersedia">Belum bersedia</option>
                                <option value="Akan mempertimbangkan">Akan mempertimbangkan</option>
                                <option value="Telah mendaftar sebagai Pembina Asrama">
                                    Telah mendaftar sebagai Pembina Asrama
                                </option>
                                <option value="Tidak mendaftar untuk bertugas di asrama">
                                    Tidak mendaftar untuk bertugas di asrama
                                </option>
                            </select>
                        </div>

                    </div>
                </section>


                {{-- ========================================================= --}}
                {{-- SECTION 8 — PERNYATAAN KANDIDAT --}}
                {{-- ========================================================= --}}
                <section class="mt-12">
                    <div class="mb-6 border-b border-slate-200 pb-4">
                        <h2 class="text-xl font-semibold text-[#17365D]">
                            Pernyataan Kandidat
                        </h2>

                        <p class="mt-1 text-sm text-slate-500">
                            Pastikan Anda memahami dan menyetujui seluruh pernyataan berikut.
                        </p>
                    </div>

                    <div class="space-y-3">

                        <label class="flex cursor-pointer gap-3 rounded-xl border border-slate-200 p-4 hover:bg-slate-50">
                            <input
                                type="checkbox"
                                name="pernyataan_1"
                                value="1"
                                required
                                class="mt-1 h-4 w-4 rounded border-slate-300 text-[#17365D] focus:ring-[#17365D]"
                            >

                            <span class="text-sm leading-6 text-slate-700">
                                Bersedia bekerja di lingkungan yang islami.
                            </span>
                        </label>

                        <label class="flex cursor-pointer gap-3 rounded-xl border border-slate-200 p-4 hover:bg-slate-50">
                            <input
                                type="checkbox"
                                name="pernyataan_2"
                                value="1"
                                required
                                class="mt-1 h-4 w-4 rounded border-slate-300 text-[#17365D] focus:ring-[#17365D]"
                            >

                            <span class="text-sm leading-6 text-slate-700">
                                Siap berpenampilan syar'i dan berakhlak baik serta profesional di bidangnya.
                            </span>
                        </label>

                        <label class="flex cursor-pointer gap-3 rounded-xl border border-slate-200 p-4 hover:bg-slate-50">
                            <input
                                type="checkbox"
                                name="pernyataan_3"
                                value="1"
                                required
                                class="mt-1 h-4 w-4 rounded border-slate-300 text-[#17365D] focus:ring-[#17365D]"
                            >

                            <span class="text-sm leading-6 text-slate-700">
                                Bersedia ditempatkan sesuai keputusan ICBS Payakumbuh.
                            </span>
                        </label>

                        <label class="flex cursor-pointer gap-3 rounded-xl border border-slate-200 p-4 hover:bg-slate-50">
                            <input
                                type="checkbox"
                                name="pernyataan_4"
                                value="1"
                                required
                                class="mt-1 h-4 w-4 rounded border-slate-300 text-[#17365D] focus:ring-[#17365D]"
                            >

                            <span class="text-sm leading-6 text-slate-700">
                                Data yang dimasukkan benar; apabila ditemukan kesalahan, saya menerima
                                sanksi/risiko yang berlaku.
                            </span>
                        </label>

                    </div>
                </section>


                {{-- ========================================================= --}}
                {{-- SECTION 9 — BERKAS LAMARAN --}}
                {{-- ========================================================= --}}
                <section class="mt-12">
                    <div class="mb-6 border-b border-slate-200 pb-4">
                        <h2 class="text-xl font-semibold text-[#17365D]">
                            Upload Berkas Lamaran
                        </h2>

                        <p class="mt-1 text-sm text-slate-500">
                            Gabungkan seluruh dokumen persyaratan menjadi satu file PDF.
                        </p>
                    </div>

                    <div class="rounded-xl border border-dashed border-slate-300 bg-slate-50 p-6">

                        <label for="berkas_lamaran" class="block text-sm font-medium text-slate-700">
                            Berkas Lamaran
                            <span class="text-[#F15A24]">*</span>
                        </label>

                        <input
                            type="file"
                            id="berkas_lamaran"
                            name="berkas_lamaran"
                            accept=".pdf,application/pdf"
                            required
                            class="mt-3 block w-full text-sm text-slate-600 file:mr-4 file:rounded-lg file:border-0 file:bg-[#17365D] file:px-4 file:py-2 file:text-sm file:font-medium file:text-white hover:file:bg-[#122c4c]"
                        >

                        <p class="mt-3 text-xs leading-5 text-slate-500">
                            Format: PDF. Maksimal ukuran file: 10 MB.
                        </p>

                        <div class="mt-4 rounded-lg bg-white p-4 text-sm leading-6 text-slate-600 ring-1 ring-slate-200">
                            <p class="font-medium text-slate-700">
                                Dokumen yang dapat digabungkan:
                            </p>

                            <ul class="mt-2 list-disc space-y-1 pl-5">
                                <li>Surat lamaran tulis tangan yang ditujukan kepada Bagian SDM ICBS Payakumbuh</li>
                                <li>Curriculum Vitae (CV) terbaru</li>
                                <li>Fotokopi ijazah & transkrip nilai pendidikan terakhir (dilegalisir)</li>
                                <li>Surat keterangan lulus dan nilai akademik dari universitas bila belum memiliki ijazah resmi</li>
                                <li>Fotokopi KTP & KK</li>
                                <li>Foto diri terbaru berwarna ukuran 4 x 6</li>
                                <li>Fotokopi piagam penghargaan/sertifikat keahlian/sertifikat pelatihan/seminar</li>
                                <li>Surat pengalaman kerja</li>
                            </ul>
                        </div>

                    </div>
                </section>


                {{-- Submit --}}
                <div class="mt-12 border-t border-slate-200 pt-8">
                    <button
                        type="submit"
                        class="w-full rounded-xl bg-[#F15A24] px-6 py-3.5 text-sm font-semibold text-white shadow-sm transition hover:bg-[#d94d1c] focus:outline-none focus:ring-2 focus:ring-[#F15A24]/30 focus:ring-offset-2"
                    >
                        Kirim Lamaran
                    </button>

                    <p class="mt-3 text-center text-xs text-slate-500">
                        Pastikan seluruh data yang Anda masukkan sudah benar sebelum mengirim lamaran.
                    </p>
                </div>

            </form>

        </div>
    </main>


    {{-- Formasi → Bidang Studi --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const formasi = document.getElementById('formasi');
            const bidangWrapper = document.getElementById('bidang-studi-wrapper');
            const bidangStudi = document.getElementById('bidang_studi');

            function toggleBidangStudi() {
                if (formasi.value === 'Guru Bidang Studi') {
                    bidangWrapper.classList.remove('hidden');
                } else {
                    bidangWrapper.classList.add('hidden');
                    bidangStudi.value = '';
                }
            }

            formasi.addEventListener('change', toggleBidangStudi);

            toggleBidangStudi();
        });
    </script>

@endsection