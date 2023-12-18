<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryModel extends Model
{
    use HasFactory;
    protected $table = 'inventory';
    protected $primarykey = 'id';
    protected $fillable = ['PCode', 'PName', 'Description', 'qty', 'price', 't_price'];
}
