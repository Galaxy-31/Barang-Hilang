@extends('layouts.master')

@section('title', 'kehilangan')

@section('content')
    <div class="about-section">
        <div class="inner-width pb-5">
            <h1>kehilangan Barang</h1>
            <div class="border"></div>
            <form action="{{ route('kehilangans.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama <small style="color: red;">*</small></label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                        id="nama" value="{{ old('nama') }}">
                    <div id="nama" class="form-text"><i class="fas fa-info-circle"></i> Nama Asli</div>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email <small style="color: red;">*</small></label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" value="{{ old('email') }}">
                    <div id="email" class="form-text"><i class="fas fa-info-circle"></i> contoh@gmail.com</div>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="hp" class="form-label">No. Telp <small style="color: red;">*</small></label>
                    <input type="text" pattern="^[0-9]\d*$" minlength="10" maxlength="13" name="hp"
                        class="form-control @error('hp') is-invalid @enderror" id="hp" value="{{ old('hp') }}">
                    <div id="hp" class="form-text"><i class="fas fa-info-circle"></i> 08********** (Maks 13)</div>
                    @error('hp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat <small style="color: red;">*</small></label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" rows="3" name="alamat" id="alamat"
                        value="{{ old('alamat') }}"></textarea>
                    <div id="alamat" class="form-text"><i class="fas fa-info-circle"></i> Alamat barang tersebut
                        ditemukan</div>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tipe" class="form-label">Tipe <small style="color: red;">*</small></label>
                    <select class="form-select" name="tipe">
                        <option value="" selected disabled>-- Pilih Tipe --</option>
                        <option value="Kendaraan">Kendaraan</option>
                        <option value="Surat Penting">Surat Penting</option>
                        <option value="Surat Penting">Surat Penting</option>
                    </select>
                    <div id="tipe" class="form-text"><i class="fas fa-info-circle"></i> Tipe barang tersebut</div>
                    @error('tipe')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control @error('keterangan') is-invalid @enderror" rows="3" name="keterangan" type="text"
                        id="keterangan" value="{{ old('keterangan') }}"></textarea>
                    <div id="keterangan" class="form-text"><i class="fas fa-info-circle"></i> Kondisi barang</div>
                    @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Masukkan Foto</label>
                    <input class="form-control @error('foto') is-invalid @enderror" name="foto" type="file"
                        id="foto" value="{{ old('foto') }}">
                    <div id="foto" class="form-text"><i class="fas fa-info-circle"></i> Foto barang tersebut ditemukan
                    </div>
                    @error('foto')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="facebook" class="form-label">Facebook</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="fab fa-facebook-f"></i></div>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="facebook"
                            id="facebook" value="{{ old('facebook') }}">
                    </div>
                    <div id="facebook" class="form-text"><i class="fas fa-info-circle"></i> Opsional</div>
                    @error('facebook')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="instagram" class="form-label">Instagram</label>
                    <div class="input-group">
                        <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="instagram"
                            id="instagram" value="{{ old('instagram') }}">
                    </div>
                    <div id="instagram" class="form-text"><i class="fas fa-info-circle"></i> Opsional</div>
                    @error('instagram')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="inner-width">
            <h1>Barang-Barang yang Ditemukan</h1>
            <div class="border"></div>
            <div class="container-fluid row">
                @foreach ($kehilangans as $kehilangan)
                    <div class="col-sm-4">
                        <div class="card">
                            <img src="
                            @if ($kehilangan->foto) 
                                {{ asset($kehilangan->foto) }}
                            @else
                                {{ asset('storage/default.png') }} @endif
                            "
                                class="card-img-top" alt="{{ $kehilangan->nama }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $kehilangan->tipe }}</h5>
                                <p class="card-text">{{ $kehilangan->keterangan }}</p>
                                <a href="{{ route('kehilangans.show', $kehilangan->id) }}" class="btn btn-primary">Cek
                                    Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
