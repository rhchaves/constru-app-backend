<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'name',
        'label',
        'description',
        'category',
        'price',
        'productMark',
        'img',
    ];
    use HasFactory;
}
