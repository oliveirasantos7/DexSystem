<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
    'item',
    'width',
    'height',
    'qtd',
    'line',
    'ref',
    'image',
    'cliente_id',
    'client_id',
    'local',
    'folga_inst',
    'contramarco',
    'selected',
    'color_esquadrias',
    'color_acessorio',
    'type_glass',
    'obs',
   ];

   
    public function cliente()
    {
        return $this->belongsTo(Client::class);
    }

    public function cuttingDesign()
{
    return $this->hasMany(CuttingDesign::class, 'project_id');
}

}
