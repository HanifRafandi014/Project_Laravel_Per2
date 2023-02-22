<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {
    //
    public function index() {
        echo "Selamat Datang";
    }

    public function about() {
        echo "Nim: 2141720127 <br>";
        echo "Nama : Hanif Naufal Rafandi ";
    }

    public function articles($id=1) {
        echo "Halaman Artikel dengan Id ".$id;
    }
}
