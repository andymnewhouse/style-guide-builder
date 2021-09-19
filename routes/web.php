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

Route::get('/', App\Http\Livewire\Builder\Create::class)->name('style-guide.create');
Route::get('/{guide:slug}', App\Http\Livewire\Builder\Edit::class)->name('style-guide.edit');

require __DIR__.'/auth.php';
