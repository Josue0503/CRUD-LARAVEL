<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [StudentController::class, 'index']);
Route::post('/store', [StudentController::class, 'store'])->name('store');
Route::get('/fetchall', [StudentController::class, 'fetchAll'])->name('fetchAll');
Route::delete('/delete', [StudentController::class, 'delete'])->name('delete');
Route::get('/edit', [StudentController::class, 'edit'])->name('edit');
Route::post('/update', [StudentController::class, 'update'])->name('update');