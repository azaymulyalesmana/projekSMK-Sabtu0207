<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tahun_ajaranController extends Controller
{
    public function index()
    {
        return view('tahun_ajaran.index');
    }
}
