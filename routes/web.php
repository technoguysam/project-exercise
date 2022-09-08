<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('borrowers', [App\Http\Controllers\BorrowerController::class, 'index'])->name('borrowerlist');
Route::get('borrower-create', [App\Http\Controllers\BorrowerController::class, 'create'])->name('borrowercreate');
Route::POST('borrower-store', [App\Http\Controllers\BorrowerController::class, 'store'])->name('borrowerstore');
Route::get('update-borrower/{id}', [App\Http\Controllers\BorrowerController::class, 'edit'])->name('updateborrower');
Route::PUT('update-borrower/{id}', [App\Http\Controllers\BorrowerController::class, 'update'])->name('updateborrowers');
Route::get('delete-borrower/{id}', [App\Http\Controllers\BorrowerController::class, 'destroy'])->name('deleteborrower');
