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
        'user_id',
        'restaurant_image'
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

    protected function imagePath(): Attribute
    {
        return Attribute::make(
            get: function ($value, $attributes) {
                return asset('storage/' . $attributes['restaurant_image']);
            }
        );
    }

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['image_path'];
}
