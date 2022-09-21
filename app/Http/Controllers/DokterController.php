<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $data = Dokter::all();
        return view('data_dokter', compact('data'));
    }
}
