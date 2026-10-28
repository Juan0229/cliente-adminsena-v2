<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\TrainingCentersController;
use App\Http\Controllers\ComputersController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\ApprenticesController;

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
});

// Tablas principales de AdminSena
Route::get('areas', [AreasController::class, 'index'])->name('areas.index');
Route::get('areas/create', [AreasController::class, 'create'])->name('areas.create');
Route::post('areas', [AreasController::class, 'store'])->name('areas.store');
Route::get('areas/{id}/edit', [AreasController::class, 'edit'])->name('areas.edit');
Route::put('areas/{id}', [AreasController::class, 'update'])->name('areas.update');
Route::delete('areas/{id}/image', [AreasController::class, 'removeImage'])->name('areas.removeImage');
Route::delete('areas/{id}', [AreasController::class, 'destroy'])->name('areas.destroy');

Route::get('training_centers', [TrainingCentersController::class, 'index'])->name('training_centers.index');

Route::get('computers', [ComputersController::class, 'index'])->name('computers.index');
Route::get('computers/create', [ComputersController::class, 'create'])->name('computers.create');
Route::post('computers', [ComputersController::class, 'store'])->name('computers.store');

Route::get('courses', [CoursesController::class, 'index'])->name('courses.index');
Route::get('teachers', [TeachersController::class, 'index'])->name('teachers.index');
Route::get('apprentices', [ApprenticesController::class, 'index'])->name('apprentices.index');


Route::get('categories', [CategoriesController::class, 'index'])->name('categories');
Route::get('categories/{category}', [CategoriesController::class, 'show'])->name('category.show');


Route::get('posts', [PostController::class, 'index'])->name('posts');


Route::get('home', [HomeController::class, 'index'])->name('home.index');
Route::get('mision_vision', [HomeController::class, 'mision_vision'])->name('home.mision_vision');
Route::get('contact', [HomeController::class, 'contact'])->name('home.contact');
