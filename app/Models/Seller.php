<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    protected $fillable = [
        'fantasyName',
        'corporateName',
        'cnpj',
        'nameLogin',
        'email',
        'password',
        'deliveryDistance',
        'phone',

        // endereço provisóriamente nessa classe
        'cep',
        'street',
        'number',
        'complement',
        'city',
        'district',
        'state',

        'email_verified_at',
        'status',
    ];
    use HasFactory;
}
