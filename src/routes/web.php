<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductContoller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;

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
    return view('welcome');
});


// Static Route
// Route::get('/blogs', function () {
//     return "Hello, This is blog page.";
// });


// Dynamic Route
// Route::get('/blogs/{id}', function($id) {
//     return "Hello, This is blog detail - $id.";
// });


// Routes Name
// Route::get('/dashboard', function(){
//     return "Welcome from TPP Program Dashboard!";
// })->name('dashboard.tpp');

// Route::get('/tpp', function(){
//     return redirect()->route('dashboard.tpp');
// });


// Group Routes
// Route::prefix('dashboard')->group(function() {
//     Route::get('/admin', function() {
//         return "This is admin dashboard.";
//     });

//     Route::get('/users', function() {
//         return "This is user dashboard.";
//     });
// });

// Larvael Views
Route::get('/students', [StudentController::class, 'index']);

Route::get('/dashboard', function() {
    return view('index');
})->name('dashboard');

// Model and Migrations

//category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');

Route::get('/categories/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/{id}/update', [CategoryController::class, 'update'])->name('categories.update');

Route::post('/categories/{id}', [CategoryController::class, 'delete'])->name('categories.delete');


// Products
Route::get('products', [ProductContoller::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductContoller::class, 'create'])->name('products.create');
Route::post('/products/store', [ProductContoller::class, 'store'])->name('products.store');

Route::get('/products/{id}', [ProductContoller::class, 'edit'])->name('products.edit');
Route::post('/products/{id}/update', [ProductContoller::class, 'update'])->name('products.update');

Route::post('/products/{id}', [ProductContoller::class, 'destroy'])->name('products.delete');

// Authentation

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
