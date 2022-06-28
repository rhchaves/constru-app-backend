<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'label',
        'skuId',
        'description',
        'category',
        'price',
        'productMark',
        'image',
    ];

    public function rules() {
        return [
            'name' => 'required|unique:products,name,'.$this->id.'|min:3',
            'label' => 'required|unique:products,label,'.$this->id.'|min:3',
            'skuId' => 'required|unique:products,skuId,'.$this->id.'|min:3',
            'category' => 'required',
            'price' => 'required',
            'productMark' => 'required',
            'image' => 'required|file|mimes:png,jpg,jpeg',
        ];
    }

    public function feedback() {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'name.unique' => 'O nome do produto já existe',
            'label.unique' => 'O label do produto já existe',
            'skuId.unique' => 'O skuId do produto já existe',
            'image.mimes' => 'O arquivo deve ser uma imagem do tipo: png, jpg ou jpeg',
            'name.min' => 'O nome deve ter no mínimo 3 caracteres',
        ];
    }
}
