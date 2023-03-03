<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

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

Route::get('/home', function () {
    return 'Selamat Datang di Beranda';
});

Route::prefix('products')->group(function() {
    Route::get('/category/marbel-edu-games', function () {
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });

    Route::get('category/marbel-and-friends-kids-games', function () {
        return redirect('https:://www.educastudio.com/category/marbel-and-friends-kids-games');
    });

    Route::get('category/riri-story-books-animations', function () {
        return redirect('https:://www.educastudio.com/category/riri-story-books-animations');
    });

    Route::get('category/kolak-kids-songs', function () {
        return redirect('https:://www.edycastudio.com/category/kolak-kids-songs');
    });
});

Route::get('news/', function () {
    return redirect('https:://www.educastudio.com/news');
});

Route::get('/news/{title', function () {
    return redirect('https:://www.educastudio.com/news/'.$title);
});

Route::prefix('programs')->group(function() {
    Route::get('/karir', function () {
        return redirect('https:://www.educastudio.com/program/karir');
    });

    Route::get('/magang', function () {
        return redirect('https:://www.educastudio.com/program/magang');
    });

    Route::get('/kunjungan-industri', function () {
        return redirect('https:://www.educastudio.com/program/kunjungan-industri');
    });
});

Route::get('/about-us', [AboutController::class, 'aboutUs']);

Route::get('/contact-us', [ContactController::class, 'contactUs']);