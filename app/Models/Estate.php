<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;

class Estate extends Model
{
    use HasFactory;
    use HasSpatial;

    protected $fillable = [
        'name',
        'coordinates',
    ];

    protected $casts = [
        'coordinates' => Point::class,
    ];
}
