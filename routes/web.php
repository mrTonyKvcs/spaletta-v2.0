<?php

use App\Models\DeliveryAddress;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Ticket;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::get('payment-start', 'App\Http\Controllers\PaymentController@start')
    ->name('payment.start');

Route::get('payment-back', 'App\Http\Controllers\PaymentController@back')
    ->name('payment.back');

Route::get('payment-finish', 'App\Http\Controllers\PaymentController@finish')
    ->name('payment.finish');

Route::post('payment-ipn', 'App\Http\Controllers\PaymentController@ipn')
    ->name('payment.ipn');



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'localize']
    ],
    function () {
        Route::get('/', [
            'as' => 'pages.index',
            'uses' => 'App\Http\Controllers\PagesController@index'
        ]);

        Route::post('hirlevel', [
            'as' => 'pages.newsletter',
            'uses' => 'App\Http\Controllers\NewsletterController@subscribed'
        ]);

        Route::get('hirlevel-leiratkozas', [
            'as' => 'pages.unsubscribe-page',
            'uses' => 'App\Http\Controllers\NewsletterController@unsubscribePage'
        ]);

        Route::post('hirlevel-leiratkozas', [
            'as' => 'pages.unsubscribe',
            'uses' => 'App\Http\Controllers\NewsletterController@unsubscribe'
        ]);

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
            // return redirect()->route('pages.bistro');
            $title = 'Étlap';
            $categories = Category::whereIn('type_id', [1, 9])->orderBy('order_column')->with('items')->get();
            return view('pages.restaurant', compact('categories', 'title'));
        })->name('pages.menu');

        // Route::get('oktobierfest', function () {
        //     $title = 'OKTOBIERFEST Étlap';
        //     $categories = Category::where('type_id', 8)->with('items')->get();
        //     return view('pages.menu', compact('categories', 'title'));
        // })->name('pages.oktobierfest');

        Route::get(LaravelLocalization::transRoute('routes.reservation'), function () {
            return view('pages.reservation');
        })->name('pages.reservation');

        // Route::get('sikeres-vasarlas/{id}', function ($id) {
        //     $ticket = Ticket::find($id);

        //     return view('pages.successful-shopping', [
        //         'ticket' => $ticket
        //     ]);
        // })->name('pages.successful-shopping');

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
        //     return view('pages.restaurant');
        // })->name('pages.restaurant');

        // Route::get(LaravelLocalization::transRoute('routes.menu'), function () {
        //     return redirect('https://www.facebook.com/spalettaetterem/menu/?id=100036783267355&sk=menu');
        //     $title = 'Étlap';
        //     $categories = Category::where('type_id', 1)->with('items')->get();
        //     return view('pages.restaurant', compact('categories', 'title'));
        // })->name('pages.restaurant');

        Route::get(LaravelLocalization::transRoute('routes.restaurant'), function () {
            return redirect()->route('pages.menu');
        })->name('pages.restaurant');

        Route::get(LaravelLocalization::transRoute('routes.bar'), function () {
            return redirect()->route('pages.bistro');
        })->name('pages.bar');

        Route::get('bistro', function () {
            $title = 'Bistro étlap';
            $products = Product::whereIn('id', [2, 31, 32, 33, 34, 35, 36, 22])->get();
            return view('pages.christmas', compact('products', 'title'));
        })->name('pages.bistro');

        // Route::get('oktobierfest', function () {
        //     $title = 'OKTOBIERFEST Étlap';
        //     $categories = Category::where('type_id', 8)->with('items')->get();
        //     return view('pages.restaur`ant', compact('categories', 'title'));
        // })->name('pages.oktobierfest');

        Route::get(LaravelLocalization::transRoute('routes.reservation'), function () {
            return view('pages.reservation');
        })->name('pages.reservation');

        // Route::get('sikeres-vasarlas/{id}', function ($id) {
        //     $ticket = Ticket::find($id);

        //     return view('pages.successful-shopping', [
        //         'ticket' => $ticket
        //     ]);
        // })->name('pages.successful-shopping');

        Route::get('check-in/{id}/{orderNumber}', [
            'as' => 'ticket.check-in',
            'uses' => 'App\Http\Controllers\TicketController@checkIn'
        ]);

        Route::get('sikeres-vasarlas-visszaigazolasa/{id}/{orderNumber}', [
            'as' => 'pages.successful-payment',
            'uses' => 'App\Http\Controllers\TicketController@successfullyPayment'
        ]);

        Route::get('sikertelen-fizetes/{transaction}', [
            'as' => 'pages.payment-error',
            'uses' => 'App\Http\Controllers\TicketController@paymentError'
        ]);

        // Route::get(LaravelLocalization::transRoute('routes.events'), function () {
        //     return view('pages.events');
        //     return view('pages.events');
        // })->name('pages.events');

        Route::get(LaravelLocalization::transRoute('routes.gallery'), function () {
            $gallery = collect(config('spaletta.gallery-images'))->sortBy('name')->reverse()->toArray();
            return view('pages.gallery', [
                'gallery' => $gallery
            ]);
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

        Route::get(LaravelLocalization::transRoute('routes.weeklymenu'), function () {
            return view('pages.weeklymenu');
        })->name('pages.weeklymenu');

        Route::get(LaravelLocalization::transRoute('routes.landingpage'), function () {
            return view('pages.landingpage');
        })->name('pages.landingpage');
    }
);

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
