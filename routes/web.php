<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|https://laravel.com/docs/8.x/routing
*/
//poner nombre a la ruta y usar tinket mostrar url
//route('main');
Route::get('/', function () {
    return view('welcome');
})->name('main');
// Route::get('/main/ruta/parametros', function () {
//     return view('welcome');
// })->name('main');

//crear rutas ejemplo despues de enseñar hacer rutas
Route::get('products',[ProductController::class,'index'])->name('product.index');
// Route::get('products', function (){
//     return 'Esta es la lista de todos las products';
// })->name('product.index');

Route::get('products/{product}', function ($product){
    return "Mostrar la product {$product}";
})->name('products.show');
Route::get('products/{product}',[ProductController::class,'show'])->name('product.show');
// Route::get('products/create', function (){
//     return "Crear una product";
// })->name('products.create');
Route::post('products', function (){
   //
})->name('products.store');
Route::get('products/{product}/edit', function ($product){
    return "Editar {$product} esta product";
})->name('products.edit');

Route::match(['put','patch'],'products/{product}', function ($product){
    //
 })->name('products.update');
 Route::delete('products/{product}', function ($product){
  //
})->name('products.destroy');
