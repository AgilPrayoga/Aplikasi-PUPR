<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PPKomController extends Controller
{
    public function index()
    {
        return view('PPKom.index');
    }
}
