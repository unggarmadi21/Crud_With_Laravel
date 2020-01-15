@extends('layout/main')

@section('title', 'Edit Data')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h1 class=" mt-3">Form Edit Data Mata Kuliah </h1>

            <form method="post" action="/arsip">
                @method('patch')
                @csrf

                <div class="form-group">
                    <label for="penyimpanan">Metode Penyimpanan</label>
                    <input type="text" value="{{ old('penyimpanan') }}" class="form-control @error('penyimpanan') is-invalid @enderror" id="penyimpanan" placeholder="Masukan Metode Penyimpanan" name="penyimpanan">
                    @error('penyimpanan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="dokumentasi">Metode Dokumentasi</label>
                    <input type="text" value="{{ old('dokumentasi') }}" class="form-control  @error('dokumentasi') is-invalid @enderror" id="dokumentasi" placeholder="Masukan Metode Dokumentasi" name="dokumentasi">
                    @error('dokumentasi')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keamanan">Keamanan Data Arsip</label>
                    <input type="text" value="{{ old('keamanan') }}" class="form-control  @error('keamanan') is-invalid @enderror" id="keamanan" placeholder="Masukan Metode Keamanan" name="keamanan">

                    @error('keamanan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sistem">Sistem Data Arsip</label>
                    <input type="text" value="{{ old('sistem') }}" class="form-control  @error('sistem') is-invalid @enderror" id="sistem" placeholder="Masukan Sistem Data Arsip" name="sistem">

                    @error('sistem')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>
</div>
@endsection