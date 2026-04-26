@props(['ruangan'])

@php
    $fotoRuangan = $ruangan->foto_utama ?? '';
@endphp

<div class="room-card">
    <div class="room-img">
        <img src="{{ !empty($fotoRuangan) ? asset('storage/uploads/ruangan/' . $fotoRuangan) : asset('assets/icons/logo_big.svg') }}"
            alt="{{ $ruangan->nama_ruangan }}">
    </div>

    <div class="room-body">
        <div class="room-title">{{ $ruangan->nama_ruangan }}</div>

        <div class="room-meta">
            Lokasi: {{ $ruangan->gedung }}<br>
            Lantai: {{ $ruangan->Lantai ?? ($ruangan->lantai ?? '-') }}<br>
            Kapasitas: {{ $ruangan->kapasitas }} orang
        </div>

        <a href="{{ route('mahasiswa.ruangan.detail', $ruangan->id) }}" class="room-btn">
            View Details
        </a>
    </div>
</div>
