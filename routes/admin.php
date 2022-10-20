<?php
/** rutas para el administrador y el supervisor */

use App\Http\Controllers\Admin\ClienteAdminController;
use App\Http\Controllers\Admin\ImportExcelController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\ResEncuestaController;
use Illuminate\Support\Facades\Route;

Route::resource('usuario', UserController::class)->except('show')->names('admin.user');
Route::post('usuario/habilitar/{user}', [UserController::class, 'habilitarUser'])->name('admin.user.habilitar');
/** rutas para administrar clientes */
Route::prefix('admin')->name('admin.cliente.')->group(function(){
    Route::get('clientes', [ClienteAdminController::class, 'index'])->name('index');
    Route::get('ver/cliente/{cliente}', [ClienteAdminController::class, 'verCliente'])->name('ver.cliente');
});

/** importar archivos excels */

Route::prefix('admin')->name('admin.excel.')->group(function(){
    Route::get('excels', [ImportExcelController::class, 'index'])->name('index');
    Route::get('excels/subir/{encuesta_id}', [ImportExcelController::class, 'subirExcel'])->name('subir.excel');
    Route::post('excels/validar', [ImportExcelController::class, 'validar'])->name('validar');

});

Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('encuesta',EncuestaController::class)->parameters(['encuesta' => 'encuesta']);
});

Route::prefix('admin')->name('admin.encuesta.')->group(function(){
    Route::get('encuesta/respuesta/{encuesta_id}',[ResEncuestaController::class, 'index'])->name('respuesta.index');
    Route::get('encuesta/respuesta/global/edit/{encuesta}',[ResEncuestaController::class, 'globalEdit'])->name('global.edit');
    Route::get('encuesta/respuesta/global/zonas/homogenias/{encuesta}',[ResEncuestaController::class, 'zonaHomogeniaShow'])->name('global.zonah.show');
    Route::get('encuesta/respuesta/{encuesta_id}/show/{respuesta_id}',[ResEncuestaController::class, 'show'])->name('respuesta.show');
    Route::get('encuesta/respuesta/{encuesta_id}/editar/{respuesta_id}',[ResEncuestaController::class, 'editar'])->name('respuesta.editar');
    Route::get('enceusta/respuesta/imagen/download/{resEncuestaId}',[ResEncuestaController::class, 'descargarImagen'])->name('descargar.img');
    Route::get('encuesta/respuesta/print/{respuesta}',[ResEncuestaController::class, 'imprimirShow'])->name('respuesta.print.show');
});
