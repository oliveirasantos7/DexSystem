<?php

namespace App\Livewire;

use App\Models\Client as ModelsClient;
use App\Models\Client;
use Livewire\Component;


class ClientIndex extends Component
{

        public $clients;
        public $id;
        public  $name;
        public  $phone;
        public  $email;
        public  $cpf;
        public  $ref;
        public  $cep;
        public  $city;
        public  $street;
        public  $uf;
        public  $number;
        public  $district;
        public  $adjunct;
        public  $obs;
        public $showingClientModal = false;
        public $isEditMode = false;
        public $isDeleteMode = false;

        public $clienteId;

    public function showStockModal(){

        $this->reset();
        $this->showingClientModal = true;
    }

    
    public function storeClient(){

        $this->validate([
            // 'newImage' => 'image|max:1024',
            'name' => 'required',
          
        ]);

        

       Client::create([
           'name' => $this->name,
           'phone'=> $this->phone,
           'email'=> $this->email,
           'cpf'=> $this->cpf,
           'ref'=> $this->ref,
           'cep'=> $this->cep,
           'city'=> $this->city,
           'street'=>$this->street,
           'uf'=> $this->uf,
           'number'=> $this->number,
           'district'=> $this->district,
           'adjunct'=> $this->adjunct,
           'obs'=> $this->obs
        ]);
        $this->reset();
    }

    public function showEditClientModal($id){
        $this->clients = Client::findOrFail($id); 
        $this->name  = $this->clients->name;
        $this->phone  = $this->clients->phone;
        $this->email  = $this->clients->email;
        $this->cpf  = $this->clients->cpf;
        $this->ref  = $this->clients->ref;
        $this->cep = $this->clients->cep;
        $this->city  = $this->clients->city;
        $this->street  = $this->clients->street;
        $this->uf  = $this->clients->uf;
        $this->number  = $this->clients->number;
        $this->district  = $this->clients->district;
        $this->adjunct  = $this->clients->adjunct;
        $this->obs  = $this->clients->obs;
        $this->showingClientModal = true;
        $this->isEditMode = true;
    }

    public function updateClient(){

        $this->validate([
            'name' => 'required',
        ]);

        $this->clients->update([
             'name'=> $this->name,
             'phone'=> $this->phone,
             'email'=> $this->email,
             'cpf'=> $this->cpf,
             'ref'=> $this->ref,
             'cep'=> $this->cep,
             'city'=> $this->city,
             'street'=> $this->street,
             'uf'=> $this->uf,
             'number'=> $this->number,
             'district'=> $this->district,
             'adjunct'=> $this->adjunct,
             'obs'=> $this->obs, 
         ]);
         $this->reset();
    }


    public function deleteClient($id){
        $clientDelete = Client::findOrfail($id);

      
        $clientDelete->delete();
        $this->reset();
    }


    public function newProject($clienteId){
       
        $this->clienteId = $clienteId;
        return redirect()->route('projetos.novo', ['cliente_id' => $clienteId]);
        
        // $this->redirect(route('projetos.novo'));
    }

 

    public function render()
    {

        // $clientsReturn = Client::all();
        $clientsReturn = Client::orderByDesc('id')->get();

        return view('livewire.client', compact('clientsReturn'));
    }
}
