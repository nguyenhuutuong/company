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
    Route::get('/', function () {
        $servicesData = [
            [
                'name' => 'Xây Nhà Trọn Gói',
                'description' => 'Cung cấp giải pháp toàn diện từ thiết kế, xin phép, thi công đến hoàn thiện, giúp bạn an tâm xây dựng tổ ấm.',
                'url' => route('services.full-package-construction'),
                'image' => 'https://images.unsplash.com/photo-1579969406409-90d235424563?q=80&w=1974&auto=format&fit=crop'
            ],
            [
                'name' => 'Thiết Kế & Thi Công Nội Thất',
                'description' => 'Kiến tạo không gian sống đẳng cấp, cá nhân hóa theo phong cách riêng, tối ưu hóa công năng sử dụng.',
                'url' => route('services.interior-design'),
                'image' => 'https://images.unsplash.com/photo-1618220179428-22790b461013?q=80&w=1974&auto=format&fit=crop'
            ],
            [
                'name' => 'Thiết Kế & Thi Công Ngoại Thất',
                'description' => 'Nâng tầm vẻ đẹp và giá trị cho công trình của bạn với các giải pháp thiết kế ngoại thất sáng tạo và bền vững.',
                'url' => route('services.exterior-design'),
                'image' => 'https://images.unsplash.com/photo-1600585152220-406b9b21dc3b?q=80&w=1974&auto=format&fit=crop'
            ],
        ];
        return view('services.index', ['services' => $services]);
    })->name('index');

    Route::get('/xay-nha-tron-goi', function () {
        return view('services.full-package-construction');
    })->name('full-package-construction');

    Route::get('/thiet-ke-thi-cong-noi-that', function () {
        return view('services.interior-design');
    })->name('interior-design');

    Route::get('/thiet-ke-thi-cong-ngoai-that', function () {
        return view('services.exterior-design');
    })->name('exterior-design');
});

// House Models
Route::prefix('mau-nha')->name('models.')->group(function () {
    Route::get('/', function () {
        return view('models.index');
    })->name('index');

    Route::get('/nha-pho', function () {
        return view('models.townhouse');
    })->name('townhouse');

    Route::get('/biet-thu', function () {
        return view('models.villa');
    })->name('villa');

    Route::get('/nha-cap-4', function () {
        return view('models.single-story');
    })->name('single-story');
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
