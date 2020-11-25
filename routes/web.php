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

Route::get('/companies', App\Http\Livewire\Companies\Index::class)->name('companies.index');
Route::get('/companies/create', App\Http\Livewire\Companies\Create::class)->name('companies.create');
Route::get('/companies/edit/{id}', App\Http\Livewire\Companies\Edit::class)->name('companies.edit');

Route::get('/employees', App\Http\Livewire\Employees\Index::class)->name('employees.index');
Route::get('/employees/create', App\Http\Livewire\Employees\Create::class)->name('employees.create');
Route::get('/employees/edit/{id}', App\Http\Livewire\Employees\Edit::class)->name('employees.edit');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/', function () {
    return view('auth.login');
});
