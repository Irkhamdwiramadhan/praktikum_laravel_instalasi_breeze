@extends('components.layout')
@section('content')




<form class="forms-sample" action="{{ url('pasien/update', $pasien->id) }}" method="post">
    @method('POST')
    @csrf
    @method('put')
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">kode</label>
        <div class="col-8">
            <input id="kode" name="kode" type="text" class="form-control" value="{{ $pasien->kode }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
        <div class="col-8">
            <input id="nama_lengkap" name="nama" type="text" class="form-control" value="{{ $pasien->nama }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
        <div class="col-8">
            <input id="tmp_lahir" name="tmp_lahir" type="text" required="required" class="form-control" value="{{ $pasien->tmp_lahir }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal lahir</label>
        <div class="col-8">
            <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" value="{{ $pasien->tgl_lahir}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">gender</label>
        <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="genderLaki" type="radio" required="required" class="custom-control-input" value="L">
                <label for="genderLaki" class="custom-control-label">Laki-Laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="genderPerempuan" type="radio" required="required" class="custom-control-input" value="P">
                <label for="genderPerempuan" class="custom-control-label">Perempuan</label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
            <input id="email" name="email" type="email" class="form-control" value="{{ $pasien->email }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-4 col-form-label">Alamat</label>
        <div class="col-8">
            <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control" value="{{ $pasien->alamat }}"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-4"></div>
        <div class="col-sm-8">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </div>

</form>
@endsection