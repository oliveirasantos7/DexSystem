<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectsIndex extends Component
{

    public $showingStockModal = false;


    public function showStockModal(){

        $this->reset();
        $this->showingStockModal = true;
    }

    public function newProject(){
        return redirect()->route('projetos.novo');
    }



    public function render()
    {
        return view('livewire.projects');
    }
}
