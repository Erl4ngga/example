<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $profile=Auth()->user();
        return view('pages.backend.index')->with('profile',$profile);
    }
}
