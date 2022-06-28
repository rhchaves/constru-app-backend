<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cpf',
        'email',
        'password',
    ];

    public function rules() {
        return [
            'name' => 'required|min:3',
            'cpf' => 'required|unique:admins,cpf,'.$this->id.'|min:14',
            'email' => 'required|unique:admins',
            'password' => 'required',
        ];
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'cpf.unique' => 'O CPF já existe',
            'email.unique' => 'O e-mail já existe',
        ];
    }
}
