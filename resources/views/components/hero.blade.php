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
                            <img src="{{ asset('storage/uploads/ruangan/' . $img->nama_file) }}" class="d-block w-100" alt="Hero Ruangan {{ $i + 1 }}">
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="hero-content">
            <h5>WELCOME TO SIPERU</h5>
            <h1>Room Booking System</h1>
            <h2>Fasilkom Unsri</h2>
        </div>
    </section>