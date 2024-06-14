@extends('components.layout')
@section('content')




<table>
    <tr>
        <th>NO</th>
        <th>kode</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Kelurahan_id</th>
        <th>Data Dibuat Pada</th>
        <th>Data Di Update Pada</th>
    </tr>
    <tr>
        <td>{{$pasien->id}}</td>
        <td>{{$pasien->kode}}</td>
        <td>{{$pasien->nama}}</td>
        <td>{{$pasien->tmp_lahir}}</td>
        <td>{{$pasien->tgl_lahir}}</td>
        <td>{{$pasien->gender}}</td>
        <td>{{$pasien->email}}</td>
        <td>{{$pasien->alamat}}</td>
        <td>{{$pasien->kelurahan_id}}</td>
        <td>{{$pasien->created_at}}</td>
        <td>{{$pasien->updated_at}}</td>
    </tr>
</table>
@endsection