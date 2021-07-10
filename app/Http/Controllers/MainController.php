<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    // [RICKY] Load halaman index website
    function index() {
        return view('client.index');
    }
}
