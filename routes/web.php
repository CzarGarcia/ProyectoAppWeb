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

Route::get('/', function () {
    return redirect()->route('home');
});

Route::view('/registrarticket','RegistrarTicket/index')->name('registrar');
Route::view('/inicio','inicio/index')->name('home');

Route::view('/sesion', 'sesion/index');
Route::view('/solicitud', 'crudSolicitudTicket/index');
Route::view('/solicitarTicket', 'crudSolicitudTicket/index'); 