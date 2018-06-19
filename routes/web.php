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
$adminPanel = config("global.admin_extension");
$adminAs = "admin::";
$reuseNameArray = [
    'index' => 'index',
    'create' => 'create',
    'store' => 'store',
    'show' => 'show',
    'edit' => 'edit',
    'update' => 'update',
    'destroy' => 'destroy'
];


Route::get('/', function () {
    return view('welcome');
});


//
// <editor-fold defaultstate="collapsed" desc="Admin (Unauthenticated)">
Route::prefix($adminPanel)->name($adminAs)->group(function () {
    //Login Routes...
    Route::get('/dashboard', 'Admin\DashboardController@index');
});
// </editor-fold>
//