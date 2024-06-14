@extends('components.layout')
@section('content')

<h4>Data Pasien</h4>
<a href="{{ url('pasien/create') }}" class="btn btn-primary">+ Tambah pasien</a>
<table class="table table-bordered">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>kode</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>alamat</th>
                <th>Kelurahan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pasien as $row)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$row->kode}}</td>
                <td>{{$row->nama}}</td>
                <td>{{$row->tmp_lahir}}</td>
                <td>{{$row->tgl_lahir}}</td>
                <td>{{$row->gender}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->alamat}}</td>
                <td>{{$row->kelurahan_id}}</td>
                <td>
                    <a href="{{ route('pasien.show', $row->id) }}" class="text-primary"><i class="far fa-eye"></i> Lihat</a> |
                    <a href="{{ route('pasien.edit', $row->id) }}" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                    <form action="{{ route('pasien.destroy', $row->id) }}" method="post" class="d-inlane">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')"><i class="far fa-trash-alt"></i> Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection