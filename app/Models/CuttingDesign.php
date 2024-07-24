<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuttingDesign extends Model
{
    use HasFactory;

    protected $fillable = [
    'profile',
    'image',
    'descri_profile',
    'qtd_profile',
    'size',
    'pos',
    'cut',
    'qtd_mt',
    'qtd_bars',
    'weight_mt',
    'weight_bars',
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
