@extends('layout/main')

@section('title', 'Daftar Arsip')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1 class=" mt-3">Daftar Arsip Mata Kuliah </h1>


            <a class="btn btn-primary mb-3" href="/arsip/create">Tambah Data Mata Kuliah</a>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status')}}
            </div>
            @endif
            <ul class="list-group">
                @foreach($arsip as $arsip)

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $arsip->sistem }}
                    <a href="/arsip/{{ $arsip->id }}" class="badge badge-info">detail</a>
                    @endforeach

                </li>
            </ul>


        </div>
    </div>
</div>
@endsection