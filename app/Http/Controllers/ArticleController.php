<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller {
    //
    public function articles($id=1) {
        echo "Halaman Artikel dengan Id ".$id;
    }
}
