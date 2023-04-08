<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DetailduaController;
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

// Route::post('/login', function () {
//     return view('login');
// });

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/home', [HomeController::class, 'index']);

Route::get('/genre', [GenreController::class, 'index']);

Route::get('/collection', [CollectionController::class, 'index']);
Route::post('/addcollect/{id}', [CollectionController::class, 'addcollect'])->name('addcollect');

Route::get('/detail/{id}', [DetailController::class, 'detail'])->name('detail');
Route::get('/detaildua/{id}', [DetailduaController::class, 'detail'])->name('detail');

Route::get('/history', function () {
    return view('history');
});

Route::get('/popular', function () {
    return view('popular');
});


Route::get('/search', [HomeController::class, 'search'])->name('home');

Route::get('/buku', [BookController::class, 'index'])->name('buku');

Route::get('/tambahbuku', [BookController::class, 'tambahbuku'])->name('tambahbuku');
Route::post('/insertdata', [BookController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [BookController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [BookController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [BookController::class, 'delete'])->name('delete');

Route::get('/download/http://127.0.0.1:8000/isibuku/{isi}', [BookController::class, 'download'])->name('download');