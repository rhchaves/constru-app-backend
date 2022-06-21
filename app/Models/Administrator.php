<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $fillable = [
        'name',
        'cpf',
        'email',
        'password',
    ];
    use HasFactory;
}
