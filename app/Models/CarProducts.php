<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarProducts extends Model
{
    use HasFactory;

    protected $table = 'automobile';

    protected $primaryKey = 'id';

    protected $fillable = [
        'brand',
        'price',
        'description',
        'engine',
        'body_type',
        'model',
        'transmission',
        'sign',
        'image'
    ];
}
