<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelurahan = Kelurahan::get();
        $no = 1;
        return view('kelurahan.index', compact('kelurahan', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelurahan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'kecamatan' => 'required|string'
        ]);

        Kelurahan::create($validated);
        return redirect('kelurahan')->with('pesan','Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kelurahan = Kelurahan::find($id);
        return view('kelurahan.show', compact('kelurahan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelurahan = Kelurahan::find($id);
        return view('kelurahan.edit', compact('kelurahan'));
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
        //validasi form input
        $validated = $request->validate([
            'nama' => 'required|string',
            'kecamatan' => 'required|string'
        ]);
        $kelurahan = Kelurahan::find($id);
        $kelurahan->update($validated);
        return redirect('kelurahan')->with('pesan','Data Berhasil Di Perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelurahan = Kelurahan::find($id);
        $kelurahan->delete();

        return redirect('kelurahan')->with('pesan','Data Berhasil Di Hapus');
    }
}
