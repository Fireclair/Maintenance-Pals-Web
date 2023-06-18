<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashierModel extends Model
{
    use HasFactory;
    protected $table = 'openingsales';
    protected $fillable = ['id','quantity_sold_bread', 'quantity_sold_biscut', 'quantity_sold_water', 'quantity_sold_lychee', 'quantity_sold_milo', 'quantity_sold_soy', 'quantity_sold_lemon', 'quantity_sold_wanda'];
}
