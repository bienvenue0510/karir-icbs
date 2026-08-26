<nav class="border-b border-slate-200 bg-white">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">

        {{-- Logo --}}
        <a href="/" class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#17365D] text-sm font-bold text-white">
                ICBS
            </div>

            <div class="leading-tight">
                <p class="text-sm font-bold text-[#17365D]">
                    ICBS
                </p>
                <p class="text-xs text-slate-500">
                    Career
                </p>
            </div>
        </a>

        {{-- Navigation --}}
        <div class="hidden items-center gap-8 md:flex">
            <a
                href="#lowongan"
                class="text-sm font-medium text-slate-600 transition hover:text-[#F15A24]"
            >
                Lowongan
            </a>

            <a
                href="#tentang"
                class="text-sm font-medium text-slate-600 transition hover:text-[#F15A24]"
            >
                Tentang ICBS
            </a>

            <a
                href="#proses"
                class="text-sm font-medium text-slate-600 transition hover:text-[#F15A24]"
            >
                Proses Rekrutmen
            </a>
        </div>

        {{-- Auth --}}
        <div class="flex items-center gap-3">
            <a
                href="#login"
                class="hidden text-sm font-semibold text-[#17365D] sm:inline-flex"
            >
                Masuk
            </a>

            <a
                href="#lowongan"
                class="rounded-lg bg-[#F15A24] px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-[#D94E1F]"
            >
                Cari Pekerjaan
            </a>
        </div>

    </div>
</nav>