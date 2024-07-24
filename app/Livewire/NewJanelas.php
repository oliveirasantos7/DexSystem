<?php

namespace App\Livewire;

use App\Models\Client;
use App\Models\Project;
use Livewire\Component;

class NewJanelas extends Component
{

    public $showingModal = false;
    public $isjanelaMode;
    public $modelo;
    public $model1;
    public $model2;
    public $model3;

    public $id;
    public $item;
    public $width;
    public $height;
    public $qtd;
    public $line;
    public $ref;
    public $image;
    public $cliente_id;
    public$local;
    public $folga_inst;
    public$contramarco;
    public $selected;
    public$color_esquadrias;
    public $color_acessorio;
    public $type_glass;
    public $obs;

    public $modeloSelect;

    public function showModal($modelo){ //$modelo
        $this->reset();
        $this->showingModal = true;

        if ($modelo === 'modelo1') {
            $this->model1 = true;

            } elseif ($modelo === 'modelo2') {
            $this->model2 = true;
            
            } elseif ($modelo === 'modelo3') {
            $this->model3 = true;
            }

           $this->modeloSelect = $modelo;

      }

      public function storeProject(){


        
        $this->image = asset('img/imagesEsquadrias/janelas.jpg');
        

       Project::create([
           'item' => $this->modeloSelect,
           'width'=> $this->width,
           'height'=> $this->height,
           'qtd'=> $this->qtd,
           'line'=> 'Suprema',
           'ref'=> $this->ref,
           'image'=> $this->image,
           'cliente_id'=> $this->cliente_id,
           'local'=> $this->local,
           'folga_inst'=> $this->folga_inst,
           'contramarco'=> $this->contramarco,
           'color_esquadrias'=> $this->color_esquadrias,
           'color_acessorio'=> $this->color_acessorio,
           'type_glass'=> $this->type_glass,
           'obs'=> $this->obs
        ]);
        $this->reset();
    }

   
  
    public function render()
    {

        return view('livewire.new-janelas');
    }
}
