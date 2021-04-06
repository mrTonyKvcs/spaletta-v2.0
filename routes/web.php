<?php

use App\Models\DeliveryAddress;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers;

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
Route::group(
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'localize' ]
], function()
{

    Route::get('/', function (Request $request) {
        return view('pages.index');
    });

    // Route::get('rendeles/{id}', function (Request $request) {
    //     return view('pages.order', ['request' => $request]);
    // })->name('pages.order')->middleware('auth');

    Route::get(LaravelLocalization::transRoute('routes.orders') . '/{order}', \App\Http\Livewire\Order::class)
        ->name('pages.order')
        ->middleware('auth');

    Route::get('cart', function () {
        return view('pages.cart');
    })->name('pages.cart');

    Route::get('menu', function () {
        return view('pages.menu');
    })->name('pages.menu');

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

    Route::get('bejelentkezes', function () {
        return view('auth.sign-in');
    })->name('auth.signin');

    Route::get('rendezvenyek', [
        'as'    => 'events.index',
        'uses' => 'App\Http\Controllers\EventsController@index'
    ]);

    Route::get('rendezvenyek/rendezveny', [
        'as'    => 'EventsController.show',
        'uses' => 'App\Http\Controllers\EventsController@show'
    ]);
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', function () {
        return view('pages.admin');
    })->name('admin');

    Route::get('rendelesek', \App\Http\Livewire\Admin\AllOrders::class)
        ->name('admin.orders');
});

//SendMails
Route::post('uzenet-kuldes/{subject}', [
    'as'    => 'mail.store',
    'uses' => 'SendMailsController@store'
]);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

