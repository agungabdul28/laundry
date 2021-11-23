<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\CostumersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\LoginController;

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

// Route::get('/products', function () {
//     return view('product.index');
// });

Route::get('/', [LoginController::class,'index'])->name('login');
Route::post('/postLogin', [LoginController::class,'postLogin'])->name('postLogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');




Route::group(['middleware' => ['auth']], function() {

    route::get('/products', [ProductsController::class, 'index'])->name('products');
    route::get('/create-products', [ProductsController::class, 'create'])->name('create-products');
    route::post('/products', [ProductsController::class, 'store']);
    route::delete('/products{products}', [ProductsController::class, 'destroy']);
    route::get('/edit-products{products}', [ProductsController::class, 'edit']);
    route::patch('/produtcs{products}', [ProductsController::class, 'update']);
    
    
    route::get('/costumers', [CostumersController::class,'index']);
    route::get('/create-costumers', [CostumersController::class,'create']);
    route::post('/costumers', [CostumersController::class,'store']);
    route::delete('/costumers{costumers}', [CostumersController::class,'destroy']);
    route::get('/costumers{costumers}', [CostumersController::class,'edit']);
    route::patch('/costumers{costumers}', [CostumersController::class,'update']);


    route::get('/karyawan', [KaryawanController::class, 'index']);
    route::get('/create-karyawan', [KaryawanController::class, 'create']);
    route::post('/', [KaryawanController::class, 'store']);
    route::delete('/{karyawans}', [KaryawanController::class, 'destroy']);
    route::get('/{karyawans}', [KaryawanController::class, 'edit']);
    route::patch('/{karyawans}', [KaryawanController::class, 'update']);

    
    

});

