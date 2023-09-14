<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataBidangController extends Controller
{
    public function index()
    {

        return view('data-bidang.index');
    }
}
