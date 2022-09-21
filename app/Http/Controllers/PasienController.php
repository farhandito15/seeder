<?php

namespace App\Http\Controllers;

use App\Models\PasienModel;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $data = PasienModel::all();
        return view('data_pasien', compact('data'));
    }
}
