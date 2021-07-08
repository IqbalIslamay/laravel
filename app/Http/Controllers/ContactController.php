<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    //
    public function index(){
        $data=DB::table('contacts')->first();
        return view('contact', compact('data'));
    }
}
