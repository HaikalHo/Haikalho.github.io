@include('admin.layouts.sidebar')
@include('admin.layouts.navbar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get ('message')}}
            </div>
            @endif
            <div class="card">
                <div class="card-header">Edit data Member</div>

                <div class="card-body">
                <form action="{{route('member.update',[$member->id]) }}" method="post">
                    @csrf
                    {{method_field('PUT')}}
                 <div class="mb-3">
                   <label for="nama" class="form-label">Nama</label>
                   <input name="nama" type="text" class="form-control" value="{{$member->nama}}">
                 </div>
                 <div class="mb-3">
                   <label for="alamat" class="form-label">Alamat</label>
                   <input name="alamat" type="text" class="form-control" value="{{$member->alamat}}">
                 </div>
                 <div class="mb-3">
                   <label for="telepon" class="form-label">No Telepon</label>
                   <input name="telepon" type="text" class="form-control" value="{{$member->no_telp}}">
                 </div>
                 <div>
                   <p>Jenis Kelamin</p>
      <p><input type='radio' name='jenis_kelamin' value='L' checked='checked' >L</p>
      <p><input type='radio' name='jenis_kelamin' value='P' >P</p>
                   </div>
                 <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.layouts.footer')