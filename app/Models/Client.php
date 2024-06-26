<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
         'cpf',
        'ref', 
        'cep' ,
        'city' ,
        'street',
         'uf', 
        'number', 
        'district',
        'adjunct',
         'obs',
   ];


    public function projetos()
    {
        return $this->hasMany(Project::class);
    }

}
