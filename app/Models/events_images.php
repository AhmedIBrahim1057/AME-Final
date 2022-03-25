<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events_images extends Model
{
    protected $fillable = [
        'image',
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    use HasFactory;
}
