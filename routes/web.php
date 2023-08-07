<?php

use App\Models\Page;
use App\Models\Macau;
use App\Models\Dreambook;
use App\Models\SiteEvent;
use App\Models\Navigation;
use App\Models\PredictMarket;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MacauController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\SeoPageController;
use App\Http\Controllers\DreambookController;
use App\Http\Controllers\SiteEventController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\PredictMarketController;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/event', function () {
    $events = SiteEvent::with('status', 'eventComments', 'commentWinners', 'commentWinners')->where('status_id', "!=", "5")->latest()->get();

    return view('event', compact('events'));
})->name('event');

Route::get('/prediction', function () {
    $predicts = PredictMarket::all();

    return view('prediction', compact('predicts'));
})->name('prediction');

Route::prefix('livedraw')->group(function () {
    Route::get('/sydney', function () {

        return view('livedraw.sydney');
    })->name('livedraw.sydney');

    Route::get('/singapore', function () {
        return view('livedraw.singapore');
    })->name('livedraw.singapore');

    Route::get('/hongkong', function () {
        return view('livedraw.hongkong');
    })->name('livedraw.hongkong');

    Route::get('/macau', function () {
        return view('livedraw.macau');
    })->name('livedraw.macau');
});

Route::prefix('data')->group(function () {
    Route::get('/sydney', function () {
        return view('data.sydney');
    })->name('data.sydney');

    Route::get('/singapore', function () {
        return view('data.singapore');
    })->name('data.singapore');

    Route::get('/hongkong', function () {
        return view('data.hongkong');
    })->name('data.hongkong');

    Route::get('/macau', function () {
        // $macaus = Macau::latest('date')->take(30)->get();
        // return view('data.macau', compact('macaus'));
        return view('data.macau');
    })->name('data.macau');
});

Route::prefix('paito')->group(function () {
    Route::get("/sdy", function () {
        return view('paito-sdy')->name('paito.sydney');
    });
    Route::get("/sgp", function () {
        return view('paito-sgp')->name('paito.singapore');
    });
    Route::get("/hk", function () {
        return view('paito-hk')->name('paito.hongkong');
    });
});

Route::get('/prediksi/{slug}', function ($slug) {
    $predict = PredictMarket::where("slug", $slug)->first();
    return view('predict-table', compact('predict'));
});

Route::get('/dreambook', function () {
    $dreambooks = Dreambook::all();

    return view("dreambook", compact('dreambooks'));
})->name('dreambook');

Route::get('/register', [AuthController::class, 'register'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'storeRegister']);
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware(['guest']);
Route::post('/login', [AuthController::class, 'authenticating'])->middleware(['guest']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware(['auth']);

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });

    Route::get('/dashboard', function () {
        $navigations = Navigation::all();

        return view('admin.dashboard', compact('navigations'));
    })->name('dashboard');
    Route::resources([
        'page' => PageController::class,
        'navigations' => NavigationController::class,
        'seos' => SeoPageController::class,
        'macaus' => MacauController::class,
        'predicts' => PredictMarketController::class,
        'dreambooks' => DreambookController::class,
        'sites' => SiteController::class,
        'statuses' => StatusController::class,
        'events' => SiteEventController::class,
        'users' => UserController::class,
    ]);

    Route::resource('histories', HistoryController::class)->only('index');

    Route::get('/page-image', function () {
        $page = Page::find(1);
        return view('admin.page.image', compact('page'));
    })->name('admin.page.image');
});


Route::get('/test', function () {
    return view('test');
});
