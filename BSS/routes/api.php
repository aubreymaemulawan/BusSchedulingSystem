<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BusController;
use App\Http\Controllers\BustypeController;
use App\Http\Controllers\BusstatusController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DaccountController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\DispatcherController;
use App\Http\Controllers\FareController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ScheduleTransactionController;
use App\Http\Controllers\StatusTripController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Bus
Route::controller(BusController::class)->group(function () {
    Route::match(['get','post',], 'bus/list', 'list');
    Route::match(['get','post',], 'bus/items', 'items');
    Route::match(['get','post',], 'bus/create', 'create');
    Route::match(['get','post',], 'bus/update', 'update');
    Route::match(['get','post',], 'bus/delete', 'delete');
});

//Bustype
Route::controller(BustypeController::class)->group(function () {
    Route::match(['get','post',], 'bustype/list', 'list');
    Route::match(['get','post',], 'bustype/items', 'items');
    Route::match(['get','post',], 'bustype/create', 'create');
    Route::match(['get','post',], 'bustype/update', 'update');
    Route::match(['get','post',], 'bustype/delete', 'delete');
});

//Busstatus
Route::controller(BusstatusController::class)->group(function () {
    Route::match(['get','post',], 'busstatus/list', 'list');
    Route::match(['get','post',], 'busstatus/items', 'items');
    Route::match(['get','post',], 'busstatus/create', 'create');
    Route::match(['get','post',], 'busstatus/update', 'update');
    Route::match(['get','post',], 'busstatus/delete', 'delete');
});

//Company
Route::controller(CompanyController::class)->group(function () {
    Route::match(['get','post',], 'company/list', 'list');
    Route::match(['get','post',], 'company/items', 'items');
    Route::match(['get','post',], 'company/create', 'create');
    Route::match(['get','post',], 'company/update', 'update');
    Route::match(['get','post',], 'company/delete', 'delete');
});

//Daccount
Route::controller(DaccountController::class)->group(function () {
    Route::match(['get','post',], 'daccount/list', 'list');
    Route::match(['get','post',], 'daccount/items', 'items');
    Route::match(['get','post',], 'daccount/create', 'create');
    Route::match(['get','post',], 'daccount/update', 'update');
    Route::match(['get','post',], 'daccount/delete', 'delete');
});

//Discount
Route::controller(DiscountController::class)->group(function () {
    Route::match(['get','post',], 'discount/list', 'list');
    Route::match(['get','post',], 'discount/items', 'items');
    Route::match(['get','post',], 'discount/create', 'create');
    Route::match(['get','post',], 'discount/update', 'update');
    Route::match(['get','post',], 'discount/delete', 'delete');
});

//Dispatcher
Route::controller(DispatcherController::class)->group(function () {
    Route::match(['get','post',], 'dispatcher/list', 'list');
    Route::match(['get','post',], 'dispatcher/items', 'items');
    Route::match(['get','post',], 'dispatcher/create', 'create');
    Route::match(['get','post',], 'dispatcher/update', 'update');
    Route::match(['get','post',], 'dispatcher/delete', 'delete');
});

//Fare
Route::controller(FareController::class)->group(function () {
    Route::match(['get','post',], 'fare/list', 'list');
    Route::match(['get','post',], 'fare/items', 'items');
    Route::match(['get','post',], 'fare/create', 'create');
    Route::match(['get','post',], 'fare/update', 'update');
    Route::match(['get','post',], 'fare/delete', 'delete');
});

//Location
Route::controller(LocationController::class)->group(function () {
    Route::match(['get','post',], 'location/list', 'list');
    Route::match(['get','post',], 'location/items', 'items');
    Route::match(['get','post',], 'location/create', 'create');
    Route::match(['get','post',], 'location/update', 'update');
    Route::match(['get','post',], 'location/delete', 'delete');
});

//Operator
Route::controller(OperatorController::class)->group(function () {
    Route::match(['get','post',], 'operator/list', 'list');
    Route::match(['get','post',], 'operator/items', 'items');
    Route::match(['get','post',], 'operator/create', 'create');
    Route::match(['get','post',], 'operator/update', 'update');
    Route::match(['get','post',], 'operator/delete', 'delete');
});

//Route
Route::controller(RouteController::class)->group(function () {
    Route::match(['get','post',], 'route/list', 'list');
    Route::match(['get','post',], 'route/items', 'items');
    Route::match(['get','post',], 'route/create', 'create');
    Route::match(['get','post',], 'route/update', 'update');
    Route::match(['get','post',], 'route/delete', 'delete');
});

//Schedule
Route::controller(ScheduleController::class)->group(function () {
    Route::match(['get','post',], 'schedule/list', 'list');
    Route::match(['get','post',], 'schedule/items', 'items');
    Route::match(['get','post',], 'schedule/create', 'create');
    Route::match(['get','post',], 'schedule/update', 'update');
    Route::match(['get','post',], 'schedule/delete', 'delete');
});


//Status
Route::controller(StatusController::class)->group(function () {
    Route::match(['get','post',], 'status/list', 'list');
    Route::match(['get','post',], 'status/items', 'items');
    Route::match(['get','post',], 'status/create', 'create');
    Route::match(['get','post',], 'status/update', 'update');
    Route::match(['get','post',], 'status/delete', 'delete');
});


//Transaction
Route::controller(TransactionController::class)->group(function () {
    Route::match(['get','post',], 'transaction/list', 'list');
    Route::match(['get','post',], 'transaction/items', 'items');
    Route::match(['get','post',], 'transaction/create', 'create');
    Route::match(['get','post',], 'transaction/update', 'update');
    Route::match(['get','post',], 'transaction/delete', 'delete');
});


//Trip
Route::controller(TripController::class)->group(function () {
    Route::match(['get','post',], 'trip/list', 'list');
    Route::match(['get','post',], 'trip/items', 'items');
    Route::match(['get','post',], 'trip/create', 'create');
    Route::match(['get','post',], 'trip/update', 'update');
    Route::match(['get','post',], 'trip/delete', 'delete');
});

//User
Route::controller(UserController::class)->group(function () {
    Route::match(['get','post',], 'user/list', 'list');
    Route::match(['get','post',], 'user/items', 'items');
    Route::match(['get','post',], 'user/create', 'create');
    Route::match(['get','post',], 'user/update', 'update');
    Route::match(['get','post',], 'user/delete', 'delete');
});


//ScheduleTransaction
Route::controller(ScheduleTransactionController::class)->group(function () {
    Route::match(['get','post',], 'schedule_transaction/list', 'list');
    Route::match(['get','post',], 'schedule_transaction/items', 'items');
    Route::match(['get','post',], 'schedule_transaction/create', 'create');
    Route::match(['get','post',], 'schedule_transaction/update', 'update');
    Route::match(['get','post',], 'schedule_transaction/delete', 'delete');
});

//StatusTrip
Route::controller(StatusTripController::class)->group(function () {
    Route::match(['get','post',], 'status_trip/list','list');
    Route::match(['get','post',], 'status_trip/items','items');
    Route::match(['get','post',], 'status_trip/create','create');
    Route::match(['get','post',], 'status_trip/update','update');
    Route::match(['get','post',], 'status_trip/delete','delete');
});

