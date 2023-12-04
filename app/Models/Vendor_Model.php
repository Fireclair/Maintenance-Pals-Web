<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//<!-- Vendor Table -->
class Vendor_Model extends Model
{
    use HasFactory;
    protected $table = "vendor_info";
    protected $fillable = ['comp','owner','contact','type','product','date'] ;
}
