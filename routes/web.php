<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/dashboard/employees', function () {
    return Inertia::render('employees');
})->name('employees');

Route::get('/dashboard/About', function () {
    return Inertia::render('About');
})->name('About');

Route::get('/dashboard/tasks', function () {
    return Inertia::render('tasks');
})->name('tasks');

Route::get('/dashboard/tasks/tasks-create', function () {
    return Inertia::render('tasks-create');
})->name('tasks-create');

Route::get('/dashboard/Messages-Notifications', function () {
    return Inertia::render('Messages-Notifications');
})->name('Messages-Notifications');

Route::get('/dashboard/revenue', function () {
    return inertia('monthly-revenue', [
        'revenue' => 1000000,
    ]);
})->name('monthly-revenue');

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource("contact", ContactController::class);
Route::resource("jobs", JobsController::class);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
