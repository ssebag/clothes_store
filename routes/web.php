<?php
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\producttController;
use App\Http\Controllers\carttController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvoiceController;
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

Route::get('test',function(){
    dd('im on line');
});


Route::get('/',[producttController::class,'pre_index'])->name('/');
Route::get('/products',[producttController::class,'index'])->name('products.index');
Route::get('/products/create',[producttController::class,'create'])->name('products.create');
Route::post('/products/create',[producttController::class,'store'])->name('products.store');
Route::get('/products/adddetails/{id}',[producttController::class,'store22']);
Route::post('/products/adddetails/{id}',[producttController::class,'store2'])->name('productt.add');
Route::get('/buy/{id}',[producttController::class,'buyView'])->name('products.buy');
Route::post('/buy/{id}',[producttController::class,'buyPost'])->name('products.buy.save');

Route::get('/products/sort/{id}',[producttController::class,'show2'])->name('page.sort');
Route::get('/search',[producttController::class,'search'])->name('page.search');
Route::get('/search/invoice',[InvoiceController::class,'search'])->name('invoice.search');

Route::get('/products/{id}',[producttController::class,'show'])->name('products.show');


Route::resource('carts', carttController::class);
Route::post('carts/add{id}', [carttController::class,'add']);
// Route::get('/generate',function(){
//     $pdf = Pdf::loadView('hello');
//     return $pdf->download('invoice.pdf');
// });

 /* for admin */
 Route::get('/users',[UserController::class,'index']);
 Route::get('/user/{id}',[UserController::class,'show'])->name('user.show');
 Route::get('/users/update/{id}',[UserController::class,'update'])->name('users.update');
 Route::get('/users/edit/{id}',[UserController::class,'edit'])->name('users.edit');
 Route::put('/users/edit/{id}',[UserController::class,'update2'])->name('users.update2');
 Route::get('/details/edit/{id}',[ProducttController::class,'edit3'])->name('products.edit.detail');
 Route::put('/details/edit/{id}',[ProducttController::class,'update3'])->name('products.update.detail');
 Route::delete('/details/{id}',[ProducttController::class,'destroy'])->name('products.delete.detail');
 Route::get('/details/edit/{id}',[ProducttController::class,'edit3'])->name('products.edit.detail');
 Route::put('/details/edit/{id}',[ProducttController::class,'update3'])->name('products.update.detail');
 Route::get('/invoice',[InvoiceController::class,'index'])->name('invoice.index');
Route::post('/res',[InvoiceController::class,'result'])->name('invoice.res');
Route::get('/res',[InvoiceController::class,'result'])->name('invoice.res');

 Route::delete('/users/{id}',[UserController::class,'destroy'])->name('users.destroy');

 Route::get('/products/edit/{id}',[producttController::class,'edit'])->name('products.edit');
 Route::put('/products/edit/{id}',[producttController::class,'update'])->name('products.update');

Auth::routes();

// Route::get('/', [producttController::class, 'index'])->name('home');
