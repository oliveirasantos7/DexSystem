<?php

namespace App\Livewire;

use App\Models\Client;
use App\Models\Components;
use App\Models\CuttingDesign;
use App\Models\Glasses;
use App\Models\Project;
use Livewire\Component;

class ProjectDetail extends Component
{
    public $id;
    public $cuttingDesign;
    public $components;
    public $glasses;
    public $project;
    public $client;

    public function mount($id)
    {
         $this->id = $id;
         $this->cuttingDesign = CuttingDesign::where('project_id', $id)->get();
         $this->components = Components::where('project_id', $id)->get();
         $this->glasses = Glasses::where('project_id', $id)->get();
         $this->project = Project::where('id', $id)->first();
         $this->client = $this->project->cliente;


        // dd($this->client);

    }

    public function render()
    {
        
       
        $cuttingDesign = $this->cuttingDesign;
        $project = $this->project;
        $client = $this->client;
        $components = $this->components;
        $glasses = $this->glasses;


        return view('livewire.project-detail');
    }
}
