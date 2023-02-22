<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Contact;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "Nim: 2141720127 <br>";
//     echo "Nama : Hanif Naufal Rafandi ";
// }); 

// Route::get('/articles/{id?}', function ($id=1) {
//     echo "Halaman Artikel dengan Id ".$id;
// });

// Route::get('/', [HomeController::class,'index']);

// Route::get('/about', [AboutController::class,'about']);

// Route::get('/articles', [ArticleController::class,'articles']);

Route::get('/home', function () {
    echo "<h1 style=text-align:center;>Selamat Datang di Web Company Profile Kami</h1>";
});

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        echo "Educa Studio <br>";
        echo "A simple Fun Educational Platform <br>";
        echo "Marbel - Educational Games <br>";
        echo "Home / Marbel - Educational Games <br>";
    });

    Route::get('/marbel-and-friends-kind-games', function () {
        echo "Educa Studio <br>";
        echo "A simple Fun Educational Platform <br>";
        echo "Marbel & Friends - Kids Games <br>";
        echo "Home / Marbel & Friends - Kids Games <br>";
    });

    Route::get('/riri-story-books', function () {
        echo "Educa Studio <br>";
        echo "A simple Fun Educational Platform <br>";
        echo "Riri - Story Books <br>";
        echo "Home / Riri - Story Books <br>";
    });

    Route::get('/kolak-kids-songs', function () {
        echo "Educa Studio <br>";
        echo "A simple Fun Educational Platform <br>";
        echo "Kolak - Kids Songs <br>";
        echo "Home / Kolak - Kids Songs <br>";
    });
});

Route::get('/news/{links?}', function ($links = '') {
    if ($links == '') {
        echo "Educa Studio <br>";
        echo "A simple Fun Educational Platform <br>";
        echo "Berita <br>";
        echo "Home / Berita <br>";

    } else {
        echo "Educa Studio <br>";
        echo "A simple Fun Educational Platform <br>";
        echo "Educa Studio Berbagi Untuk Warga Sekitar Terdampak Covid-19 <br>";
    } 
});

Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        echo "Educa Studio <br>";
        echo "A simple Fun Educational Platform <br>";
        echo "Karir <br>";
        echo "Home / Karir <br>";
    });

    Route::get('/magang', function () {
        echo "Educa Studio <br>";
        echo "A simple Fun Educational Platform <br>";
        echo "Magang <br>";
        echo "Home / Magang <br>";
    });

    Route::get('/kunjungan-industri', function () {
        echo "Educa Studio <br>";
        echo "A simple Fun Educational Platform <br>";
        echo "kunjungan Industri <br>";
        echo "Home / Kunjungan Industri <br>";
    });
});

Route::get('/about-us', function () {
    echo "Educa Studio <br>";
    echo "A simple Fun Educational Platform <br>";
    echo "Tentang Kami <br>";
    echo "Home / Tentang Kami <br>";
});


Route::resource('/contact-us', Contact::class)->only(['index', 'store', 'show']);
