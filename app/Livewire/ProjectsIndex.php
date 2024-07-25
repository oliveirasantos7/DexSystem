<?php

namespace App\Livewire;

use App\Models\Client;
use App\Models\Components;
use App\Models\CuttingDesign;
use App\Models\Glasses;
use App\Models\Project;
use Livewire\Component;

// class ProjectsIndex extends Component
// {

//     public $showingModal = false;
//     public $clienteId;
//     public $isEditMode;
//     public $project;
//     public $cuttingDesign;


//     public $item;
//     public $width;
//     public $height;
//     public $qtd;
//     public $line;
//     public $ref;
//     public $image;
//     public $cliente_id;
//     public $client_id;
//     public $local;
//     public $folga_inst;
//     public $contramarco;
//     public $color_esquadrias;
//     public $color_acessorio;
//     public $type_glass;
//     public $obs;

//    public $profile;
//    public $descri_profile;
//    public $qtd_profile;
//    public $size;
//    public $pos;
//    public $cut;
//    public $qtd_mt;
//    public $qtd_bars;
//    public $weight_mt;
//    public $weight_bars;
//    public $project_id;
//    public $cuttingDesignData;

//     public function showEditModal($id){

//         $this->project = Project::findOrFail($id);
//         $this->item  = $this->project->item;
//         $this->width = $this->project->width;
//         $this->height = $this->project->height;
//         $this->qtd = $this->project->qtd;
//         $this->line = $this->project->line;
//         $this->ref = $this->project->ref;
//         $this->image = $this->project->image;
//         $this->local = $this->project->local;
//         $this->contramarco = $this->project->contramarco;
//         $this->color_esquadrias = $this->project->color_esquadrias;
//         $this->color_acessorio = $this->project->color_acessorio;
//         $this->type_glass = $this->project->type_glass;
//         $this->obs = $this->project->obs;

//         $this->project->cuttingDesign;
//         // dd($this->project->cuttingDesign);
        
//         // $this->size = $this->project->cuttingDesign->size;
//         // $this->qtd_profile = $this->project->cuttingDesign->qtd_profile;
//         // $this->qtd_mt = $this->project->cuttingDesign->qtd_mt;
//         // $this->qtd_bars = $this->project->cuttingDesign->qtd_bars;
//         // $this->weight_mt = $this->project->cuttingDesign->weight_mt;
//         // $this->weight_bars = $this->project->cuttingDesign->weight_bars;
//         // $this->qtd_bars = $this->project->cuttingDesign->qtd_bars;
       
//     // Inicializar a propriedade cuttingDesignData como um array vazio
//     $this->cuttingDesignData = [];

//     // Iterar sobre todos os cuttingDesigns associados e adicionar ao array cuttingDesignData
//     foreach ($this->project->cuttingDesign as $ctd) {
//         $this->cuttingDesignData[] = [
//             'id' => $ctd->id,  // Adicionando o ID para referência futura
//             'size' => $ctd->size,
//             'qtd_profile' => $ctd->qtd_profile,
//             'qtd_mt' => $ctd->qtd_mt,
//             'qtd_bars' => $ctd->qtd_bars,
//             'weight_mt' => $ctd->weight_mt,
//             'weight_bars' => $ctd->weight_bars,
//         ];
//     }

        




//         $this->showingModal = true;

//         $this->isEditMode = true;
//     }

    

//     public function updateProject(){


        
//         dd($this->cuttingDesignData);
       
//         $this->project->update([
//              'item'=> $this->item,
//              'width'=> $this->width,
//              'height'=> $this->height,
//              'qtd'=> $this->qtd,
//              'line'=> $this->line,
//              'ref'=> $this->ref,
//              'image'=> $this->image,
//              'local'=> $this->local,
//              'contramarco'=> $this->contramarco,
//              'color_esquadrias'=> $this->color_esquadrias,
//              'color_acessorio'=> $this->color_acessorio,
//              'type_glass'=> $this->type_glass,
//              'obs'=> $this->obs, 
//          ]);
    
//     // Resetar o estado do componente
//     $this->reset();
         
//     }


//     public function editProject($project_id){
       
//         $this->clienteId = $project_id;
//         return redirect()->route('edit.novo', ['project_id' => $project_id]);
        
//         // $this->redirect(route('projetos.novo'));
//     }
   
//     public function newProject($clienteId){
       
//         $this->clienteId = $clienteId;
//         return redirect()->route('projetos.novo', ['cliente_id' => $clienteId]);
        
//         // $this->redirect(route('projetos.novo'));
//     }

//     public function deleteProject($id){
//         $projeto = Project::findOrfail($id);


//         CuttingDesign::where('project_id',$id)->delete();
//         Components::where('project_id',$id)->delete();
//         Glasses::where('project_id',$id)->delete();


//         $projeto->delete();


//         $this->reset();
        
//     }

    



//     public function render()
//     {
//     // $projetos = Project::all();
//     // $clientes = Client::all();

//       // $clientsReturn = Client::all();
//       $projetos = Project::orderByDesc('id')->get();
//       $clientes = Client::orderByDesc('id')->get();
     

//         return view('livewire.projects', compact('projetos', 'clientes'));
//     }
// }



class ProjectsIndex extends Component
{
    public $showingModal = false;
    public $clienteId;
    public $isEditMode;
    public $project;
    public $cuttingDesign;

    public $item;
    public $width;
    public $height;
    public $qtd;
    public $line;
    public $ref;
    public $image;
    public $cliente_id;
    public $client_id;
    public $local;
    public $folga_inst;
    public $contramarco;
    public $color_esquadrias;
    public $color_acessorio;
    public $type_glass;
    public $obs;

    public $profile;
    public $descri_profile;
    public $qtd_profile;
    public $size;
    public $pos;
    public $cut;
    public $qtd_mt;
    public $qtd_bars;
    public $weight_mt;
    public $weight_bars;
    public $project_id;
    public $cuttingDesignData;
    public $modelo;



    public function showEditModal($id)
    {
        $this->project = Project::findOrFail($id);
        $this->item = $this->project->item;
        $this->width = $this->project->width;
        $this->height = $this->project->height;
        $this->qtd = $this->project->qtd;
        $this->line = $this->project->line;
        $this->ref = $this->project->ref;
        $this->image = $this->project->image;
        $this->local = $this->project->local;
        $this->contramarco = $this->project->contramarco;
        $this->color_esquadrias = $this->project->color_esquadrias;
        $this->color_acessorio = $this->project->color_acessorio;
        $this->type_glass = $this->project->type_glass;
        $this->obs = $this->project->obs;

        $this->cuttingDesignData = [];

        foreach ($this->project->cuttingDesign as $ctd) {
            $this->cuttingDesignData[] = [
                'id' => $ctd->id,
                'profile' => $ctd->profile,
                'size' => $ctd->size,
                'qtd_profile' => $ctd->qtd_profile,
                'qtd_mt' => $ctd->qtd_mt,
                'qtd_bars' => $ctd->qtd_bars,
                'weight_mt' => $ctd->weight_mt,
                'weight_bars' => $ctd->weight_bars,
            ];
        }

        $this->showingModal = true;
        $this->isEditMode = true;
    }

    public function updateProject()
    {
        $validatedData = $this->validate([
            'item' => 'required|string|max:255',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'qtd' => 'required|integer',
            // 'line' => 'required|string|max:255',
            // 'ref' => 'nullable|string|max:255',
            // 'image' => 'nullable|string|max:255',
            // 'local' => 'required|string|max:255',
            // 'contramarco' => 'nullable|string|max:255',
            // 'color_esquadrias' => 'required|string|max:255',
            // 'color_acessorio' => 'nullable|string|max:255',
            // 'type_glass' => 'required|string|max:255',
            // 'obs' => 'nullable|string',
            // 'cuttingDesignData.*.id' => 'required|integer|exists:cutting_designs,id',
        ]);

        $this->project->update([
            'item' => $this->item,
            'width' => $this->width,
            'height' => $this->height,
            'qtd' => $this->qtd,
            'line' => $this->line,
            'ref' => $this->ref,
            'image' => $this->image,
            'local' => $this->local,
            'contramarco' => $this->contramarco,
            'color_esquadrias' => $this->color_esquadrias,
            'color_acessorio' => $this->color_acessorio,
            'type_glass' => $this->type_glass,
            'obs' => $this->obs,
        ]);

        foreach ($this->cuttingDesignData as $data) {
            $cuttingDesign = CuttingDesign::findOrFail($data['id']);
            $newSize = $this->calculateNewSize($data['profile']);
            $newQtdProfile = $this->calculateQtdProfile($this->qtd, $data['profile']);
            $newQtdMt = $this->calculateQtdMt($data['profile'], $this->qtd );
            $newQtdBars = $this->calculateQtdBars($data['profile']);
            $newWeightMt = $this->calculateWeightMt($newQtdMt);
            $newWeightBars = $this->calculateWeightBars($newQtdBars);

            $cuttingDesign->update([
                'size' => $newSize,
                'qtd_profile' => $newQtdProfile,
                'qtd_mt' => $newQtdMt,
                'qtd_bars' => $newQtdBars,
                'weight_mt' => $newWeightMt,
                'weight_bars' => $newWeightBars,
            ]);
        }

        

        session()->flash('message', 'Project updated successfully.');

        $this->reset();
    }

   

    public function calculateNewSize($profile) {
        switch ($this->item) {
            case 'Janela suprema 2 folhas vidro':
                switch ($profile) {
                    case 'Su-001':
                    case 'Su-002':
                        return $this->contramarco ? ($this->width - 32) - 26 : $this->width - 26;
                    case 'Su-007':
                        return $this->contramarco ? $this->height - 32 : $this->height;
                    case 'Su-008':
                        return $this->contramarco ? ($this->height - 32) - 30 : $this->height - 30;
                    case 'Su-053':
                        return $this->contramarco ? (($this->width - 32) - 141.2) / 2 : ($this->width - 141.2) / 2;
                    // Adicione outros casos específicos conforme necessário
                    default:
                        return 2;
                }
            default:
                return 2; // Tamanho padrão se o item não corresponder
        }
    }

    protected function calculateQtdProfile($qtd, $profile)
    {
        // return $qtd * 2; // Exemplo: 2 perfis por item
        switch ($this->item) {
            case 'Janela suprema 2 folhas vidro':
        switch ($profile) {
            case 'Su-001':
            case 'Su-002':
                return $qtd;
            case 'Su-007':
                return $qtd * 2;
            case 'Su-008':
                return $qtd * 2;
            case 'Su-053':
                return $qtd * 4;
            // Adicione outros casos específicos conforme necessário
            default:
                return 2;
        }
        default:
        return 2; // Tamanho padrão se o item não corresponder
        }
    }


    protected function calculateQtdMt($profile)
    {
          // return $qtd * 2; // Exemplo: 2 perfis por item
          switch ($this->item) {
            case 'Janela suprema 2 folhas vidro':
        switch ($profile) {
            case 'Su-001':
            case 'Su-002':
                return (($this->contramarco ? ($this->width - 32) - 26 : $this->width - 26) * $this->qtd);
                
            case 'Su-007':
            return ((($this->contramarco ? ($this->width - 32) - 26 : $this->width - 26) * $this->qtd) * 2);

                
            case 'Su-008':
            return ((($this->contramarco ? ($this->height - 32) - 30 : $this->height - 30) * $this->qtd) * 2);


                
            case 'Su-053':
            return ((($this->contramarco ? (($this->width - 32) - 141.2) / 2 : ($this->width - 141.2) / 2) * $this->qtd) * 4);


            
                
            // Adicione outros casos específicos conforme necessário
            default:
                return 2;
        }
        default:
    }
        return 2; // Tamanho padrão se o item não corresponder
        }

    protected function calculateQtdBars($profile)
    {
        
          // return $qtd * 2; // Exemplo: 2 perfis por item
          switch ($this->item) {
            case 'Janela suprema 2 folhas vidro':
        switch ($profile) {
            case 'Su-001':
            case 'Su-002':
                return ceil((($this->contramarco ? ($this->width - 32) - 26 : $this->width - 26) * $this->qtd / 6000));
                
            case 'Su-007':
            return ceil(((($this->contramarco ? ($this->width - 32) - 26 : $this->width) * $this->qtd) * 2) / 6000);

                
            case 'Su-008':
            return ceil((($this->contramarco ? ($this->height - 32) - 30 : $this->height - 30) * $this->qtd * 2) / 6000) ;
            


                
            case 'Su-053':
            return ceil(((($this->contramarco ? (($this->width - 32) - 141.2) / 2 : ($this->width - 141.2) / 2)) * $this->qtd * 4) / 6000);

            


            
                
            // Adicione outros casos específicos conforme necessário
            default:
                return 2;
        }
        default:
        return 2; // Tamanho padrão se o item não corresponder
        }
    }
// -------------------------------------------------------------------------------------------------------
    protected function calculateWeightMt($qtdMt)
    {
        return $qtdMt * 0.5; // Exemplo: 0.5 kg por metro
    }

    protected function calculateWeightBars($qtdBars)
    {
        return $qtdBars * 3; // Exemplo: cada barra pesa 3 kg
    }
// -------------------------------------------------------------------------------------------------------

  
    public function newProject($clienteId)
    {
        $this->clienteId = $clienteId;
        return redirect()->route('projetos.novo', ['cliente_id' => $clienteId]);
    }

    public function deleteProject($id)
    {
        $projeto = Project::findOrFail($id);

        CuttingDesign::where('project_id', $id)->delete();
        Components::where('project_id', $id)->delete();
        Glasses::where('project_id', $id)->delete();

        $projeto->delete();

        $this->reset();
    }

    public function editProject($project_id)
    {
        $this->clienteId = $project_id;
        return redirect()->route('edit.novo', ['project_id' => $project_id]);
    }


    public function render()
    {
        $projetos = Project::orderByDesc('id')->get();
        $clientes = Client::orderByDesc('id')->get();

        return view('livewire.projects', compact('projetos', 'clientes'));
    }
}
