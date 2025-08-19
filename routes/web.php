<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\MediaController as AdminMediaController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\CareerController as AdminCareerController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/media', [MediaController::class, 'index'])->name('media.index');
Route::get('/careers', [CareerController::class, 'index'])->name('careers');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Dynamic routes for projects and media
Route::get('/projects/{project:slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/media/{media:slug}', [MediaController::class, 'show'])->name('media.show');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    // Projects
    Route::resource('projects', AdminProjectController::class);
    
    // Media
    Route::resource('media', AdminMediaController::class);
    
    // Contacts
    Route::get('contacts', [AdminContactController::class, 'index'])->name('contacts.index');
    Route::get('contacts/{contact}', [AdminContactController::class, 'show'])->name('contacts.show');
    Route::patch('contacts/{contact}/status', [AdminContactController::class, 'updateStatus'])->name('contacts.updateStatus');
    Route::delete('contacts/{contact}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');
    
    // Careers
    Route::get('careers', [AdminCareerController::class, 'index'])->name('careers.index');
    Route::get('careers/{career}', [AdminCareerController::class, 'show'])->name('careers.show');
    Route::patch('careers/{career}/status', [AdminCareerController::class, 'updateStatus'])->name('careers.updateStatus');
    Route::get('careers/{career}/download-cv', [AdminCareerController::class, 'downloadCV'])->name('careers.downloadCV');
    Route::delete('careers/{career}', [AdminCareerController::class, 'destroy'])->name('careers.destroy');
});