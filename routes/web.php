<?php

use App\Http\Controllers\controladorBD;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPaginas;

Route::get('/',[ControladorPaginas::class,'Fhome'])->name('NHome');
Route::get('/ingresar',[ControladorPaginas::class,'Fingresar'])->name('NIngresar');
Route::get('recuerdos/{nombre?}',[ControladorPaginas::class,'Frecuerdos'])->name('NRecuerdos');

Route::post('/guardarRecuerdos',[ControladorPaginas::class, 'procesarRecuerdos'])->name('NProcesar');


//Función Create
Route::get('/recuerdo/create',[controladorBD::class, 'create'])->name('ciber.create');
//Función de Store para guardar/insertar datos en la BD
Route::post('/recuerdo',[controladorBD::class,'store'])->name('ciber.store');

//Función index para procesar la vista de consulta
Route::get('/recuerdo',[controladorBD::class, 'index'])->name('ciber.index');

//Función Edit para mostrar un registro filtrado
Route::get('/recuerdo/{id}/edit',[controladorBD::class, 'edit'])->name('ciber.edit');

//Función update para mostrar el registro
Route::put('/recuerdo/{id}', [controladorBD::class, 'update'])->name('ciber.update');

//Función confirm para mostrar el registro a eliminar
Route::get('/recuerdo/{id}/confirm',[controladorBD::class, 'confirm'])->name('ciber.confirm');

//Función destroy para eliminar registro: 
Route::delete('/recuerdo/{id}',[controladorBD::class, 'destroy'])->name('ciber.destroy');
