@extends('layout/main')

@section('title', 'My Data')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-lg-10">
            <h1 class=" mt-3">Daftar Mata Kuliah</h1>



            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">Programming</th>
                        <th scope="col">Design</th>
                        <th scope="col">Networking</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $d->mata_kuliah }}</td>
                        <td>{{ $d->programming }}</td>
                        <td>{{ $d->design }}</td>
                        <td>{{ $d->networking }}</td>
                        <td>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>



            </table>
        </div>
    </div>
</div>
@endsection