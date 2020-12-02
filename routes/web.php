<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
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

Route::get('/', function () {
    $name = request('name');

    return view('welcome', [
        'name' => $name
    ]);
});


Route::resource('products', ProductController::class);
Route::resource('roles', RoleController::class);
Route::resource('companies', CompanyController::class);
Route::resource('invoices', InvoiceController::class);
Route::resource('loans', LoanController::class);
Route::resource('categories', CategoryController::class);
Route::resource('brands', BrandController::class);
Route::resource('users', UserController::class);
