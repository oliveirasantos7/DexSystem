<?php

namespace App\Livewire;

use App\Models\Stock;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class StockIndex extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $showingStockModal = false;
    public $showingNoteModal = false;
    public $showingDeleteStockModal = false;
    public $newImage;
    public $oldImage;
    public $id;
    public $perfil;
    public $tamanho;
    public $qtd;
    public $cor;
    public $linha;
    public $loca;
    public $descri;
    public $isEditMode = false;
    public $isDeleteMode = false;
    public $estoque;
    public $estoqueId;
    public $perPage = 5;
    public $search = '';
    public $searchDate = '';
    public $buscaLinha = '';
    public $buscaCor = '';
    public $buscaLocalizacao = '';
    public $buscaId = '';
    public $sortBy = 'created_at';
    public $sortDir = 'DESC';
    public $itens;
    public $mensagem;
    public $tipoMensagem;
    
    



    public function showStockModal(){

        $this->reset();
        $this->showingStockModal = true;
    }

    public function showNoteModal(){

        $this->reset();
        $this->showingNoteModal = true;
    }
    public function storeStock(){

        $this->validate([
            // 'newImage' => 'image|max:1024',
            'perfil' => 'required',
            'descri' => 'required',
            'cor' => 'required',
            'tamanho' => 'required',
            'qtd' => 'required',
            'linha' => 'required',
            // 'newImage' => 'required',
            'loca' => 'required',
        ]);

        $image = null;

        // Verifique se uma imagem foi enviada antes de tentar armazená-la
        if ($this->newImage) {
            $image = $this->newImage->store('public/estoque');
        }
      
        // $image = $this->newImage->store('public/estoque');

        
        Stock::create([
           'perfil'=> $this->perfil,
            'descri'=> $this->descri,
            'cor'=> $this->cor,
            'tamanho'=> $this->tamanho,
            'qtd'=> $this->qtd,
            'linha'=> $this->linha,
            'imagem'=> $image,
            'loca'=> $this->loca

        ]);
        $this->reset();
    }

    

        public function showEditStockModal($id){
            $this->estoque = Stock::findOrFail($id); 

            $this->perfil  = $this->estoque->perfil;
            $this->descri =$this->estoque->descri;
            $this->cor =$this->estoque->cor;
            $this->tamanho =$this->estoque->tamanho;
            $this->qtd =$this->estoque->qtd;
            $this->linha =$this->estoque->linha;
            $this->loca =$this->estoque->loca;
            $this->oldImage =$this->estoque->imagem;
            $this->showingStockModal = true;
            $this->isEditMode = true;
        }

    public function updateStock(){

        $this->validate([
            
            'perfil' => 'required',
            'descri' => 'required',
            'cor' => 'required',
            'tamanho' => 'required',
            'qtd' => 'required',
            'linha' => 'required',
            'loca' => 'required',
        ]);

        $image = $this->oldImage; // Use a imagem antiga por padrão

        // $image = $this->estoque->image;
        if($this->newImage){
            $image = $this->newImage->store('public/estoque');
        }
        

        $this->estoque->update([
            'perfil'=> $this->perfil,
             'descri'=> $this->descri,
             'cor'=> $this->cor,
             'tamanho'=> $this->tamanho,
             'qtd'=> $this->qtd,
             'linha'=> $this->linha,
             'imagem'=> $image,
             'loca'=> $this->loca
 
         ]);
         $this->reset();
    }

  

    public function deleteStock($id){
        $estoque = Stock::findOrfail($id);

        if ($estoque->imagem) {
        Storage::delete($estoque->imagem);
            
        }
        $estoque->delete();
        $this->reset();
    }

    public function setSortBy($sortByField){
        if($this->sortBy === $sortByField){
            $this->sortDir = ($this->sortDir == "ASC") ? 'DESC' : "ASC";
        }
        $this->sortBy = $sortByField;
        $this->sortDir = 'DESC';
    }

 
    public function mount(){
        $this->itens = Stock::all();
    }

    public function marcarDesmarcar($id)
    {
        $item = Stock::find($id);
        $item->selected = !$item->selected;
        $item->save();
    }

    
 
    public function excluirItensSelecionados()
{
    $itensSelecionados = Stock::where('selected', true)->get();

    if ($itensSelecionados->count() > 0) {
        foreach ($itensSelecionados as $item) {
            // Remover a imagem do Storage, se existir
            if ($item->imagem) {
                Storage::delete($item->imagem);
            }
        }

        // Excluir os registros do banco de dados
        Stock::where('selected', true)->delete();

        // Atualizar a lista de itens após exclusão
        $this->itens = Stock::all();
        $this->mensagem = 'Itens selecionados excluídos com sucesso.';
        $this->tipoMensagem = 'success';
    } else {
        $this->mensagem = 'Nenhum item selecionado para exclusão.';
        $this->tipoMensagem = 'error';
    }
}



 

    public function render()
    {

       $stocks = Stock::all();

     
       $stocks = Stock::search($this->search)
       ->when($this->buscaLinha !== '', function($query){
        $query->where('linha', $this->buscaLinha);
       })
       ->when($this->buscaCor !== '', function($query){
        $query->where('cor', $this->buscaCor);
       })
       ->when($this->buscaLocalizacao !== '', function($query){
        $query->where('loca', $this->buscaLocalizacao);
       })
       ->when($this->buscaId !== '', function($query){
        $query->where('id', $this->buscaId);
       })
       ->orderBy($this->sortBy, $this->sortDir)
       ->paginate($this->perPage);

        return view('livewire.stock-index', compact('stocks'));
    }
}
