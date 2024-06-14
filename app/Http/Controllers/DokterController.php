<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function index()
    {
        $dokter =Dokter::get();
        $no = 1;
        return view('dokter.index', compact('dokter', 'no'));
    }
}
