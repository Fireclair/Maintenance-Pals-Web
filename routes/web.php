<?php

use App\Http\Controllers\CashierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ReportController;

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
Route::get('/report', function () {
    return view('Manage_sales.reportSales');
});
Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('Mainpage');
    })->name('dashboard');
});

Route::get('/Home', function () {    
return view('Mainpage');
});

//<!-- Start Vendor Routing -->
Route::get
('/add', function () {
    return view('Manage_Vendor.Admin_addvendorTable');
});

Route::post('/add/create','App\Http\Controllers\Vendor_Controller@create');

Route::get('/vendor/{id}/edit','App\Http\Controllers\Vendor_Controller@read');

Route::get('/vendor/{id}/delete/page','App\Http\Controllers\Vendor_Controller@readd');

Route::get('/vendor','App\Http\Controllers\Vendor_Controller@index');

Route::post('/vendor/{id}/update', 'App\Http\Controllers\Vendor_Controller@update');

Route::get('/vendor/{id}/delete','App\Http\Controllers\Vendor_Controller@destroy');

//<!-- End Vendor Routing -->

//<!-- Start Inventory Routing -->

Route::get('/Add', function () {
    return view('/Manage_Inventory.Admin_AddInventory');
});

Route::get('/datainventory', 'App\Http\Controllers\InventoryController@index');

Route::post('/datainventory/create', 'App\Http\Controllers\InventoryController@create');

Route::get('/datainventory/{id}/edit', 'App\Http\Controllers\InventoryController@edit');

Route::post('/datainventory/{id}/update', 'App\Http\Controllers\InventoryController@update');

Route::get('/datainventory/{id}/delete', 'App\Http\Controllers\InventoryController@delete');

//<!-- End Inventory Routing -->

Route::get('/calcu', [CashierController::class, 'index']);
Route::post('/calcu/create', [ReportController::class, 'create']);

Route::get('/sales', function () {
    return view('Manage_sales.AdminSalesMain');
});
Route::get('/edit', function () {
    return view('items.edit');
});
Route::get('/chartreport', function () {
    return view('items.sales-chart');
});
Route::get('/items/{id}/edit', 'ItemController@edit')->name('items.edit');

Route::post('/sales/create', [CashierController::class, 'create']);
Route::get('/sales/{id}/delete', [CashierController::class, 'delete']);
Route::get('/saless/{id}/delete', [CashierController::class, 'deletec']);
Route::get('/cashieropening', function () {
    return view('Manage_sales.CashierOpeningSalesReport');
});
Route::get('/cashierclosing', function () {
    return view('Manage_sales.CashierClosingSalesReport');
});

Route::post('saleClosing/create', [CashierController::class, 'createClosing']);
//  Route::get('/sales-chart', function () {
//      return view('items.sales-chart');
//  });
Route::view('items.sales-chart', 'sales-chart');
Route::get('/sales-chart', [ReportController::class, 'index'])->name('items.sales-chart');


Route::get('/cashier', function () {
    return view('Manage_sales.CashierOpeningSalesReport');
});

Route::get('/reportgraph', function () {
    return view('Manage_sales.AdminMartReportMain');
});
Route::get('/paymentvendors', function () {
    return view('Manage_sales.paymentVendors');
});
Route::get('/paymentmain', function () {
    return view('Manage_sales.paymentmain');
});
Route::get('/paymentcashier', function () {
    return view('Manage_sales.paymentCashier');
});
Route::get('/maincashier', function () {
    return view('Manage_sales.CashierMain');
});

