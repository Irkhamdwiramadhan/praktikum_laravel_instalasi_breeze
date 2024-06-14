<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Pasien::get();
        $pasien = Pasien::get();
        $no = 1;
        return view('pasien.index', compact('pasien', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $validated = $request->validate([
        //     'nama' => 'required|string',
        //     'kecamatan' => 'required|string'
        // ]);

        // Kelurahan::create($validated);
        // return redirect('kelurahan');

        // $validated = $request->validate([
        //     'kode' => 'required|string',
        //     'nama' => 'required|string',
        //     'tmp_lahir' => 'required|string',
        //     'tgl_lahir' => 'required|string',
        //     'gender' => 'required|string',
        //     'email' => 'required|string',
        //     'alamat' => 'required|string'
        // ]);

        $input = [
            'kode' => $request->kode,
            'nama' => $request->nama_lengkap,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'kelurahan_id' => 8
        ];


        Pasien::create($input);
        return redirect()->route('pasien.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pasien = Pasien::find($id);
        $pasien->kode = $request->kode;
        $pasien->nama = $request->nama;
        $pasien->tmp_lahir = $request->tmp_lahir;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->gender = $request->gender;
        $pasien->email = $request->email;
        $pasien->alamat = $request->alamat;
        $pasien->kelurahan_id = 8;

        $pasien->save();
        return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();

        return redirect()->route('pasien.index')->with('pesan', 'Data Berhasil Di Hapus');
    }
}
