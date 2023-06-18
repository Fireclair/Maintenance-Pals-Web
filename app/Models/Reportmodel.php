<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reportmodel extends Model
{
    use HasFactory;
    protected $table='salesreport';
    protected $fillable=['id','Admin_name','Total_sales','Cashier_ID','Cashier_password','opening_sales-id','closing_sales_id','product_id','quantity_in','quantity_out','report_id','vendor_pricePay'];
}
