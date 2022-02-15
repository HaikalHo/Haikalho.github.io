@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get ('message')}}
            </div>
            @endif
            <div class="card">
                <div class="card-header">input data Outlet</div>

                <div class="card-body">
                <form action="{{route('outlet.store')}}" method="post">
                    @csrf
                 <div class="mb-3">
                   <label for="nama" class="form-label">Nama</label>
                   <input name="nama" type="text" class="form-control">
                 </div>
                 <div class="mb-3">
                   <label for="alamat" class="form-label">Alamat</label>
                   <input name="alamat" type="text" class="form-control">
                 </div>
                 <div class="mb-3">
                   <label for="telepon" class="form-label">No Telepon</label>
                   <input name="telepon" type="text" class="form-control">
                 </div>
                 <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection