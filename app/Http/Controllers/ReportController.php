<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function create(Request $request){
        \App\Models\Reportmodel::create($request->all());
        return redirect('/calcu')->with('success', 'Data Created');
    }
    public function index(){
            $salesreport = \App\Models\ReportModel::all();
            return view('items.sales-chart', ['salesreport'=>$salesreport]);
        }

    }

