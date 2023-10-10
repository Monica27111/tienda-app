<?php

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

Route::get('/consulta', function () {
    return view('welcome');
});


Route::get('/registro', function(){
  return view('formulario/registrar');
});
Route::post('registro','RegistraProducto@registraProducto');

//API rest para consultar los productos registrados
Route::get('/consultaProducto','RegistraProducto@consultaProducto');

Route::get('/consulta', function(){
  return view('formulario/consulta');
});


