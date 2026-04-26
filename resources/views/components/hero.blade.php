@props([
    'type' => 'page',
    'greeting'=>null,
    'title' => null,
    'subtitle' => null,
    'current' => null,
    'heroImages' => collect(),
    'heroImg' => null,
])

@if ($type === 'full')
    <section class="hero-full">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                @if ($heroImages->isEmpty())
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/icons/logo_big.svg') }}" class="d-block w-100" alt="SIPERU">
                    </div>
                @else
                    @foreach ($heroImages as $i => $img)
                        <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                            <img src="{{ asset('storage/uploads/ruangan/' . $img->nama_file) }}"
                                class="d-block w-100"
                                alt="Hero Ruangan {{ $i + 1 }}">
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="hero-overlay"></div>

        <div class="hero-content">
            <h5>{{$greeting??'WELCOME TO SIPERU'}}</h5>
            <h1>{{ $title ?? 'Room Booking System' }}</h1>
            <h2>{{ $subtitle ?? 'Fasilkom Unsri' }}</h2>
        </div>
    </section>
@else
    <section class="hero-page">
        <img src="{{ !empty($heroImg) ? asset('storage/uploads/ruangan/' . $heroImg) : asset('assets/icons/logo_big.svg') }}"
            class="hero-bg"
            alt="{{ $title ?? 'Hero Page' }}">

        <div class="hero-overlay"></div>

        <div class="hero-page-content">
            <h1>{{ $title ?? 'Ruangan Kami' }}</h1>

            <div class="breadcrumb">
                <a href="{{ route('mahasiswa.dashboard') }}">Home</a>
                <span class="sep">›</span>
                <span class="current">{{ $current ?? $title ?? 'Halaman' }}</span>
            </div>
        </div>
    </section>
@endif