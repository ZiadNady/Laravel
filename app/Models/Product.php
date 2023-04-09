<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'detail',
        'slug'
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
}


