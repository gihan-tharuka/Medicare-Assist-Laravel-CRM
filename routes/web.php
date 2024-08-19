<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingController;
use App\Models\Subscription;
use App\Models\User;
use App\Models\Plan;
use App\Models\Booking;

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

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication Routes
Route::get('logout', function () {
    return view('/');
});

// Public Pages Without Controllers
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/services', 'pages.services')->name('services');
Route::view('/pricing', 'pages.pricing')->name('pricing');

// Product Routes
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'showProducts'])->name('products');
Route::get('/product/{product:slug}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
Route::get('/category/{slug}', [\App\Http\Controllers\ProductCategoryController::class, 'show'])->name('category.show');


// Protected Routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    // Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // Admin Routes
    Route::middleware('user.admin')->group(function () {
        Route::resources([
            'product-category' => \App\Http\Controllers\ProductCategoryController::class,
            'user' => \App\Http\Controllers\UserController::class,
            'stock' => \App\Http\Controllers\StockController::class,
            'subscription' => \App\Http\Controllers\SubscriptionController::class,
            'booking' => \App\Http\Controllers\BookingController::class,
        ]);

        //product controller index route
        Route::get('/index', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
        Route::post('/product/store', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
        Route::get('/product/{product}', [\App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
        Route::put('/product/{product}', [\App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
        Route::delete('/product/{product}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');

    });

    // User Routes
    Route::prefix('users')->group(function () {
        Route::get('/subscription', function () {
            return view('user.subscription.index', [
                'subscriptions' => Subscription::where('user_id', auth()->user()->id)->orderBy('id', 'ASC')->paginate(10),
                'users' => User::all(),
                'plans' => Plan::all()
            ]);
        });

        Route::get('/booking', function () {
            return view('user.booking.index', [
                'bookings' => Booking::where('user_id', auth()->user()->id)->orderBy('id', 'ASC')->paginate(10),
                'users' => User::all(),
            ]);
        });
    });

    // Plan Routes
    Route::prefix('plans')->group(function () {
        Route::get('{plan}', [PlanController::class, 'show'])->name('plans.show');
        Route::post('subscription', [PlanController::class, 'subscribe'])->name('subscription.create');
    });

    // other Routes
    Route::get('/pages/subscription_success', function () {
        return view('pages.subscription_success');
    })->name('pages.subscription_success');


});


Route::post('/booking/create', [BookingController::class, 'store'])->name('booking.create');
Route::get('/success', function () {
    return view('pages.booking_success');
})->name('booking.status');
