<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSubKegiatanController extends Controller
{
    public function index()
    {

        return view('data-sub-kegiatan.index');
    }
}
