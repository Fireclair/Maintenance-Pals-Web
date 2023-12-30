<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//<!-- This is Vendor Controller -->
class Vendor_Controller extends Controller
{
    //<!-- View function -->
    public function index()
    {
        $vendor_data = \App\Models\Vendor_Model::all();
        return view('Manage_Vendor.Admin_vendorTable', ['vendor_data' => $vendor_data]);
    }
//<!-- add function -->
    public function create(Request $request)
    {
        \App\Models\Vendor_Model::create($request->all());
        return redirect('vendor')->with('success','New Data Insert');
    }
//<!-- Edit function -->
    public function read($id)
    {
        $vendor_data = \App\Models\Vendor_Model::find($id);
        return view('Manage_Vendor.Admin_editvendorTable',['vendor_data'=> $vendor_data]);
    }
//<!-- Update function -->
    public function readd($id)
    {
        $vendor_data = \App\Models\Vendor_Model::find($id);
        return view('Manage_Vendor.Admin_deletevendorTable',['vendor_data'=> $vendor_data]);
    }

    public function update(Request $request, $id)
   {
    $vendor_data = \App\Models\Vendor_Model::find($id);
    $vendor_data->update($request->all());
   # dd($vendor_data);
     return redirect('vendor')->with('success', 'Vendor is Updated');
   }
//<!-- Delete function -->
    public function destroy($id){
        $vendor_data = \App\Models\Vendor_Model::find($id);
        $vendor_data->delete($vendor_data);
        return redirect('vendor')->with('success','Data has been Deleted');
    }
}
