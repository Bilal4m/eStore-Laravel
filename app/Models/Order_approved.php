<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_approved extends Model
{
    use HasFactory;
    public $table = "order_approved";
    public $timestamps = false;
}
