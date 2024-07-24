<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Route;

use App\Models\Client;
use App\Models\Components;
use App\Models\CuttingDesign;
use App\Models\Glasses;
use App\Models\Project;
use App\Models\Tipology;
use Livewire\Component;


class NewProject extends Component
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
    public $local;
    public $folga_inst;
    public $contramarco;
    public $selected;
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

    public $modeloSelect;
    public $cliente_id;


    public function mount($cliente_id)
    {
         $this->cliente_id = $cliente_id;
        

        // dd($this->cliente_id);

    }


public function showModal($modelo, $cliente_id, $line){ //$modelo
            $this->reset();
            $this->showingModal = true;
            $this->cliente_id = $cliente_id;
            $this->line = $line;

        switch ($modelo) {
            case 'Janela suprema 2 folhas vidro':
                $this->model1 = true;
                break;
            case 'Janela suprema 3 folhas vidro':
                $this->model2 = true;
                break;
            case 'Janelas suprema veneziana vidro e tela':
                $this->model3 = true;
                break;
            // Adicione outros casos conforme necessário
            default:
                // Tratamento para modelos desconhecidos
        }
        
        $this->modeloSelect = $modelo;

}

// responsavel por criar um novo projeto
//seleciona qual tipologia foi selecionada
public function storeProject() {
        // Realizar operações específicas de acordo com o modelo selecionado
        switch ($this->modeloSelect) {
            case 'Janela suprema 2 folhas vidro':
                $this->storeSuprema2folhas();
                break;
            case 'Janela suprema 3 folhas vidro':
                $this->storeSuprema2folhas();
                break;
            case 'modelo3':
                $this->storeModel3();
                break;
            default:
                // Se nenhum modelo específico for encontrado, você pode lidar com isso aqui
                break;
        }
}

private function storeSuprema2folhas() {

        // imagem da tipologia
        $this->image = asset('img/imagesEsquadrias/janelas.jpg');

        //tamanhos do perfil, considerando se vai ou não contramarco
        $sizeWidthSu001 = $this->contramarco ? ($this->width - 32) - 26 : $this->width - 26;
        $sizeSu007 = $this->contramarco ? $this->height - 32 : $this->height;
        $sizeSu008 = $this->contramarco ? ($this->height - 32) - 30 : $this->height - 30;
        $sizeSu053 = $this->contramarco ? (($this->width - 32) - 141.2) / 2 : ($this->width - 141.2) / 2 ;
        $sizeSu039 = $this->contramarco ? ($this->height - 32) - 50 : $this->height - 50;
        $sizeSu040 = $this->contramarco ? ($this->height - 32) - 50 : $this->height - 50;
        $sizeSu041 = $this->contramarco ? ($this->height - 32) - 50 : $this->height - 50;
        $sizeSu102height = $this->contramarco ? ($this->height - 32) - 50 : $this->height - 50;
        $sizeSu102Width = $sizeSu053 - 5;
        $sizeCm060Width = $this->width - 44;
        $sizeCm060height = $this->height - 44;
        $sizeMp347Width = $this->contramarco ? ($this->width - 32) - 34 : $this->width - 34;
        $sizeMp347height = $this->contramarco ? ($this->height - 32) - 34 : $this->height - 34;


        //peso dos perfis por milimetros
        $weight_su001mm = 0.000762;
        $weight_su002mm = 0.000707;
        $weight_su007mm = 0.000382;
        $weight_su008mm = 0.000253;
        $weight_su053mm = 0.000507;
        $weight_su039mm = 0.000520;
        $weight_su040mm = 0.000480;
        $weight_su041mm = 0.000507;
        $weight_su102mm = 0.000115;
        $weight_mp347mm = 0.000182;
        $weight_cm060mm = 0.000271;


        //tamanho de uma barra em milimetrero
        $bar = 6000;

        //peso dos perfis por barra
        $weight_su001mmBar = $this->calculateWeightBarsPerProfile($weight_su001mm, $bar);
        $weight_su002mmBar = $this->calculateWeightBarsPerProfile($weight_su002mm, $bar);
        $weight_su007mmBar = $this->calculateWeightBarsPerProfile($weight_su007mm, $bar);
        $weight_su008mmBar = $this->calculateWeightBarsPerProfile($weight_su008mm, $bar);
        $weight_su053mmBar = $this->calculateWeightBarsPerProfile($weight_su053mm, $bar);
        $weight_su039mmBar = $this->calculateWeightBarsPerProfile($weight_su039mm, $bar);
        $weight_su040mmBar = $this->calculateWeightBarsPerProfile($weight_su040mm, $bar);
        $weight_su041mmBar = $this->calculateWeightBarsPerProfile($weight_su041mm, $bar);
        $weight_su102mmBar = $this->calculateWeightBarsPerProfile($weight_su102mm, $bar);
        $weight_mp347mmBar = $this->calculateWeightBarsPerProfile($weight_mp347mm, $bar);
        $weight_cm060mmBar = $this->calculateWeightBarsPerProfile($weight_cm060mm, $bar);

        //quantidade de barras 
        $qtd_barsSu001 = ceil(($sizeWidthSu001 * $this->qtd) / $bar);
        $qtd_barsSu002 = $qtd_barsSu001; // Mesmo que Su-001
        $qtd_barsSu007 = ceil((($sizeSu007 * $this->qtd) * 2) / $bar);
        $qtd_barsSu008 = ceil((($sizeSu008 * $this->qtd) * 2) / $bar);
        $qtd_barsSu053 = ceil((($sizeSu053 * $this->qtd) * 4) / $bar);
        $qtd_barsSu039 = ceil((($sizeSu039 * $this->qtd) * 2) / $bar);
        $qtd_barsSu040 = ceil(($sizeSu040 * $this->qtd) / $bar);
        $qtd_barsSu041 = ceil(($sizeSu041 * $this->qtd) / $bar);
        $qtd_barsSu102Width = ceil((($sizeSu102Width * $this->qtd) * 4) / $bar);
        $qtd_barsSu102Height = ceil((($sizeSu102height * $this->qtd) * 4) / $bar);
        $qtd_barsMp347Width = ceil((($sizeMp347Width * $this->qtd) * 2) / $bar);
        $qtd_barsMp347Height = ceil((($sizeMp347height * $this->qtd) * 2) / $bar);
        $qtd_barsCm060Width = ceil((($sizeCm060Width * $this->qtd) * 2) / $bar);
        $qtd_barsCm060Height = ceil((($sizeCm060height * $this->qtd) * 2) / $bar);


        //quantidade em metros
        $qtd_mtSu001 = (($sizeWidthSu001 * $this->qtd) / 1000) . ' MT';
        $qtd_mtSu002 = $qtd_mtSu001; // Mesmo que Su-001
        $qtd_mtSu007 = (($sizeSu007 * ($this->qtd * 2)) / 1000) . ' MT';
        $qtd_mtSu008 = (($sizeSu008 * ($this->qtd * 2)) / 1000) . ' MT';
        $qtd_mtSu053 = (($sizeSu053 * ($this->qtd * 4)) / 1000) . ' MT';
        $qtd_mtSu039 = (($sizeSu039 * ($this->qtd * 2)) / 1000) . ' MT';
        $qtd_mtSu040 = (($sizeSu040 * $this->qtd ) / 1000) . ' MT';
        $qtd_mtSu041 = (($sizeSu040 * $this->qtd ) / 1000) . ' MT';
        $qtd_mtSu102Width = (($sizeSu102Width * ($this->qtd * 4)) / 1000) . ' MT';
        $qtd_mtSu102Height = (($sizeSu102height * ($this->qtd * 4)) / 1000) . ' MT';
        $qtd_mtMp347Width = (($sizeMp347Width * ($this->qtd * 2)) / 1000) . ' MT';
        $qtd_mtMp347Height = (($sizeMp347height * ($this->qtd * 2)) / 1000) . ' MT';
        $qtd_mtCm060Width = (($sizeCm060Width * ($this->qtd * 2)) / 1000) . ' MT';
        $qtd_mtCm060Height = (($sizeCm060height * ($this->qtd * 2)) / 1000) . ' MT';


        //peso da quantidade em metros
        $weight_mtSu001 = ($sizeWidthSu001 * $weight_su001mm) * $this->qtd;
        $weight_mtSu002 = ($sizeWidthSu001 * $weight_su002mm) * $this->qtd;
        $weight_mtSu007 = ($sizeSu007 * $weight_su007mm) * ($this->qtd * 2);
        $weight_mtSu008 = ($sizeSu008 * $weight_su008mm) * ($this->qtd * 2);
        $weight_mtSu053 = ($sizeSu053 * $weight_su053mm) * ($this->qtd * 4);
        $weight_mtSu039 = ($sizeSu039 * $weight_su039mm) * ($this->qtd * 2);
        $weight_mtSu040 = ($sizeSu040 * $weight_su040mm) * $this->qtd ;
        $weight_mtSu041 = ($sizeSu041 * $weight_su041mm) * $this->qtd ;

        $weight_mtSu102Width = ($sizeSu102Width * $weight_su102mm) * ($this->qtd * 4);
        $weight_mtSu102Height = ($sizeSu102height * $weight_su102mm) * ($this->qtd * 4);
        $weight_mtMp347Width = ($sizeMp347Width * $weight_mp347mm) * ($this->qtd * 2);
        $weight_mtMp347Height = ($sizeMp347height * $weight_mp347mm) * ($this->qtd * 2);
        $weight_mtCm060Width = ($sizeCm060Width * $weight_cm060mm) * ($this->qtd * 2);
        $weight_mtCm060Height = ($sizeCm060height * $weight_cm060mm) * ($this->qtd * 2);

        //peso de quantidade de barras
        $weight_barsSu001 = $qtd_barsSu001 * $weight_su001mmBar;
        $weight_barsSu002 = $qtd_barsSu002 * $weight_su002mmBar;
        $weight_barsSu007 = $qtd_barsSu007 * $weight_su007mmBar;
        $weight_barsSu008 = $qtd_barsSu008 * $weight_su008mmBar;
        $weight_barsSu053 = $qtd_barsSu053 * $weight_su053mmBar;
        $weight_barsSu039 = $qtd_barsSu002 * $weight_su039mmBar;
        $weight_barsSu040 = $qtd_barsSu040 * $weight_su040mmBar;
        $weight_barsSu041 = $qtd_barsSu041 * $weight_su041mmBar;
        $weight_barsSu102Width = $qtd_barsSu102Width * $weight_su102mmBar;
        $weight_barsSu102Height = $qtd_barsSu102Height * $weight_su102mmBar;
        $weight_barsMp347Width = $qtd_barsMp347Width * $weight_mp347mmBar;
        $weight_barsMp347Height = $qtd_barsMp347Height * $weight_mp347mmBar;
        $weight_barsCm060Width = $qtd_barsCm060Width * $weight_cm060mmBar;
        $weight_barsCm060Height = $qtd_barsCm060Height * $weight_cm060mmBar;

        $project = Project::create([
            
            'item' => $this->modeloSelect,
            'width' => $this->width,
            'height' => $this->height,
            'qtd' => $this->qtd,
            'line' => $this->line,
            'ref' => $this->ref,
            'image' => $this->image,
            'cliente_id' => $this->cliente_id,
            'client_id' => $this->cliente_id,
            'local' => $this->local,
            'folga_inst' => $this->folga_inst,
            'contramarco' => $this->contramarco,
            'color_esquadrias' => $this->color_esquadrias,
            'color_acessorio' => $this->color_acessorio,
            'type_glass' => $this->type_glass,
            'obs' => $this->obs
        ]);

        $this->createCuttingDesign('Su-001',
        asset('img/imagesPerfis/SU-001.jpg'),
        'Soleira superior 2 planos',
        $this->qtd,
        $sizeWidthSu001,
        'L',
        '90/90',
        $qtd_mtSu001,
        $qtd_barsSu001,
        $weight_mtSu001,
        $weight_barsSu001,
        $project->id);

        $this->createCuttingDesign('Su-002',
        asset('img/imagesPerfis/su-002.png'),
        'Soleira inferior 2 planos',
        $this->qtd,
        $sizeWidthSu001,
        'L',
        '90/90',
        $qtd_mtSu002,
        $qtd_barsSu002,
        $weight_mtSu002,
        $weight_barsSu002,
        $project->id);

        $this->createCuttingDesign('Su-007',
        asset('img/imagesPerfis/su007.png'),
        'Soleira lateral 2 planos',
        $this->qtd * 2,
        $sizeSu007,
        'H',
        '90/90',
        $qtd_mtSu007,
        $qtd_barsSu007,
        $weight_mtSu007,
        $weight_barsSu007,
        $project->id);


        $this->createCuttingDesign('Su-008',
        asset('img/imagesPerfis/su008.png'),
        'Batedor lateral',
        $this->qtd * 2,
        $sizeSu008,
        'H',
        '90/90',
        $qtd_mtSu008,
        $qtd_barsSu008,
        $weight_mtSu008,
        $weight_barsSu008,
        $project->id);


        $this->createCuttingDesign('Su-053',
        asset('img/imagesPerfis/su-053.png'),
        'Montante travessa para Largura',
        $this->qtd * 4,
        $sizeSu053,
        'L',
        '90/90',
        $qtd_mtSu053,
        $qtd_barsSu053,
        $weight_mtSu053,
        $weight_barsSu053,
        $project->id);


        $this->createCuttingDesign('Su-039',
        asset('img/imagesPerfis/su039.png'),
        'Montante principal',
        $this->qtd * 2,
        $sizeSu039,
        'H',
        '90/90',
        $qtd_mtSu039,
        $qtd_barsSu039,
        $weight_mtSu039,
        $weight_barsSu039,
        $project->id);

        $this->createCuttingDesign('Su-040',
        asset('img/imagesPerfis/su-040.png'),
        'Montante mão de amigo interno',
        $this->qtd,
        $sizeSu040,
        'H',
        '90/90',
        $qtd_mtSu040,
        $qtd_barsSu040,
        $weight_mtSu040,
        $weight_barsSu040,
        $project->id);

        $this->createCuttingDesign('Su-041',
        asset('img/imagesPerfis/su041.png'),
        'Montante mão de amigo externo',
        $this->qtd ,
        $sizeSu041,
        'H',
        '90/90',
        $qtd_mtSu041,
        $qtd_barsSu041,
        $weight_mtSu041,
        $weight_barsSu041,
        $project->id);

        $this->createCuttingDesign('Su-102',
        asset('img/imagesPerfis/su102.png'),
        'Baguete para a largura',
        $this->qtd * 4,
        $sizeSu102Width,
        'L',
        '90/90',
        $qtd_mtSu102Width,
        $qtd_barsSu102Width,
        $weight_mtSu102Width,
        $weight_barsSu102Width,
        $project->id);

        $this->createCuttingDesign('Su-102',
        asset('img/imagesPerfis/su102.png'),
        'Baguete para a altura',
        $this->qtd * 4,
        $sizeSu102height,
        'H',
        '90/90',
        $qtd_mtSu102Height,
        $qtd_barsSu102Height,
        $weight_mtSu102Height,
        $weight_barsSu102Height,
        $project->id);

        $this->createCuttingDesign('Mp-347',
        asset('img/imagesPerfis/mp347.png'),
        'Guarnição Para a largura',
        $this->qtd * 2,
        $sizeMp347Width,
        'L',
        '90/90',
        $qtd_mtMp347Width,
        $qtd_barsMp347Width,
        $weight_mtMp347Width,
        $weight_barsMp347Width,
        $project->id);

        $this->createCuttingDesign('Mp-347',
        asset('img/imagesPerfis/mp347.png'),
        'Guarnição Para a altura',
        $this->qtd * 2,
        $sizeMp347height,
        'H',
        '90/90',
        $qtd_mtMp347Height,
        $qtd_barsMp347Height,
        $weight_mtMp347Height,
        $weight_barsMp347Height,
        $project->id);


    if($this->contramarco){

        $this->createCuttingDesign('Cm-060',
        asset('img/imagesPerfis/cm.png'),
        'Contramarco para a largura',
        $this->qtd * 2,
        $sizeCm060Width,
        'L',
        '90/90',
        $qtd_mtCm060Width,
        $qtd_barsCm060Width,
        $weight_mtCm060Width,
        $weight_barsCm060Width,
        $project->id);

        $this->createCuttingDesign('Cm-060',
        asset('img/imagesPerfis/cm.png'),
        'Contramarco para a altura',
        $this->qtd * 2,
        $sizeCm060height,
        'L',
        '90/90',
        $qtd_mtCm060Height,
        $qtd_barsCm060Height,
        $weight_mtCm060Height,
        $weight_barsCm060Height,
        $project->id);

    }

    $this->createComponents(
    'FEC-636',
    asset('img/components/fec636.png'),
    $this->qtd * 2,
    'Fecho concha sem chave e trava reta - Janela e porta de correr',
    $project->id);


    $this->createComponents(
        'CON-370',
        asset('img/components/con370.png'),
        $this->qtd * 2,
        'Contrafecho - Janela e porta de correr',
        $project->id);

        $this->createComponents(
            'ROL-440',
            asset('img/components/rol440.png'),
            $this->qtd * 4,
            'Roldana com regulagem e rolamento - Porta de correr',
            $project->id);

            $this->createComponents(
                'NYL-332',
                asset('img/components/nyl332.png'),
                $this->qtd * 4,
                'Guia deslizante - Janela e porta de correr',
                $project->id);


            $this->createComponents(
                'NYL-190',
                asset('img/components/nyl190.png'),
                $this->qtd * 12,
                'Botão de fixação do remate - Janela e porta',
                $project->id);
        
                $this->createComponents(
                    'PAR-428',
                    asset('img/components/par428.png'),
                    $this->qtd * 16,
                    'Parafuso 4.8 x 32 mm cabeça panela',
                    $project->id);

            $this->createComponents(
            'PAR-437',
            asset('img/components/par437.png'),
            $this->qtd * 8,
            'Parafuso 3.5 x 9.5 mm cabeça panela',
            $project->id);

    if($this->contramarco){
            $this->createComponents(
            'CON-063',
            asset('img/components/con063.png'),
            $this->qtd * 4,
            'Canto para contramarco',
            $project->id);

            $this->createComponents(
            'CHU-787',
            asset('img/components/chu787.png'),
            $this->qtd * 8,
            'Chumbador - Contramarco',
            $project->id);

        $this->createComponents(
            'EsqCont',
            asset('img/components/esqcont.png'),
            $this->qtd * 4,
            'Esquadro 300mm - Contramarco',
            $project->id);
                        }

    $this->createGlass(
        $this->type_glass,
        $sizeSu053 - 5,
        $sizeSu039 - 63.5,
        $this->qtd * 2,
        $project->id
    );

        

        $this->reset();
}



private function createCuttingDesign($profile, $image, $descri,$qtdProfile, $size,$pos,$cut, $qtd_mt, $qtd_bars, $weight_mt, $weight_bars, $projectId) {
    CuttingDesign::create([
        'profile' => $profile,
        'image' => $image,
        'descri_profile' => $descri,
        'qtd_profile' => $qtdProfile,
        'size' => $size,
        'pos' => $pos,
        'cut' => $cut,
        'qtd_mt' => $qtd_mt,
        'qtd_bars' => $qtd_bars,
        'weight_mt' => $weight_mt,
        'weight_bars' => $weight_bars,
        'project_id' => $projectId,
        'client_id' => $this->cliente_id
    ]);
}

private function createComponents($component,$imgComponent,$qtdComponent,$descComponent,$projectId) {
    Components::create([
        'component' => $component,
        'img' => $imgComponent,
        'qtd' => $qtdComponent,
        'descri' => $descComponent,
        'project_id' => $projectId,
        'client_id' => $this->cliente_id

    ]);
}

private function createGlass($type_glass,$widthGlass,$heightGlass,$qtdGlass,$projectId) {
    Glasses::create([
        'type_glss' => $type_glass,
        'width' => $widthGlass,
        'height' => $heightGlass,
        'qtd' => $qtdGlass,
        'project_id' => $projectId,
        'client_id' => $this->cliente_id
    ]);
}

private function calculateWeightBarsPerProfile($weight_mm, $bar_length) {
    return $weight_mm * $bar_length;
}






private function storeModel2() {
    // Realizar operações específicas para o modelo "Suprema 2 folhas vidr"
    $this->image = asset('img/imagesEsquadrias/janelas.jpg');

    $item = $this->modeloSelect.'10';


    Project::create([

        'item' => $item,
        'width' => $this->width,
        'height' => $this->height,
        'qtd' => $this->qtd,
        'line' => 'Suprema',
        'ref' => $this->ref,
        'image' => $this->image,
        'cliente_id' => $this->cliente_id,
        'local' => $this->local,
        'folga_inst' => $this->folga_inst,
        'contramarco' => $this->contramarco,
        'color_esquadrias' => $this->color_esquadrias,
        'color_acessorio' => $this->color_acessorio,
        'type_glass' => $this->type_glass,
        'obs' => $this->obs
    ]);
    $this->reset();
}

    public function render()
    {

        $tipologies = Tipology::all();

        
        return view('livewire.new-project', compact('tipologies'));
    }


    


    
}
