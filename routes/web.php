
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DisciplineController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\ReadingBuilderController;

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


        Route::prefix('reading-builders')->group(function () {
            Route::get('/', [ReadingBuilderController::class, 'index'])->name('reading-builders.index');
            Route::get('/create', [ReadingBuilderController::class, 'create'])->name('reading-builders.create');
            Route::post('/store', [ReadingBuilderController::class, 'store'])->name('reading-builders.store');
            Route::get('/edit/{readingBuilder}', [ReadingBuilderController::class, 'show'])->name('reading-builders.edit');
            Route::post('/update/{readingBuilder}', [ReadingBuilderController::class, 'update'])->name('reading-builders.update');
            Route::post('/delete/{readingBuilder}', [ReadingBuilderController::class, 'destroy'])->name('reading-builders.delete');
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
