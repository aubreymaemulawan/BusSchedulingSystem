<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use App\Models\Company;
use App\Models\Bus;
use App\Models\Operator;
use App\Models\Dispatcher;

class CompanyController extends Controller
{
    public function list(Request $request){
        return json_encode(Company::all());
    }
    public function items(Request $request){
        return json_encode(Company::find($request->id));
    } 
    public function create(Request $request){
        $request->validate([
            'company_name' => 'required|unique:company',
            'address' => 'required',
            'description' => 'required',
            'is_active' => 'required' ,
            'logo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048' ,
        ],);
        $data = new Company();
        $data->company_name = $request->company_name;
        $data->address = $request->address;
        $data->description = $request->description;
        $data->is_active = $request->is_active;
        if($request->hasFile('logo')){
            $logo_name = $request->file('logo')->getClientOriginalName();
            $logo_path = $request->file('logo')->store('public/Images');
            $data->logo_name = $logo_name;
            $data->logo_path = $logo_path;
        }
        $data->save();
        return json_encode(
            ['success'=>true]
        );
    }
    public function update(Request $request){
        $request->validate([
            'edit-company_name' => 'required|unique:company',
            'edit-address' => 'required',
            'edit-description' => 'required',
            'edit-is_active' => 'required' ,
            'edit-logo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048' ,
        ],);
        $data = Company::find($request->input("edit-id"));
        $data->company_name = $request->input("edit-company_name");
        $data->address = $request->input("edit-address");
        $data->description = $request->input("edit-description");
        $data->is_active = $request->input("edit-is_active");
        if($request->hasFile('edit-logo')){
            $logo_name = $request->file('edit-logo')->getClientOriginalName();
            $logo_path = $request->file('edit-logo')->store('public/Images');
            $data->logo_name = $logo_name;
            $data->logo_path = $logo_path;
        }
        $data->save();
        return json_encode(
            ['success'=>true]
        ); 
    }
    public function delete(Request $request){
        $data = Company::find($request->id);
        $data->delete();
        return json_encode(
            ['success'=>true]
        );
    }
    public function companyGenerate(Request $request){
        $from = date($request->from);
        $to = date($request->to);
        if($request->active == 0){
            $company = \DB::table('company')
            ->whereBetween('created_at', [$from, $to])
            ->get();
        }else{
            $company = \DB::table('company')
            ->where('is_active', '=', $request->active)
            ->whereBetween('created_at', [$from, $to])
            ->get();
        }
        if (count($company) > 0) {
            return response()->json($company);
        }else{
            return response()->json(0);
        }
    }
}
