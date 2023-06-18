<?php

namespace App\Http\Controllers;

use App\Models\CashierModel;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    //
    public function index(){
        $data_cashier = \App\Models\CashierModel::all();
        $data_cashier_closing = \App\Models\CashierClosingModel::all();
        return view('Manage_sales.calculateSales', ['data_cashier'=>$data_cashier, 'data_cashier_closing'=>$data_cashier_closing]);
    }

    public function create(Request $request){
        \App\Models\CashierModel::create($request->all());
        return redirect('/cashier')->with('success', 'Data Created');
    }

    public function createClosing(Request $request){
        \App\Models\CashierClosingModel::create($request->all());
        return redirect('/cashierclosing')->with('success', 'Data Created');
    }

    public function delete($id){
        $data_cashier = \App\Models\CashierModel::find($id);
        $data_cashier->delete($data_cashier);
        return redirect('/calcu');
    }
}
