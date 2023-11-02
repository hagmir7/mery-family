<?php

use App\Http\Controllers\AboutController;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\mediaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartDetailController;
use App\Http\Controllers\ProductImagesController;
use App\Models\Media;

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

Route::get('/', function () {
    return view('index');
})->name('home');



Route::prefix('gallery')->group(function () {
    Route::get('', [mediaController::class, 'index'])->name('gallery.index');
    Route::get('create', [mediaController::class, 'create'])->name('gallery.create');
    Route::post('store', [mediaController::class, 'store'])->name('gallery.store');
    Route::get('{id}', [mediaController::class, 'show'])->name('gallery.show');
});

Route::resource('/about',AboutController::class);

Route::resource('comments', CommentController::class);
Route::get('register', [UserController::class, 'register'])->name('register');


Route::get('/chart', [ChartController::class, 'viewsChart'])->name('product.chart');





Route::prefix('/product')->group(function () {
    Route::get('create', [ProductController::class, 'create'])->name('product.create');
    Route::post('store', [ProductController::class, 'store'])->name('product.store');
    Route::get('list', [ProductController::class, 'list'])->name('product.list');
    Route::get('list/admin', [ProductController::class, 'listAdmin'])->name('product.list.admin');
    Route::get('update/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::get('{product}', [ProductController::class, 'product'])->name('product');
    Route::put('update/store/{product}', [ProductController::class, 'updateStore'])->name('product.update.store');
    Route::post('delete', [ProductController::class, 'deleteMultiple'])->name('product.delete.multiple')->middleware('auth');
    Route::get('delete/{product}', [ProductController::class, 'delete'])->name('product.delete')->middleware('auth');

})->middleware('auth');


Route::prefix('/image')->group(function(){
    Route::get('delete/{image}', [ProductImagesController::class, 'delete'])->name('image.delete');
    Route::get('list', [ProductImagesController::class, 'list'])->name('image.list');
});

Route::get('/dashboard', function(){
    !auth()->user()->role && abort(404);
    return view('dashboard',[
        'contacts' => Contact::all(),
        'users' => User::all()->count(),
        'orders' => Order::all(),
        'new_orders' => Order::where('status', null)->get(),
        'media' => Media::all(),
        'categories' => Category::all(),
        'users' => User::query()->count(),
    ]);


})->name('dashboard')->middleware('auth');





Route::prefix('/contact')->group(function(){
    Route::get('', [ContactController::class, 'create'])->name('contact.create');
    Route::get('list', [ContactController::class, 'list'])->name('contact.list')->middleware('auth');

    Route::post('store', [ContactController::class, 'store'])->name('contact.store')->middleware('auth');
    Route::get('show/{contact}', [ContactController::class, 'show'])->name('contact.show');
});



Route::prefix('/user')->group(function(){
    Route::get('list', [UserController::class, 'list'])->name('user.list')->middleware('auth');
    Route::post('store', [UserController::class, 'store'])->name('store_user');
    Route::get('delete/{user}', [UserController::class, 'delete'])->name('user.delete')->middleware('auth');
    Route::get('{user}', [UserController::class, 'show'])->name('user.show')->middleware('auth');
    Route::get('update/{user}', [UserController::class, 'update'])->name('user.update')->middleware('auth');
    Route::put('update/store/{user}', [UserController::class, 'updateStore'])->name('user.update.store')->middleware('auth');
});



Route::prefix('/category')->group(function(){
    Route::get('create', [mediaController::class, 'create'])->name('category.create')->middleware('auth');
    Route::get('list', [CategoryController::class, 'list'])->name('category.list');
    Route::get('{category}', [CategoryController::class, 'category'])->name('category');
    Route::get('list/admin', [CategoryController::class, 'listAdmin'])->name('category.list.admin')->middleware('auth');
    Route::post('store', [mediaController::class, 'store'])->name('category.store')->middleware('auth');
    Route::get('update/{category}', [CategoryController::class, 'update'])->name('category.update')->middleware('auth');
    Route::post('update/store{category}', [CategoryController::class, 'updateStore'])->name('category.update.store')->middleware('auth');
    Route::get('delete/{category}', [CategoryController::class, 'delete'])->name('category.delete')->middleware('auth');
    Route::post('delete', [CategoryController::class, 'deleteMultiple'])->name('category.delete.multiple')->middleware('auth');
});


Route::prefix('/cart')->group(function(){
    Route::get('', [CartController::class, 'list'])->name('cart.list')->middleware('auth');
    Route::post('create', [CartDetailController::class, 'create'])->name('cart.create')->middleware('auth');
    Route::get('delete/{cartDetail}', [CartController::class, 'delete'])->name('cart.delete')->middleware('auth');
});



Route::prefix('/order')->group(function(){
    Route::get('create', [OrderController::class, 'create'])->name('order.create');
    Route::post('pay-now', [OrderController::class, 'payNow'])->name('order.pay');
    Route::post('store', [OrderController::class, 'store'])->name('order.store');
    Route::get('list', [OrderController::class, 'list'])->name('order.list')->middleware('auth');
    Route::get('valid/{order}', [OrderController::class, 'valid'])->name('order.valid')->middleware('auth');
    Route::get('cancel/{order}', [OrderController::class, 'cancel'])->name('order.cancel')->middleware('auth');
    Route::get('{order}', [OrderController::class, 'show'])->name('order.show');
    Route::get('delete/{order}', [OrderController::class, 'delete'])->name('order.delete');
    Route::post('add/{order}/{product}', [OrderController::class, 'orderItem'])->name('order.add');
});



Route::prefix('login')->group(function(){
    Route::get('google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('google/callback', [LoginController::class, 'handleGoogleCallback']);
    Route::get('', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'loginStore'])->name('login.store');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

});





