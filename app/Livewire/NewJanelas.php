<?php

namespace App\Livewire;

use Livewire\Component;

class NewJanelas extends Component
{

    public $showingModal = false;
    public $isjanelaMode;
    public $modelo;
    public $model1;
    public $model2;
    public $model3;

   

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

      }

   
  
    public function render()
    {

        return view('livewire.new-janelas');
    }
}
