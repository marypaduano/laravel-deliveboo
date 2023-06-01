<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'date',
        'code',
        'address',
        'total_price',
    ];

    public function products(){
        return $this->belongsToMany(Product::class);
    }
    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }
}
