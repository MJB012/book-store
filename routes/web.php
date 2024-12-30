<?php

use App\Http\Controllers\frontend\AddAddressController;
use App\Http\Controllers\frontend\AddressController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\CheckoutloginController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\MyaccountController;
use App\Http\Controllers\frontend\MyaddressController;
use App\Http\Controllers\frontend\MyorderController;
use App\Http\Controllers\frontend\OrderconfrmationController;
use App\Http\Controllers\frontend\OrdertrackController;
use App\Http\Controllers\frontend\RegistrationController;
use App\Http\Controllers\frontend\shop;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\frontend\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/shop',[ShopController::class,'index'])->name('shop');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/addaddress',[AddAddressController::class,'index'])->name('addaddress');
Route::get('/cart',[CartController::class,'index'])->name('cart');
Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/myaccount',[MyaccountController::class,'index'])->name('myaccount');
Route::get('/myorder',[MyorderController::class,'index'])->name('myorder');
Route::get('/address',[AddressController::class,'index'])->name('address');
Route::get('/orderconfrmation',[OrderconfrmationController::class,'index'])->name('orderconfrmation');
Route::get('/ordertrack',[OrdertrackController::class,'index'])->name('ordertrack');
Route::get('/wishlist',[WishlistController::class,'index'])->name('wishlist');
Route::get('/checkoutlogin',[CheckoutloginController::class,'index'])->name('checkoutlogin');

