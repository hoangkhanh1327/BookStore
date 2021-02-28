<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('tim-kiem', [BookController::class, 'search'])->name('search');
Route::get('/sach/chi-tiet/{book_id}', [BookController::class, 'index'])->name('detail');

Route::get('/chi-tiet-don-hang/{order_id}', [AdminController::class, 'get_order_detail'])->name('order_detail');

Route::get('/theo-doi-don-hang', [HomeController::class, 'follow_order'])->name('follow_order')->middleware('auth');
Route::get('/xem-thong-tin-tai-khoan', [UserController::class, 'index'])->name('get_info')->middleware('auth');
Route::get('cap-nhat-thong-tin', [UserController::class, 'update'])->name('update_info')->middleware('auth');

Route::get('/cart/index', [CartController::class, 'index'])->name('cart_index');
Route::post('/cart/add', [CartController::class, 'add'])->name('add_cart')->middleware('auth');
Route::post('/cart/updateCart', [CartController::class, 'updateCart'])->name('cart.updateCart');
Route::resource('cart', CartController::class);

Route::resource('order', OrderController::class)->middleware('auth');

Route::get('xem-danh-sach-tai-khoan', [AdminController::class, 'get_accounts'])->name('account_list');
Route::get('xem-danh-sach-the-loai', [AdminController::class, 'get_categories'])->name('category_list');
Route::get('xem-danh-sach-tac-gia', [AdminController::class, 'get_authors'])->name('author_list');
Route::get('xem-danh-sach-sach', [AdminController::class, 'get_books'])->name('book_list');
Route::get('xem-danh-sach-don-hang', [AdminController::class, 'get_orders'])->name('order_list');
Auth::routes();
