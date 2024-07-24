<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Components extends Model
{
    use HasFactory;
    protected $fillable = [
        'component',
        'img',
        'qtd',
        'descri',
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
