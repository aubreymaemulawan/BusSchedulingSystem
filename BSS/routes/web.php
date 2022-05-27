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
 
Route::controller(PageController::class)->group(function () {
    Route::get('busroute','passenger');
    Route::get('/dashboard', 'dashboard');
    Route::get('/bus', 'bus');
    Route::get('/company','company');
    Route::get('/daccount','daccount');
    Route::get('/discount','discount');
    Route::get('/dispatcher','dispatcher');
    Route::get('/fare','fare');
    Route::get('/location','location');
    Route::get('/operator','operator');
    Route::get('/route','route');
    Route::get('/schedule','schedule');
    Route::get('/status','status');
    Route::get('/transaction','transaction');
    Route::get('/trip','trip');
    Route::get('/schedule_transaction','schedule_transaction');
    Route::get('/status_trip','status_trip');
    Route::get('/reportbus','reportbus');
    Route::get('/reportcompany','reportcompany');
    Route::get('/reportdispatcher','reportdispatcher');
    Route::get('/reportoperator','reportoperator');
    Route::get('/reportfare','reportfare');
    Route::get('/reportschedule','reportschedule');
    Route::get('/reporttransaction','reporttransaction');
});

Route::controller(ScheduleController::class)->group(function() {
    Route::get('get-bus', 'getBus')->name('getBus');
    Route::get('get-operator', 'getOperator')->name('getOperator');
    Route::get('get-dispatcher', 'getDispatcher')->name('getDispatcher');
    Route::get('schedule-generate', 'scheduleGenerate')->name('scheduleGenerate');
});

// Reports
Route::get('bus-generate', [BusController::class, 'busGenerate'])->name('busGenerate');
Route::get('company-generate', [CompanyController::class, 'companyGenerate'])->name('companyGenerate');
Route::get('dispatcher-generate', [DispatcherController::class, 'dispatcherGenerate'])->name('dispatcherGenerate');
Route::get('operator-generate', [OperatorController::class, 'operatorGenerate'])->name('operatorGenerate');
Route::get('fare-generate', [FareController::class, 'fareGenerate'])->name('fareGenerate');
Route::get('transaction-generate', [TransactionController::class, 'transactionGenerate'])->name('transactionGenerate');

  