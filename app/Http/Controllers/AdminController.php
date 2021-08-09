<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    function limitWord($text, $limit_word) {
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        $result = substr($text, 0, $pos[$limit_word]) . '...';
        return $result;
    }

    public function index() {
        $info_ksm = DB::table('info_ksms')->get();
        $limit_word = 15;

        $info_ksm[0]->tentang = (str_word_count($info_ksm[0]->tentang, 0) > $limit_word) ? $this->limitWord($info_ksm[0]->tentang, $limit_word) : $info_ksm[0]->tentang;
        $info_ksm[0]->visi = (str_word_count($info_ksm[0]->visi, 0) > $limit_word) ? $this->limitWord($info_ksm[0]->visi, $limit_word) : $info_ksm[0]->visi;
        $info_ksm[0]->misi = (str_word_count($info_ksm[0]->misi, 0) > $limit_word) ? $this->limitWord($info_ksm[0]->misi, $limit_word) : $info_ksm[0]->misi;

        return view('admin.dashboard', ['info' => $info_ksm]);
    }
}
