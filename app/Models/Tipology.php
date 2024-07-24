<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipology extends Model
{
    use HasFactory;
    protected $fillable = [
        'model',
        'img',
        'category',
        'line'
       ];
    

}
