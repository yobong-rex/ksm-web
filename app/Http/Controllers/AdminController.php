<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $data = DB::table('acaras')->get();
        return view('admin.dashboard',['acara'=>$data]);
    }
}
