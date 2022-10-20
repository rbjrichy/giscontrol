<?php

use App\Http\Controllers\Admin\BackupController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\MensajesContactoController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Redirect;
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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('panel', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('panel.index');

/*** rutas para actualizar datos de perfil de usuario */
Route::get('perfil', [UserController::class, 'profile'])->middleware(['auth','verified'])->name('user.profile');
Route::post('avatar/update', [UserController::class, 'avatarUpdate'])->middleware(['auth','verified'])->name('avatar.update');
Route::post('password/update', [UserController::class, 'updatePassword'])->middleware(['auth','verified'])->name('mypassword.update');

/***
 * backups routes
 */
Route::group([
    'middleware' => ['auth', 'web'],
], function () {
    Route::get('backup', [BackupController::class, 'index'])->name('admin.backup.index');
    Route::put('backup/create', [BackupController::class, 'create'])->name('admin.backup.create');
    Route::get('backup/download/{file_name?}', [BackupController::class, 'download'])->name('admin.backup.download');
    Route::delete('backup/delete', [BackupController::class, 'delete'])->name('admin.backup.delete');
});
