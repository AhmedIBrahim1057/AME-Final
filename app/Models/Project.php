<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'type',
        'title',
        'description',
        'image',
        'date'
    ];

    public function projects_images()
    {
        return $this->belongsTo(projects_images::class);
    }
}
