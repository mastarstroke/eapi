<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Review;
use App\Models\Cart;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'details',
        'stock',
        'price',
        'discount'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}