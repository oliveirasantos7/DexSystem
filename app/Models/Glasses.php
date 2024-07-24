<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glasses extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_glss',
        'width',
        'height',
        'qtd',
        'project_id',
        'client_id',
    
       ];

       public function projeto()
       {
           return $this->belongsTo(Project::class);
       }
   
       public function cliente()
       {
           return $this->belongsTo(Client::class);
       }
}
