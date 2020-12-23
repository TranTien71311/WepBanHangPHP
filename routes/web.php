<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SupplierController;
use App\Http\Controllers\admin\HoaDonNhapController;
use App\Http\Controllers\admin\DiscountController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\ShopController;
use App\Http\Controllers\client\CategoryClientController;

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

Route::get('admin/login',[LoginController::class,'getLogin'])->name('get-admin-Login');
Route::post('admin/login',[LoginController::class,'postLogin'])->name('post-admin-Login');
Route::get('admin/logout',[LoginController::class,'getLogout'])->name('get-admin-Logout');
Route::group(['middleware'=>'CheckAdminLogin','prefix'=>'admin'],function(){
     
    Route::get('/', function () {
        return view('admin.layoutadmin');
    });

});
Route::group(['middleware'=>'CheckAdminLogin','prefix'=>'admin/user'],function(){
    Route::get('/',[UserController::class,'index'])->name('index-user');
    Route::get('add',[UserController::class,'getadd'])->name('getadd-user');
    Route::post('add',[UserController::class,'postadd'])->name('postadd-user');
    Route::get('Active/{id}',[UserController::class,'Active'])->name('Active-user');
    Route::get('Unactive/{id}',[UserController::class,'UnActive'])->name('UnActive-user');
    Route::get('delete/{id}',[UserController::class,'delete'])->name('delete-user');
    Route::get('edit/{id}',[UserController::class,'getedit'])->name('getedit-user');
    Route::post('edit/{id}',[UserController::class,'postedit'])->name('postedit-user');
});
Route::group(['middleware'=>'CheckAdminLogin','prefix'=>'admin/category'],function(){
    Route::get('/',[CategoryController::class,'index'])->name('index-category');
    Route::get('add',[CategoryController::class,'getadd'])->name('getadd-category');
    Route::post('add',[CategoryController::class,'postadd'])->name('postadd-category');
    Route::get('delete/{id}',[CategoryController::class,'delete'])->name('delete-category');
    Route::get('edit/{id}',[CategoryController::class,'getedit'])->name('getedit-category');
    Route::post('edit/{id}',[CategoryController::class,'postedit'])->name('postedit-category');
    Route::get('Active/{id}',[CategoryController::class,'Active'])->name('Active-category');
    Route::get('Unactive/{id}',[CategoryController::class,'UnActive'])->name('UnActive-category');
});
Route::group(['middleware'=>'CheckAdminLogin','prefix'=>'admin/product'],function(){
    Route::get('/',[ProductController::class,'index'])->name('index-product');
    Route::get('add',[ProductController::class,'getadd'])->name('getadd-product');
    Route::post('add',[ProductController::class,'postadd'])->name('postadd-product');
    Route::get('delete/{id}',[ProductController::class,'delete'])->name('delete-product');
    Route::get('edit/{id}',[ProductController::class,'getedit'])->name('getedit-product');
    Route::post('edit/{id}',[ProductController::class,'postedit'])->name('postedit-product');
    Route::get('Active/{id}',[ProductController::class,'Active'])->name('Active-product');
    Route::get('Unactive/{id}',[ProductController::class,'UnActive'])->name('UnActive-product');
    Route::get('detail/{id}',[ProductController::class,'detail'])->name('detail-product');
});
Route::group(['middleware'=>'CheckAdminLogin','prefix'=>'admin/supplier'],function(){
    Route::get('/',[SupplierController::class,'index'])->name('index-supplier');
    Route::get('add',[SupplierController::class,'getadd'])->name('getadd-supplier');
    Route::post('add',[SupplierController::class,'postadd'])->name('postadd-supplier');
    Route::get('delete/{id}',[SupplierController::class,'delete'])->name('delete-supplier');
    Route::get('edit/{id}',[SupplierController::class,'getedit'])->name('getedit-supplier');
    Route::post('edit/{id}',[SupplierController::class,'postedit'])->name('postedit-supplier');
    Route::get('Active/{id}',[SupplierController::class,'Active'])->name('Active-supplier');
    Route::get('Unactive/{id}',[SupplierController::class,'UnActive'])->name('UnActive-supplier');
});
Route::group(['middleware'=>'CheckAdminLogin','prefix'=>'admin/nhaphang'],function(){  
    Route::get('/',[HoaDonNhapController::class,'index'])->name('index-nhaphang');
    Route::get('add',[HoaDonNhapController::class,'getadd'])->name('getadd-nhaphang');
    Route::post('add',[HoaDonNhapController::class,'postadd'])->name('postadd-nhaphang');
    Route::get('indexct/{id}',[HoaDonNhapController::class,'indexct'])->name('indexct-nhaphang');
    
    Route::post('addct',[HoaDonNhapController::class,'postaddct'])->name('postaddct-nhaphang');
    Route::get('delete/{id}',[HoaDonNhapController::class,'delete'])->name('delete-nhaphang');
    Route::get('xacnhan/{id}',[HoaDonNhapController::class,'xacnhan'])->name('xacnhan-nhaphang');
    Route::get('huy/{id}',[HoaDonNhapController::class,'huy'])->name('huy-nhaphang');
    Route::get('detail/{id}',[HoaDonNhapController::class,'detail'])->name('detail-nhaphang');

});
Route::group(['middleware'=>'CheckAdminLogin','prefix'=>'admin/discount'],function(){  
    Route::get('/',[DiscountController::class,'index'])->name('index-discount');
    Route::get('add',[DiscountController::class,'getadd'])->name('getadd-discount');
    Route::post('add',[DiscountController::class,'postadd'])->name('postadd-discount');
    Route::get('delete/{id}',[DiscountController::class,'delete'])->name('delete-discount');
});
Route::group(['prefix'=>'client/Home'],function(){
    Route::get('/',[HomeController::class,'products'])->name('products-home');
    Route::get('cart',[HomeController::class,'cart'])->name('cart-home');
    Route::get('add-to-cart/{id}',[HomeController::class,'addToCart'])->name('add-to-cart');
    Route::get('category',[HomeController::class,'categorys'])->name('categorys-home');
    Route::get('category/{id}',[HomeController::class,'seachcategorys'])->name('seachcategorys-home');
    Route::get('shop',[HomeController::class,'shop'])->name('shop-home');
    Route::get('detail/{id}',[HomeController::class,'detail'])->name('detail-home');
});

