<x-layouts.mahasiswa-layout>
    <x-slot:title>Home - Peminjaman Ruangan</x-slot>

    <!-- HERO -->
    <x-hero
    type="full"
    title="Room Booking System"
    subtitle="Fasilkom Unsri"
    :heroImages="$heroImages"
    />

    <!-- FILTER -->
    @include('components.filter');

    <!--CARD-->
    <div class="wrap">
        <section class="room-section">
            <div class="container">

                @if ($ruangan->isEmpty())
                    <div class="text-center text-muted fs-5 mt-5">
                        <p class="text-white">Saat ini ruangan tidak tersedia.</p>
                    </div>
                @else
                    <div class="room-grid">
                        @foreach ($ruangan as $r)
                            <div class="room-item">
                                <x-room-card :ruangan="$r" />
                            </div>
                        @endforeach
                    </div>
                @endif

            </div>
        </section>
    </div>

    @push('scripts')
    <script>
        // Scroll ke filter section setelah page load jika ada parameter filter
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const hasFilter = urlParams.has('tgl_awal') || urlParams.has('tgl_akhir') || urlParams.has('gedung');

            if (hasFilter) {
                const filterSection = document.getElementById('filterSection');
                if (filterSection) {
                    setTimeout(() => {
                        const offsetTop = filterSection.offsetTop - 100;
                        window.scrollTo({
                            top: offsetTop,
                            behavior: 'smooth'
                        });
                    }, 100);
                }
            }
        });
    </script>
    @endpush
</x-layouts.mahasiswa-layout>
