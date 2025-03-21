<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\http\Controllers\CheckContoller;
use App\Http\Controllers\CommentController;
use App\http\Controllers\FaqContoller;
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

Route::get('',[HomeController::class,'index'])
    ->name('page.home');

Route::get('page/blog', [BlogController::class,'blogIndex'])
    ->name('page.blog');

Route::get('page/blog/detailes', [BlogController::class,'blogDetailes'])
    ->name('blog.detailes');

Route::get('shop/index', [ShopController::class, 'shopIndex'])
    ->name('shop.index');

Route::get('shop/cart', [ShopController::class,'shopCart'])
    ->name('shop.cart');

Route::get('login', [AuthController::class, 'login'])
    ->name('login');

Route::get('register', [AuthController::class,'register'])
    ->name('register');

Route::get('page/checkout', [CheckContoller::class,'checkout'])
    ->name('page.checkout');

Route::get('page/faq', [FaqContoller::class, 'faq'])
    ->name('page.faq');

Route::get('contac/index', [ContactController::class,'contactIndex'])
    ->name('page.contact');

Route::get('product/show/{id}', [ShopController::class,'productShow'])
    ->name('product.show');

Route::get('shop/tags/{id}', [ShopController::class,'shopTags'])
    ->name('shop.tags');

Route::post('product/comment', [CommentController::class, 'comment'])
    ->name('product.comment');

Route::get('shop/category/{id}', [ShopController::class, 'ShopCategory'])
    ->name('shop.category');