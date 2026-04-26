<x-layouts.mahasiswa-layout>
    <x-slot:title>Ruangan - Peminjaman Ruangan</x-slot>

    <!-- HERO -->
    <x-hero
        type="page"
        title="Ruangan Kami"
        current="Ruangan"
        :heroImg="$heroImg"
    />
     <div class="wrap">
        <section class="room-section">
            <div class="container">

                @if ($ruangans->isEmpty())
                    <div class="text-center text-muted fs-5 mt-5">
                        <p class="text-white">Saat ini ruangan tidak tersedia.</p>
                    </div>
                @else
                    <div class="room-grid">
                        @foreach ($ruangans as $r)
                            <div class="room-item">
                                <x-room-card :ruangan="$r" />
                            </div>
                        @endforeach
                    </div>
                @endif

            </div>
        </section>
    </div>
</x-layouts.mahasiswa-layout>
