<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'star',
        'customer',
        'review'
    ];

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}