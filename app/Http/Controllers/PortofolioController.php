<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PortofolioController extends Controller
{
    public function index(){
        $data=DB::table('portofolios')->first();
        return view('portofolio', compact('data'));
    }
}
