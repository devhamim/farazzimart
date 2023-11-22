<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function rel_to_product() {
        return $this->belongsTo(Product::class, 'product_id');
    }
    function rel_to_courier() {
        return $this->belongsTo(courier::class, 'courier_id');
    }
}
