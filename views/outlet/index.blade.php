@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Outlet</div>
                    <div class="card-body">

                   <table class="table">
                    <thead class="table-dark">
                        <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Nama</th>
                        <th style="text-align: center;">Alamat</th>
                        <th style="text-align: center;">No Telepon</th>
                        <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        @if(count($outlet)>0)
                    @foreach($outlet as $outlet)
                    <th scope="text-align: center;">{{$outlet->id}}</th>
                    <td style="text-align: center;">{{ $outlet->nama }}</td>
                    <td style="text-align: center;">{{ $outlet->alamat }}</td>
                    <td style="text-align: center;">{{ $outlet->telepon }}</td>
                    <td style="text-align: center;">
                    <form action="{{ route('outlet.destroy', [$outlet->id]) }}" method='POST'>
                        @csrf
                        {{method_field('DELETE')}}
                        <a href="{{route('outlet.edit', [$outlet->id])}}" class="btn btn-outline-success">Edit</a>
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
                <tr>
                        <td>
                        <a href="{{route('outlet.create')}}" class="btn btn-primary">Tambah Data</a>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection