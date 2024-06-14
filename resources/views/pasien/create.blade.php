@extends('components.layout')
@section('content')




<form class="forms-sample" action="{{ route('pasien.store') }}" method="post">
    @method('POST')
    @csrf
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">kode</label>
        <div class="col-8">
            <input id="kode" name="kode" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
        <div class="col-8">
            <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
        <div class="col-8">
            <input id="tmp_lahir" name="tmp_lahir" type="text" required="required" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal lahir</label>
        <div class="col-8">
            <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
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
            <input id="email" name="email" type="email" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-4 col-form-label">Alamat</label>
        <div class="col-8">
            <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="proses" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection