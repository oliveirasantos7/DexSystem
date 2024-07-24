<?php

namespace App\Livewire;

use App\Models\Components;
use App\Models\CuttingDesign;
use App\Models\Glasses;
use App\Models\Project;
use App\Models\Stock;
use Livewire\Component;

class StockSearch extends Component
{

 
    public $project_id;
    public $profilesNeeded = [];
    public $profilesAvailable = [];

    public function mount($project_id)
    {
        $this->project_id = $project_id;
        
        // // Carregar perfis necessários do CuttingDesign
        // $this->profilesNeeded = CuttingDesign::where('project_id', $project_id)
        //                                      ->pluck('profile')
        //                                      ->toArray();

        // // Buscar perfis disponíveis no Stock que correspondem aos perfis necessários
        // $this->profilesAvailable = Stock::whereIn('perfil', $this->profilesNeeded)->get();

        $this->project_id = $project_id;
        $projectInfo = Project::where('id', $project_id)->first();

        // dd($projectInfo);
        
        // Carregar perfis necessários do CuttingDesign
        $cuttingDesigns = CuttingDesign::where('project_id', $project_id)->get();

        $this->profilesNeeded = $cuttingDesigns->map(function ($item) use($projectInfo) {
            return [
                'profile' => $item->profile,
                'size' => $item->size,
                'color' => $projectInfo->color_esquadrias, // Ajuste conforme necessário
                'line' => $projectInfo->line,    // Ajuste conforme necessário
            ];
        })->toArray();

        // Buscar perfis disponíveis no Stock que correspondem aos perfis necessários
        $this->profilesAvailable = Stock::where(function ($query) {
            foreach ($this->profilesNeeded as $needed) {
                $query->orWhere(function ($q) use ($needed) {
                    $q->where('perfil', $needed['profile'])
                      ->where('tamanho', '>=', $needed['size'])
                      ->where('cor',  $needed['color'])
                      ->where('linha', $needed['line']);
                });
            }
        })->get();
    }

        


        

    
    public function render()
    {
        return view('livewire.stock-search', [
            'profilesNeeded' => $this->profilesNeeded,
            'profilesAvailable' => $this->profilesAvailable,
        ]);
}

}