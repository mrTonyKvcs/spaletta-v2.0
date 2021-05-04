<?php

use App\Models\DeliveryAddress;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\Category;

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

    // Route::get(LaravelLocalization::transRoute('routes.orders') . '/{order}', \App\Http\Livewire\Order::class)
    //     ->name('pages.order')
    //     ->middleware('auth');

    // Route::get(LaravelLocalization::transRoute('routes.orders'), \App\Http\Livewire\User\AllOrder::class)
    //     ->name('pages.user-orders')
    //     ->middleware('auth');

    // Route::get(LaravelLocalization::transRoute('routes.cart'), function () {
    //     return view('pages.cart');
    // })->name('pages.cart');

    // Route::get(LaravelLocalization::transRoute('routes.order'), function () {
    //     return view('pages.menu');
    // })->name('pages.menu');

    Route::get(LaravelLocalization::transRoute('routes.menu'), function () {
        $categories = Category::where('type_id', 1)->with('items')->get();
        return view('pages.menu', compact('categories'));
    })->name('pages.menu');

    Route::get(LaravelLocalization::transRoute('routes.reservation'), function () {
        return view('pages.reservation');
    })->name('pages.reservation');

    // Route::get(LaravelLocalization::transRoute('routes.events'), function () {
    //     return view('pages.events');
    // })->name('pages.events');

    Route::get(LaravelLocalization::transRoute('routes.gallery'), function () {
        return view('pages.gallery');
    })->name('pages.gallery');

    Route::get(LaravelLocalization::transRoute('routes.about'), function () {
        return view('pages.about');
    })->name('pages.about');

    Route::get(LaravelLocalization::transRoute('routes.contact'), function () {
        return view('pages.contact');
    })->name('pages.contact');

    Route::get(LaravelLocalization::transRoute('routes.signin'), function () {
        return view('auth.sign-in');
    })->name('auth.signin');

    Route::get(LaravelLocalization::transRoute('routes.events'), [
        'as'    => 'events.index',
        'uses' => 'App\Http\Controllers\EventsController'
    ]);

    Route::get(LaravelLocalization::transRoute('routes.events') . '/{id}', [
        'as'    => 'events.show',
        'uses' => 'App\Http\Controllers\EventsController@show'
    ]);
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', function () {
        return view('pages.admin');
    })->name('admin');

    Route::get('rendelesek', \App\Http\Livewire\Admin\AllOrders::class)
        ->name('admin.orders');

    Route::get('termekek', \App\Http\Livewire\Admin\Item::class)
        ->name('admin.product');
});

//SendMails
Route::post('uzenet-kuldes/{subject}', [
    'as'    => 'mail.store',
    'uses' => 'App\Http\Controllers\SendMailsController@store'
]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

