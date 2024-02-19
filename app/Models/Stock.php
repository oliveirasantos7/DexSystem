<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
         'perfil',
         'descri',
         'cor',
         'tamanho',
         'qtd',
         'linha',
         'imagem',
          'loca',
          'selected'
    ];

    public function scopeSearch($query, $value){
        $query->where('perfil', 'like', "%{$value}%")
        ->orWhere('descri','like',"%{$value}%")
        ->orWhere('id', '=', $value);  // Alterado para igualdade (=) para pesquisa exata
    }

}
