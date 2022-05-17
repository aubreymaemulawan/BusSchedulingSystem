<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DispatcherController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\FareController;
use App\Http\Controllers\TransactionController;




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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/dispatch', [App\Http\Controllers\DispatchController::class, 'index'])->name('dispatch');


Route::get('/dashboard',[PageController::class,'dashboard']);
Route::get('/bus',[PageController::class,'bus']);
Route::get('/company',[PageController::class,'company']);
Route::get('/daccount',[PageController::class,'daccount']);
Route::get('/discount',[PageController::class,'discount']);
Route::get('/dispatcher',[PageController::class,'dispatcher']);
Route::get('/fare',[PageController::class,'fare']);
Route::get('/location',[PageController::class,'location']);
Route::get('/operator',[PageController::class,'operator']);
Route::get('/route',[PageController::class,'route']);
Route::get('/schedule',[PageController::class,'schedule']);
Route::get('/status',[PageController::class,'status']);
Route::get('/transaction',[PageController::class,'transaction']);
Route::get('/trip',[PageController::class,'trip']);
Route::get('/schedule_transaction',[PageController::class,'schedule_transaction']);
Route::get('/status_trip',[PageController::class,'status_trip']);
Route::get('/reportbus',[PageController::class,'reportbus']);
Route::get('/reportcompany',[PageController::class,'reportcompany']);
Route::get('/reportdispatcher',[PageController::class,'reportdispatcher']);
Route::get('/reportoperator',[PageController::class,'reportoperator']);
Route::get('/reportfare',[PageController::class,'reportfare']);
Route::get('/reportschedule',[PageController::class,'reportschedule']);
Route::get('/reporttransaction',[PageController::class,'reporttransaction']);

// Dynamic Dropdown -> schedule.blade.php
Route::get('get-bus', [ScheduleController::class, 'getBus'])->name('getBus');
Route::get('get-operator', [ScheduleController::class, 'getOperator'])->name('getOperator');
Route::get('get-dispatcher', [ScheduleController::class, 'getDispatcher'])->name('getDispatcher');

// Reports
Route::get('bus-generate', [BusController::class, 'busGenerate'])->name('busGenerate');
Route::get('company-generate', [CompanyController::class, 'companyGenerate'])->name('companyGenerate');
Route::get('dispatcher-generate', [DispatcherController::class, 'dispatcherGenerate'])->name('dispatcherGenerate');
Route::get('operator-generate', [OperatorController::class, 'operatorGenerate'])->name('operatorGenerate');
Route::get('fare-generate', [FareController::class, 'fareGenerate'])->name('fareGenerate');
Route::get('schedule-generate', [ScheduleController::class, 'scheduleGenerate'])->name('scheduleGenerate');
Route::get('transaction-generate', [TransactionController::class, 'transactionGenerate'])->name('transactionGenerate');

  