@extends('layout/main')

@section('title', 'Detail Arsip')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1 class=" mt-3">Detail Arsip Mata Kuliah </h1>



            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $arsip->penyimpanan}}
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        {{ $arsip->dokumentasi}}
                    </h6>
                    <p class="text-muted"> {{ $arsip->sistem}} </p>

                    <a href="{{ $arsip->id }}/edit" class="btn btn-primary">Edit</a>
                    <form action="/arsip/{{ $arsip->id }}" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>


                    <a href="/arsip" class="card-link">Back</a>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection