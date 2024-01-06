<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'products_id',
        'user_id',
        'product',
        'price'
    ];

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}