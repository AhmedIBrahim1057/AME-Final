<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'description',
        'image',
        'date'
    ];

    public function products_images()
    {
        return $this->belongsTo(products_images::class);
    }
}
