<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ListaController extends Controller
{
    public function index(){

        $products = Product::all();
        
        return view('products.index', compact('products'));
    }
    public function create(){
        
    return view('products.create');
    }
    public function store(Request $request){
        
        $product= new Product();
        $product->apellido_paterno = $request->apellido_paterno;
        $product->apellido_materno =$request->apellido_materno;
        $product->nombre =$request->nombre;
        $product->fecha_de_nacimiento =$request->fecha_de_nacimiento;
        $product->sexo = $request->sexo;
        $product->save();
        return redirect()->route('products.index', $product);
    }
}
