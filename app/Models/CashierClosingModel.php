<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//<!-- cashier Closing Table -->
class CashierClosingModel extends Model
{
    use HasFactory;
    protected $table = 'closingsales';
    protected $fillable = ['id','quantity_sold_bread0', 'quantity_sold_biscut0',
    'quantity_sold_water0', 'quantity_sold_lychee0', 'quantity_sold_milo0', 'quantity_sold_soy0', 'quantity_sold_lemon0', 'quantity_sold_wanda0'];
}
