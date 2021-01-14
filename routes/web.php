<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Request;
//use App\Models\prodect;
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
Route::get('/web', function () {
    return view('project.home1');
})->name('home1');

Route::get('/', function () {
    return view('project.index');
})->name('home');
Route::get('/customer',[CustomerController::class ,'show'])->name('show');
 Route::get('/customer_details/{id}',[CustomerController::class, 'view'])->name('customer_page');
Route::post('/dbupdation',[CustomerController::class, 'update'])->name('dbupdation');
Route::get('/transactions',[CustomerController::class,'showtransaction'])->name('showtransactions');
Route::post('/All_transactions',[CustomerController::class ,'tshow'])->name('transaction_all');

Route::get('/#services',function(){
    
    return view('project.index');
})->name('services');
Auth::routes();
