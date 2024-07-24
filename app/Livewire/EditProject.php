<?php

namespace App\Livewire;

use App\Models\CuttingDesign;
use App\Models\Project;
use Livewire\Component;

class EditProject extends Component
{

public $project_id;

    public function mount($project_id)
    {
      

    }

    public function render()
    {
        return view('livewire.edit-project');
    }
}
