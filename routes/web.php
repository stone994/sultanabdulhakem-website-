<?php
use App\Http\Controllers\admin\AdminLoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\HomeController;
//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/education',[HomeController::class, 'education']);
Route::get('/wazaif',[HomeController::class, 'wazaif']);
Route::get('/contact',[HomeController::class, 'contact']);

Route::group(['prefix'=>'admin'],function(){
    Route::group(['middleware'=>'admin.guest'],function(){

Route::get('/login',[AdminLoginController::class, 'index'])->name('admin.login');

Route::post('/login',[AdminLoginController::class, 'authenticate'])->name('admin.auth');
    });
     Route::group(['middleware'=>'admin.auth'],function(){
        //Route::view('/dashboard','admin.dashboard')->name('admin.dashboard');
        Route::get('/dashboard',[DashboardController::class, 'index'])->name('admin.dashboard');

        Route::get('/logout',[AdminLoginController::class, 'logout'])->name('admin.logout');
    });
});