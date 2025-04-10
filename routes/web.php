<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// Rute Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute Login & Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute Admin (Tanpa Middleware, Tapi Cek Manual)
Route::prefix('admin')->group(function () {
    Route::get('/', function (Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('about', function () {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return app(AboutController::class)->index();
    })->name('about.index');

    Route::get('about/edit', function () {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return app(AboutController::class)->edit();
    })->name('about.edit');

    Route::post('about/update', function () {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return app(AboutController::class)->update(request());
    })->name('about.update');
    

    // Rute Skill, Education, Projects (Cek Login Manual)
    Route::resource('skills', SkillController::class)->except(['show'])->middleware('auth');
    Route::resource('education', EducationController::class)->except(['show'])->middleware('auth');
    Route::resource('projects', ProjectController::class)->except(['show'])->middleware('auth');

    // Rute Edit Project (Diperbaiki)
    Route::get('projects/{id}/edit', function ($id) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return app(ProjectController::class)->edit($id);
    })->name('admin.projects.edit');

    Route::put('projects/{id}', function ($id) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return app(ProjectController::class)->update(request(), $id);
    })->name('admin.projects.update');
});
