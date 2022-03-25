<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products_images extends Model
{
    protected $fillable = [
        'image',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    use HasFactory;
}
