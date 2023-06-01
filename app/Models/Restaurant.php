<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Restaurant extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'restaurant_name',
        'address',
        'vat',
        'user_id'
    ];

    public function types(){
        return $this->belongsToMany(Type::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

    protected function thumbPath(): Attribute
    {
        return Attribute::make(
            get: function ($value, $attributes) {
                return asset('storage/' . $attributes['thumb']);
            }
        );
    }
}
