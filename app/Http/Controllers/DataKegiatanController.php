<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataKegiatanController extends Controller
{
    public function index()
    {

        return view('data-kegiatan.index');
    }
}
