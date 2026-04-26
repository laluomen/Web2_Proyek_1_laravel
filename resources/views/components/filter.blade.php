   <section class="filter-floating" id="filterSection">
        <div class="container">
            <form class="filter-box" method="get" action="{{ route('mahasiswa.dashboard') }}" id="filterForm">
                <div class="row g-3 align-items-end">

                    <div class="col-md-3">
                        <label>Tanggal Awal</label>
                        <input type="date" name="tgl_awal" value="{{ $tgl_awal ?? '' }}" class="form-control">
                    </div>

                    <div class="col-md-3">
                        <label>Tanggal Akhir</label>
                        <input type="date" name="tgl_akhir" value="{{ $tgl_akhir ?? '' }}" class="form-control">
                    </div>

                    <div class="col-md-3">
                        <label>Gedung</label>
                        <div class="select-wrap">
                            <select name="gedung" class="form-control">
                                <option value="">Semua Gedung</option>
                                @foreach ($gedungList as $g)
                                    <option value="{{ $g->nama_gedung }}" {{ ($gedung ?? '') == $g->nama_gedung ? 'selected' : '' }}>
                                        {{ $g->nama_gedung }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <button class="btn w-100">Check</button>
                    </div>

                </div>
            </form>
        </div>
    </section>