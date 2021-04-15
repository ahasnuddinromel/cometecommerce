<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;






// Admin template load
Route::group(['namespace' => 'App\Http\Controllers'], function(){
    Route::get('/', 'FrontPageController@homePage') -> name('main.page');    
    Route::get('single/{id}', 'FrontPageController@SingleProduct') -> name('single.page');           
    Route::get('admin/login', 'AdminController@showAdminLoginForm') -> name('admin.login');
    Route::resource('customer' , 'CustomerController');
     
});

//Route::get('admin/register', [App\Http\Controllers\AdminController::class, 'showAdminRegisterForm']) -> name('admin.register');
Route::post('admin/login', [App\Http\Controllers\Auth\LoginController::class, 'login']) -> name('admin.login');
Route::post('admin/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']) -> name('admin.logout');
//Route::post('admin/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']) -> name('admin.register');

Route::group(['middleware' => 'auth'], function(){  
    Route::get('admin/dashboard', [App\Http\Controllers\AdminController::class, 'showAdminDashboard']) -> name('admin.dashboard');
    Route::get('admin/order', [App\Http\Controllers\AdminController::class, 'ShowOrder'])->name('order.show');
    Route::resource('blog' , 'App\Http\Controllers\BlogController');
    Route::resource('company' , 'App\Http\Controllers\CompanyInfoController');
    Route::resource('social' , 'App\Http\Controllers\SocialController');
    Route::resource('slider' , 'App\Http\Controllers\SliderController');
    Route::resource('product/cata' , 'App\Http\Controllers\ProductCatagoryController');
    Route::resource('subcatagory' , 'App\Http\Controllers\SubCatagoryController');
    Route::resource('brand' , 'App\Http\Controllers\BrandController');
    Route::resource('product' , 'App\Http\Controllers\ProductController');
 

});


//serch Menu And Side Bar
Route::group(['namespace' => 'App\Http\Controllers'], function(){
    Route::get('fashion/{id}', 'ShowCataPageController@FashionPage') -> name('fashion.page');    
    Route::get('branding/{id}', 'ShowCataPageController@BrandPage') -> name('branding.page');    
    Route::get('subcata/{id}', 'ShowCataPageController@SubCataPage') -> name('subcata.page');    
  
     
});

