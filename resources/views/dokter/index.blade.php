@extends('components.layout')
@section('content')

<h4>Data Dokter</h4>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>

            <th>kategori</th>
            <th>telephon</th>
            <th>alamat</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($dokter as $row)
        <tr>
            <td>{{$no++}}</td>
            
            <td>{{$row->nama}}</td>
            <td>{{$row->tmp_lahir}}</td>
            <td>{{$row->gender}}</td>
            <td>{{$row->tgl_lahir}}</td>
            
            <td>{{$row->kategori}}</td>
            <td>{{$row->telephon}}</td>
            <td>{{$row->alamat}}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection