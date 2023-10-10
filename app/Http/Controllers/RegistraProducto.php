<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Producto;

class RegistraProducto extends Controller
{
  public function consultaProducto(Request $request)
  {
    $codi_prod = $request->input('codi_prod');
   
    $productos = Producto::where('codi_prod', $codi_prod)->get();
    return $productos;
  }
  public function registraProducto(Request $request)
  {
    
    $validaProducto=$this->consultaProducto($request->codi_prod);
    
    if(count($validaProducto)>0)
    {
      $data=['menssage'=>'Error Código del producto ya existe','code'=>'101'];
      return view('formulario/registrar')->with('status',$data);
    }
    
    $producto = new Producto;
    $producto->codi_prod = $request->codi_prod;
    $producto->nomb_prod = $request->nomb_prod;
    $producto->desc_prod = $request->desc_prod;
    $producto->prec_prod = $request->prec_prod;
    $producto->save();
   
    $data=['menssage'=>'Registro exitoso','code'=>'200'];
    return view('formulario/registrar')->with('status', $data);

    
  }
}
