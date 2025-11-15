<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeTypeController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/gioi-thieu', function () {
    return view('about');
});

Route::get('/lien-he', function () {
    return view('contact');
});

Route::get('/phpinfo', function () {
    phpinfo();
});
Route::get('/error/unsupported-image', function () {
    return view('errors.unsupported_image');
})->name('error.unsupported_image');

// Services
Route::prefix('dich-vu')->name('services.')->group(function () {
    Route::get('/{slug}', [ServiceController::class, 'show'])->name('detail');
});

// House Models
Route::prefix('mau-nha')->name('models.')->group(function () {
    Route::get('/{slug}', [HomeTypeController::class, 'show'])->name('detail');
});

// Projects
Route::prefix('du-an')->name('projects.')->group(function () {
    Route::get('/', function () {
        return view('projects.index');
    })->name('index');

    Route::get('/da-hoan-thanh', function () {
        return view('projects.completed');
    })->name('completed');

    Route::get('/dang-thi-cong', function () {
        return view('projects.in-progress');
    })->name('in-progress');

    Route::get('/{slug}', function () {
        return view('projects.show');
    })->name('show');
});


// News
Route::prefix('tin-tuc')->name('news.')->group(function () {
    Route::get('/', function() {
        return view('news.index');
    })->name('index');

    Route::get('/bai-viet-mau', function() {
        return view('news.show');
    })->name('show');

    Route::get('/kinh-nghiem-xay-nha', function () {
        return view('news.experience');
    })->name('experience');

    Route::get('/tin-cong-ty', function () {
        return view('news.company-news');
    })->name('company-news');
});

// Consulting
Route::prefix('tu-van')->name('consulting.')->group(function () {
    Route::get('/', function () {
        return view('consulting.index');
    })->name('index');

    Route::get('/quy-trinh-lam-viec', function () {
        return view('consulting.process');
    })->name('process');

    Route::get('/tu-van-phong-thuy', function () {
        return view('consulting.feng-shui');
    })->name('feng-shui');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
