<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Index(){
//para mostrar herramienta dd()
        // $name = config('app.name');
        // dd($name);
        // return 'Lista de productos desde el controlador';
        return view('products.index');
    }
    public function Show(){
        return view('products.show');
    }
}
