<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use App\Models\Dispatcher;
use App\Models\Daccount; 
use App\Models\User;
use DB;

class DispatcherController extends Controller
{
    public function list(Request $request){
        return json_encode(Dispatcher::with(['company'])->get());
    }
    public function items(Request $request){
        return json_encode(Dispatcher::with(['company'])->find($request->id));
    }
    public function create(Request $request){
        $request->validate([
            'company_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_no' => 'required',
            'age' => 'required',
            'address' => 'required',
            'is_active' => 'required' ,
            'profile_picture' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048' ,
        ],);
        $data = new Dispatcher();
        $data->company_id = $request->company_id;
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->contact_no = $request->contact_no;
        $data->age = $request->age;
        $data->address = $request->address;
        $data->is_active = $request->is_active;
        if($request->hasFile('profile_picture')){
            $profile_name = $request->file('profile_picture')->getClientOriginalName();
            $profile_path = $request->file('profile_picture')->store('public/Profile_Images');
            $data->profile_name = $profile_name;
            $data->profile_path = $profile_path;
        }
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    } 
    public function update(Request $request){
        $request->validate([
            'edit-company_id' => 'required',
            'edit-first_name' => 'required',
            'edit-last_name' => 'required',
            'edit-contact_no' => 'required',
            'edit-age' => 'required',
            'edit-address' => 'required',
            'edit-is_active' => 'required' ,
            'edit-profile_picture' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048' ,
        ],);
        $data = Dispatcher::find($request->input("edit-id"));
        $data->company_id = $request->input("edit-company_id");
        $data->first_name = $request->input("edit-first_name");
        $data->last_name = $request->input("edit-last_name");
        $data->contact_no = $request->input("edit-contact_no");
        $data->age = $request->input("edit-age");
        $data->address = $request->input("edit-address");
        $data->is_active = $request->input("edit-is_active");
        if($request->hasFile('edit-profile_picture')){
            $profile_name = $request->file('edit-profile_picture')->getClientOriginalName();
            $profile_path = $request->file('edit-profile_picture')->store('public/Profile_Images');
            $data->profile_name = $profile_name;
            $data->profile_path = $profile_path;
        }
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    }
    public function delete(Request $request){
        $data = Dispatcher::find($request->id);
        $data1 = Daccount::where('dispatcher_id',$request->id);
        $data->delete();
        $data1->delete();
        return response()->json($data1);
        
    }
    public function dispatcherGenerate(Request $request){
        $from = date($request->from);
        $to = date($request->to);
        if($request->company == 0 && $request->active == 0){
            $dispatcher = \DB::table('dispatcher')
            ->whereBetween('created_at', [$from, $to])
            ->get();
        }else if($request->active == 0){
            $dispatcher = \DB::table('dispatcher')
            ->where('company_id', '=', $request->company)
            ->whereBetween('created_at', [$from, $to])
            ->get();
        }else if($request->company == 0){
            $dispatcher = \DB::table('dispatcher')
            ->where('is_active', '=', $request->active)
            ->whereBetween('created_at', [$from, $to])
            ->get();
        }else{
            $dispatcher = \DB::table('dispatcher')
            ->where('is_active', '=', $request->active)
            ->where('company_id', '=', $request->company)
            ->whereBetween('created_at', [$from, $to])
            ->get();
        }
        if (count($dispatcher) > 0) {
            return response()->json($dispatcher);
        }else{
            return response()->json(0);
        }
    } 
}
 