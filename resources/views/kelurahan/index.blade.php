@extends('components.layout')
@section('content')




<h4>Data Kelurahan</h4>
<!-- @php
echo $kelurahan;
@endphp -->
<a href="{{ url('kelurahan/create') }}" class="btn btn-primary">+ Tambah Kelurahan</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Daerah</th>
            <th>Kecamatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kelurahan as $row)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->kecamatan}}</td>
            <td>
                <a href="{{ route('kelurahan.show', $row->id) }}" class="text-primary"><i class="far fa-eye"></i> Lihat</a> |
                <a href="{{ route('kelurahan.edit', $row->id) }}" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                <form action="{{ route('kelurahan.destroy', $row->id) }}" method="post" class="d-inlane">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')"><i class="far fa-trash-alt"></i> Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@if (session('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('pesan')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif
@endsection