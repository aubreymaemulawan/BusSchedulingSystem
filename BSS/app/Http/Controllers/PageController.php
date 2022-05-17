<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Company;
use App\Models\Daccount;
use App\Models\Discount;
use App\Models\Dispatcher;
use App\Models\Fare;
use App\Models\Location;
use App\Models\Operator;
use App\Models\Route;
use App\Models\Schedule;
use App\Models\Status;
use App\Models\Transaction;
use App\Models\Trip;
use App\Models\Busstatus;
use App\Models\Bustype;
use App\Models\User;
use PDF;


class PageController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function bus(){
        $bus = Bus::all();
        $company = Company::all();
        $bustype = Bustype::all();
        return view('bus',compact('bus','company','bustype'));
    }
    public function bustype(){
        $data = Bustype::all();
        return view('bustype',compact('data'));
    }
    public function busstatus(){
        $data = Busstatus::all();
        return view('busstatus',compact('data'));
    }
    public function company(){
        $data = Company::all();
        return view('company',compact('data'));
    }
    public function location(){
        $data = Location::all();
        return view('location',compact('data'));
    }
    public function route(){
        $data = Route::all();
        return view('route',compact('data'));
    }
    public function dispatcher(){
        $dispatcher = Dispatcher::all();
        $company = Company::all();
        return view('dispatcher',compact('dispatcher','company'));
    }
    public function daccount(){
        $daccount = Daccount::all();
        $company = Company::all();
        $dispatcher = Dispatcher::all();
        return view('daccount',compact('daccount','dispatcher','company'));
    }
    public function operator(){
        $operator = Operator::all();
        $company = Company::all();
        return view('operator',compact('operator','company'));
    }
    public function fare(){
        $fare = Fare::all();
        $route = Route::all();
        $bustype = Bustype::all();
        return view('fare',compact('fare','route','bustype'));
    }
    public function schedule(){
        $schedule = Schedule::all();
        $company = Company::all();
        $bus = Bus::all();
        $operator = Operator::all();
        $dispatcher = Dispatcher::all();
        $route = Route::all();
        return view('schedule',compact('schedule','company','bus','operator','dispatcher','route'));
    }
    public function transaction(){
        $transaction = Transaction::all();
        $fare = Fare::all();
        $discount = Discount::all();
        return view('transaction',compact('transaction','fare','discount'));
    }
    public function trip(){
        $trip = Trip::all();
        $schedule = Schedule::all();
        return view('trip',compact('trip','schedule'));
    }
    public function status(){
        $status = Status::all();
        $busstatus = busstatus::all();
        return view('status',compact('status','bustatus'));
    }
    public function discount(){
        $data = Discount::all();
        return view('discount',compact('data'));
    }
    public function user(){
        $data = User::all();
        return view('user',compact('data'));
    }
    public function schedule_transaction(){
        $schedule_transaction = ScheduleTransaction::all();
        $schedule = Schedule::all();
        $trip = Trip::all();
        return view('schedule_transaction',compact('schedule_transaction','schedule','trip'));
    }
    public function status_trip(){
        $status_trip = StatusTrip::all();
        $status = Status::all();
        $trip = Trip::all();
        return view('status_trip',compact('status_trip','status','trip'));
    }
    // Reports Views
    public function reportbus(){
        $bus = Bus::all();
        $company = Company::all();
        $bustype = Bustype::all();
        return view('reports.reportbus',compact('bus','company','bustype'));
    }
    public function reportcompany(){
        $data = Company::all();
        return view('reports.reportcompany',compact('data'));
    }
    public function reportdispatcher(){
        $dispatcher = Dispatcher::all();
        $company = Company::all();
        return view('reports.reportdispatcher',compact('dispatcher','company'));
    }
    public function reportoperator(){
        $operator = Operator::all();
        $company = Company::all();
        return view('reports.reportoperator',compact('operator','company'));
    }
    public function reportschedule(){
        $schedule = Schedule::all();
        $company = Company::all();
        $bus = Bus::all();
        $operator = Operator::all();
        $dispatcher = Dispatcher::all();
        $route = Route::all();
        return view('reports.reportschedule',compact('schedule','company','bus','operator','dispatcher','route'));
    }
    public function reportfare(){
        $fare = Fare::all();
        $route = Route::all();
        $bustype = Bustype::all();
        return view('reports.reportfare',compact('fare','route','bustype'));
    }
    public function reporttransaction(){
        $transaction = Transaction::all();
        $fare = Fare::all();
        $discount = Discount::all();
        return view('reports.reporttransaction',compact('transaction','fare','discount'));
    }
}
 