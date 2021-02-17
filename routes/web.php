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
|
*/

Route::get('/', 'App\Http\Controllers\ModuleController@index');
Route::get('register', function(){
    return view('admins.create');
});

Route::resource('modules', 'App\Http\Controllers\ModuleController');
Route::resource('users', 'App\Http\Controllers\UserController');

Route::group(['middleware'=>'modules:messages'], function(){
    Route::get('messages', function(){
        return 'Si llegaste hasta aquí, tus mensajes están habilitados';
    });
});

Route::get('modulo-deshabilitado', function(){
    return view('disabled_module');
})->name('modules.disabled');