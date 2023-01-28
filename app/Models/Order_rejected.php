<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_rejected extends Model
{
    use HasFactory;
    public $table = "order_rejected";
    public $timestamps = false;
}
