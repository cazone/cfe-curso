<?php

use Illuminate\Support\Facades\Route;

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

//crear rutas ejemplo
Route::get('zonas', function (){
    return 'Esta es la lista de todas las zonas';
})->name('zonas.index');

Route::get('zonas/{zona}', function ($zona){
    return "Mostrar la zona {$zona}";
})->name('zonas.show');
Route::get('zonas/create', function (){
    return "Crear una zona";
})->name('zonas.show');
Route::post('zonas', function (){
   //
})->name('zonas.store');
Route::get('zonas/{zona}/edit', function ($zona){
    return "Editar {$zona} esta zona";
})->name('zonas.edit');

Route::match(['put','patch'],'zonas/{zona}', function ($zona){
    //
 })->name('zonas.update');
 Route::delete('zonas/{zona}', function ($zona){
  //
})->name('zonas.destroy');
