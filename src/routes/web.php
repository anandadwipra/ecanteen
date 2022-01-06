<?php

use App\Http\Controllers\CanteenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WalletController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('panel')->middleware('auth')->name('panel.')->group(function(){
    
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    // User Manager
    Route::get('Userman',[DashboardController::class,'userman'])->name('userman');
    Route::get('Userman/add',[DashboardController::class,'usermanAdd'])->name('userman.add');
    Route::post('Userman/add',[DashboardController::class,'usermanStore'])->name('userman.store');
    Route::get('Userman/topup',[DashboardController::class,'usermanTopup'])->name('userman.topup');
    Route::post('Userman/topup',[DashboardController::class,'usermanTopuppost'])->name('userman.topuppost');
    Route::get('Userman/{user}',[DashboardController::class,'usermanShow'])->name('userman.show');
    Route::patch('Userman/{user}',[DashboardController::class,'usermanUpdate'])->name('userman.update');
    Route::delete('Userman/{user}',[DashboardController::class,'usermanDestroy'])->name('userman.delete');
    // Route::get('Aktivitas',[AboutController::class,'aktivitas'])->name('aktv');
    // Route::get('Prestasi',[AboutController::class,'prestasi'])->name('prestasi');
    // Wallet 
    Route::get('Wallet',[WalletController::class,'index'])->name('wallet');
    Route::get('Wallet/{user}',[WalletController::class,'setup'])->name('wallet.setup');
    // Canteen 
    Route::get('Canteen',[CanteenController::class,'index'])->name('canteen');
    Route::post('Canteen/{user}',[CanteenController::class,'setup'])->name('canteen.setup');
    Route::post('Canteen/add/{user}',[CanteenController::class,'store'])->name('canteen.add');
    Route::get('Canteen/explore',[CanteenController::class,'explore'])->name('canteen.explore');
    //    Route::get('Canteen/orders',[CanteenController::class,'order'])->name('canteen.order');
    Route::get('Canteen/{canteen}',[CanteenController::class,'show'])->name('canteen.show');
    Route::post('Canteen',[CanteenController::class,'beli'])->name('canteen.beli');


//    Route::get('Canteen/api/{rfid:rfid}',[CanteenController::class,'pay']);

});
