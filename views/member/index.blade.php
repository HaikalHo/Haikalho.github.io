@include('admin.layouts.sidebar')
@include('admin.layouts.navbar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Data Member</div>
                    <div class="card-body">

`                    <table class="table">
                    <thead class="table-dark">
                        <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Nama</th>
                        <th style="text-align: center;">Alamat</th>
                        <th style="text-align: center;">No Telepon</th>
                        <th style="text-align: center;">jenis Kelamin</th>
                        <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>`
                <tbody>
                    <tr>
                        @if(count($member)>0)
                    @foreach($member as $member)
                    <th scope="text-align: center;">{{$member->id}}</th>
                    <td style="text-align: center;">{{ $member->nama }}</td>
                    <td style="text-align: center;">{{ $member->alamat }}</td>
                    <td style="text-align: center;">{{ $member->no_telp }}</td>
                    <td style="text-align: center;">{{ $member->jenis_kelamin }}</td>
                    <td style="text-align: center;">
                    <form action="{{ route('member.destroy', [$member->id]) }}" method='POST'>
                        @csrf
                        {{method_field('DELETE')}}
                        <a href="{{route('member.edit', [$member->id])}}" class="btn btn-outline-success">Edit</a>
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
                <tr>
                        <td>
                        <a href="{{route('member.create')}}" class="btn btn-primary">Tambah Data</a>
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
@include('admin.layouts.footer')