<?php

use App\Http\Livewire\Order\Index;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function (Request $request) {
    $value = $request->session()->put('shop', [1]);
    $value2 = $request->session()->put('shop', [2]);
    dd($request->session());
    return view('pages.index');
});

Route::get('rendeles', Index::class);

Route::get('menu', function () {
    return view('pages.menu');
});

Route::get('asztalfoglalas', function () {
    return view('pages.reservation');
});

Route::get('esemenyek', function () {
    return view('pages.events');
});

Route::get('galeria', function () {
    return view('pages.gallery');
});

Route::get('rolunk', function () {
    return view('pages.about');
});

Route::get('kapcsolat', function () {
    return view('pages.contact');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
