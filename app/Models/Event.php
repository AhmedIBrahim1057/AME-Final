<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'description',
        'image',
        'date'
    ];

    public function events_images()
    {
        return $this->belongsTo(events_images::class);
    }
}
