<?php

use App\Livewire\Admin;
use App\Livewire\HomePage;
use App\Livewire\Product;
use App\Livewire\User;
use App\Livewire\UserForm;
use Illuminate\Support\Facades\Route;

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




Route::get('/', HomePage::class)->name('home');

Route::get('/admin-page', Admin::class)->name('admin');
Route::get('/users', User::class)->name('user');
Route::get('/product', Product::class)->name('product');


Route::get('/user', UserForm::class)->name('user.create');
Route::get('/user/{id}', UserForm::class)->name('user.edit');
// Route::get('/user/{id}', UserForm::class)->name('user.get');





// Route::get('/', function () {
//     return view('layouts.master');
// })->name('home');
