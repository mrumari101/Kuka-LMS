
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DisciplineController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\TopicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Root redirect
Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('dashboard')
        : redirect()->route('login');
});

// Unified Dashboard (Role-based)
Route::get('/dashboard', function () {
    $user = auth()->user();

    if ($user->hasRole('admin')) {
        return view('dashboard.admin');
    }

    if ($user->hasRole('teacher')) {
        return view('dashboard.teacher');
    }

    if ($user->hasRole('student')) {
        return view('dashboard.student');
    }

    abort(403);
})->middleware('auth')->name('dashboard');

// Authenticated user routes
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

// Admin routes (Super Admin only)
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::prefix('disciplines')->group(function () {
            Route::get('/', [DisciplineController::class, 'index'])->name('disciplines.index');
            Route::get('/create', [DisciplineController::class, 'create'])->name('disciplines.create');
            Route::post('/store', [DisciplineController::class, 'store'])->name('disciplines.store');
            Route::get('/edit/{discipline}', [DisciplineController::class, 'show'])->name('disciplines.edit');
            Route::post('/update/{discipline}', [DisciplineController::class, 'update'])->name('disciplines.update');
            Route::post('/delete/{discipline}', [DisciplineController::class, 'destroy'])->name('disciplines.delete');
        });

        Route::prefix('levels')->group(function () {
            Route::get('/', [LevelController::class, 'index'])->name('levels.index');
            Route::get('/create', [LevelController::class, 'create'])->name('levels.create');
            Route::post('/store', [LevelController::class, 'store'])->name('levels.store');
            Route::get('/edit/{level}', [LevelController::class, 'show'])->name('levels.edit');
            Route::post('/update/{level}', [LevelController::class, 'update'])->name('levels.update');
            Route::post('/delete/{level}', [LevelController::class, 'destroy'])->name('levels.delete');
        });


//        Route::resource('levels', LevelController::class);
//        Route::resource('chapters', ChapterController::class);
//        Route::resource('topics', TopicController::class);

    });

// Auth routes (login, register, forgot password, etc.)
require __DIR__ . '/auth.php';




//
//use App\Http\Controllers\ProfileController;
//use Illuminate\Support\Facades\Route;
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//
//require __DIR__.'/auth.php';
