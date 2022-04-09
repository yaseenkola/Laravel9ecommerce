<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CashController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\StripeController;
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

// Frontend All Routes

Route::get('/', [ProjectController::class, 'index'])->name('home');

Route::get('/single_product', function () {
    return redirect('/');
});

Route::get('/products', [ProjectController::class, 'products'])->name('products');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/single_product/{id}', [ProjectController::class, 'single_product'])->name('single_product');

Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::post('/add_to_cart', [CartController::class, 'add_to_cart'])->name('add_to_cart');

Route::get('/add_to_cart', function () {
    return redirect('/');
});

Route::post('/remove_from_cart', [CartController::class, 'remove_from_cart'])->name('remove_from_cart');

Route::get('/remove_from_cart', function () {
    return redirect('/');
});

Route::post('/edit_product_quantity', [CartController::class, 'edit_product_quantity'])->name('edit_product_quantity');

Route::get('/edit_product_quantity', function () {
    return redirect('/');
});

Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::post('/checkout/store', [CheckoutController::class, 'CheckoutStore'])->name('checkout_store');

Route::post('/stripe/order', [StripeController::class, 'StripeOrder'])->name('stripe_order');

Route::post('/cash/order', [CashController::class, 'CashOrder'])->name('cash_order');

Route::get('/thank_you', [PaymentController::class, 'thank_you'])->name('thank_you');

// Admin All Routes

Route::get('/admin/dashboard', [AdminController::class, 'admin_dashboard'])->name('dashboard');

Route::prefix('product')->group(function () {

    Route::get('/add', [ProductController::class, 'AddProduct'])->name('add-product');

    Route::post('/store', [ProductController::class, 'StoreProduct'])->name('product-store');

});

Route::prefix('orders')->group(function () {

    Route::get('/pending/orders', [OrderController::class, 'PendingOrders'])->name('pending-orders');

    Route::get('/pending/orders/details/{order_id}', [OrderController::class, 'PendingOrdersDetails'])->name('pending_orders_details');

    Route::get('/accepted/orders', [OrderController::class, 'AcceptedOrders'])->name('accepted-orders');

    Route::get('/outfordelivery/orders', [OrderController::class, 'OutForDeliveryOrders'])->name('outfordelivery-orders');

    Route::get('/delivered/orders', [OrderController::class, 'DeliveredOrders'])->name('delivered-orders');

    // Update Status
    Route::get('/pending/accepted/{order_id}', [OrderController::class, 'PendingToAccepted'])->name('pending-accepted');

    Route::get('/accepted/outfordelivery/{order_id}', [OrderController::class, 'AcceptedToOutForDelivery'])->name('accepted-outfordelivery');

    Route::get('/outfordelivery/delivered/{order_id}', [OrderController::class, 'OutForDeliveryToDelivered'])->name('outfordelivery-delivered');

});
