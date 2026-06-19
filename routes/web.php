<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemTypeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TransactionTypeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\InventoryTransactionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\InventoryRoomController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('item-types', ItemTypeController::class);
Route::resource('items', ItemController::class);
Route::resource('buildings', BuildingController::class);
Route::resource('rooms', RoomController::class);
Route::resource('transaction-types', TransactionTypeController::class);
Route::resource('inventories', InventoryController::class);
Route::resource('inventory-transactions',InventoryTransactionController::class);
Route::resource('inventory-rooms', InventoryRoomController::class);
Route::get('/',[DashboardController::class,'index']);



Route::get('/reports', [ReportController::class,'index']);
Route::get('/reports/inventory', [ReportController::class,'inventory']);
Route::get('/reports/transactions', [ReportController::class,'transactions']);
Route::get('/reports/distribution', [ReportController::class,'distribution']);
Route::get('/reports/budget', [ReportController::class,'budget']);