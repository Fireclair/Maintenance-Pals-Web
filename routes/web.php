<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/Home', function () {    
return view('Mainpage');
});

Route::get
('/add', function () {
    return view('Manage_Vendor.Admin_addvendorTable');
});

Route::post('/add/create','App\Http\Controllers\Vendor_Controller@create');

Route::get('/vendor/{id}/edit','App\Http\Controllers\Vendor_Controller@read');

Route::get('/vendor/{id}/delete/page','App\Http\Controllers\Vendor_Controller@readd');

Route::get('/vendor','App\Http\Controllers\Vendor_Controller@index');

Route::get('/vendor/{id}/delete','App\Http\Controllers\Vendor_Controller@destroy');


Route::get('/Add', function () {
    return view('/Manage_Inventory.Admin_AddInventory');
});

Route::get('/datainventory', 'App\Http\Controllers\InventoryController@index');

Route::post('/datainventory/create', 'App\Http\Controllers\InventoryController@create');

Route::get('/datainventory/{id}/edit', 'App\Http\Controllers\InventoryController@edit');

Route::post('/datainventory/{id}/update', 'App\Http\Controllers\InventoryController@update');

Route::get('/datainventory/{id}/delete', 'App\Http\Controllers\InventoryController@delete');
