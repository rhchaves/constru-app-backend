<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $fillable = [
        'name',
        'cpf',
        'email',
        'nameLogin',
        'password',
        'phone',
        'email_verified_at',
    ];
    use HasFactory;
}
