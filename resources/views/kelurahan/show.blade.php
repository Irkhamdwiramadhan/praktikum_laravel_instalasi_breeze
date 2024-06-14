@extends('components.layout')
@section('content')

<table>
    <tr>
        <th>No</th>
        <th>Id</th>
        <th>Nama Kelurahan</th>
        <th>Nama Kecamatan</th>
        <th>Data Dibuat Pada</th>
        <th>Data Di Update Pada</th>
    </tr>
    <tr>
        <td></td>
        <td>{{ $kelurahan->id }}</td>
        <td>{{ $kelurahan->nama }}</td>
        <td>{{ $kelurahan->kecamatan }}</td>
        <td>{{ $kelurahan->created_at }}</td>
        <td>{{ $kelurahan->updated_at }}</td>
    </tr>
</table>
@endsection