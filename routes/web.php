
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DisciplineController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\ReadingController;
use App\Http\Controllers\Admin\DifficultyLevelController;

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
            Route::post('/levels-by', [LevelController::class, 'levelsBy'])->name('levels.by');
        });



        Route::prefix('chapters')->group(function () {
            Route::get('/', [ChapterController::class, 'index'])->name('chapters.index');
            Route::get('/create', [ChapterController::class, 'create'])->name('chapters.create');
            Route::post('/store', [ChapterController::class, 'store'])->name('chapters.store');
            Route::get('/edit/{chapter}', [ChapterController::class, 'show'])->name('chapters.edit');
            Route::post('/update/{chapter}', [ChapterController::class, 'update'])->name('chapters.update');
            Route::post('/delete/{chapter}', [ChapterController::class, 'destroy'])->name('chapters.delete');
            Route::post('/chapters-by', [ChapterController::class, 'chaptersBy'])->name('chapters.by');
        });

        Route::prefix('topics')->group(function () {
            Route::get('/', [TopicController::class, 'index'])->name('topics.index');
            Route::get('/create', [TopicController::class, 'create'])->name('topics.create');
            Route::post('/store', [TopicController::class, 'store'])->name('topics.store');
            Route::get('/edit/{topic}', [TopicController::class, 'show'])->name('topics.edit');
            Route::post('/update/{topic}', [TopicController::class, 'update'])->name('topics.update');
            Route::post('/delete/{topic}', [TopicController::class, 'destroy'])->name('topics.delete');
            Route::post('/topics-by', [TopicController::class, 'topicsBy'])->name('topics.by');
        });


        Route::prefix('readings')->group(function () {
            Route::get('/', [ReadingController::class, 'index'])->name('readings.index');
            Route::get('/create', [ReadingController::class, 'create'])->name('readings.create');
            Route::post('/store', [ReadingController::class, 'store'])->name('readings.store');
            Route::get('/edit/{reading}', [ReadingController::class, 'show'])->name('readings.edit');
            Route::post('/update/{reading}', [ReadingController::class, 'update'])->name('readings.update');
            Route::post('/delete/{reading}', [ReadingController::class, 'destroy'])->name('readings.delete');
        });


        Route::prefix('difficulty-levels')->group(function () {
            Route::get('/', [DifficultyLevelController::class, 'index'])->name('difficulty-levels.index');
            Route::get('/create', [DifficultyLevelController::class, 'create'])->name('difficulty-levels.create');
            Route::post('/store', [DifficultyLevelController::class, 'store'])->name('difficulty-levels.store');
            Route::get('/edit/{difficultyLevel}', [DifficultyLevelController::class, 'show'])->name('difficulty-levels.edit');
            Route::post('/update/{difficultyLevel}', [DifficultyLevelController::class, 'update'])->name('difficulty-levels.update');
            Route::post('/delete/{difficultyLevel}', [DifficultyLevelController::class, 'destroy'])->name('difficulty-levels.delete');
        });


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
