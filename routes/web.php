<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// Routes spécifiques - doivent être placées avant la route générique
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Routes pour les projets
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('project.show');

// Route générique pour les autres pages
Route::get('/{page?}', [HomeController::class, 'show'])->name('page.show')->where('page', '^(?!contact|projects).*');