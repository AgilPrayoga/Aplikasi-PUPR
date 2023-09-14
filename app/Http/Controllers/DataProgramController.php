<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataProgramController extends Controller
{
    public function index()
    {

        return view('data-program.index');
    }
}
