<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects_images extends Model
{
    protected $fillable = [
        'image',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    
    use HasFactory;
}
