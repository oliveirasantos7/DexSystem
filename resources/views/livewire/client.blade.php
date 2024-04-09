<div class="flex flex-col items-center mt-5 px-3">
    @if (session()->has('message'))
    <div>{{ session('message') }}</div>
@endif

    {{-- -----------------botão modal-------------------------------- --}}

    <div>
        <x-button wire:click="showStockModal">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
            Novo Cliente</x-button>
        {{-- <x-button wire:click="showNoteModal" >Criar nota</x-button> --}}
    </div>

    {{-- -----------------card de cliente-------------------------------- --}}

    @foreach ($clientsReturn as $client)
        
   
    <div style="background-color: rgb(30 41 59);" class="max-w-md w-full rounded-lg overflow-hidden shadow-lg mt-5 ">
        <div class="px-6 py-4">

            <div class="flex justify-between items-center mb-4">
                <div class="font-bold text-xl"></div>
               
            </div>
            <div class="font-bold text-2xl mb-2 text-gray-200">{{ $client->name }}</div>
            <p class="text-gray-200 text-base mb-2">Cod: {{ $client->id }}</p>
            <p class="text-gray-200 text-base mb-2">Endereço: {{ $client->street }} {{ $client->number }} {{ $client->district }} {{ $client->city }} {{ $client->uf }} </p>
            <p class="text-gray-200 text-base mb-2">Cep: {{ $client->cep }}</p>
            <p class="text-gray-200 text-base mb-2">Email: {{ $client->email }}</p>
            <p class="text-gray-200 text-base mb-2">Telefone: {{ $client->phone }}</p>
            <p class="text-gray-200 text-base">Referência: {{ $client->ref }}.</p>
            <p class="text-gray-200 text-base">Obs: {{ $client->obs }}</p>

        </div>

        <div class="flex justify-end">

            <div class="p-4">
               
                <x-button wire:click="newProject">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                    Novo Projeto</x-button>
               
          
            </div>

               {{-- delete --}}
               <button onclick="confirm('tem certeza que deseja deletar o cliente {{$client->name }} com o cod {{ $client->id }} ?') ? '' : event.stopImmediatePropagation()" wire:click="deleteClient({{ $client->id }})" class="px-3 p-10 py-1 text-red-500 rounded"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
              </svg>
              </button>
            -

           {{-- edit --}}
           <button wire:click="showEditClientModal({{ $client->id }})"  class="px-3 py-1 mr-10  text-green-500 rounded"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
               <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
             </svg>
             </button>

           
       </div>
    </div>
    @endforeach
    
   
      {{-- -----------------modal cadastro cliente-------------------------------- --}}

      <div>
        <x-dialog-modal wire:model="showingClientModal">
            @if ($isEditMode)
            <x-slot name="title">Editar cliente</x-slot>
        @else
            <x-slot name="title">Cadastrar novo cliente</x-slot>
            @endif 
        
            <x-slot name="content"> 
                <form enctype="multipart/form-data" >
                    @csrf

                    <div style="margin-bottom: 24px" class="">

                <div class="sm:col-span-6">

                    <div class="mt-1">
                        <input
                            type="text"
                            wire:model.lazy="name"
                            name="name"
                            id="name"
                            class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                            placeholder="Nome completo" required
                        >
                    </div>
                    @error('perfil')<span class="text-red-400">{{ $message }}</span>@enderror




                </div>

                <div class="sm:col-span-6">

                    <div class="mt-1">
                        <input
                            type="text"
                            wire:model.lazy="phone"
                            name="phone"
                            id="phone"
                            class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                            placeholder="Telefone para contato"
                            >
                    </div>

                </div>

                <div class="sm:col-span-6">

                    <div class="mt-1">
                        <input
                            type="email"
                            wire:model.lazy="email"
                            name="email"
                            id="email"
                            class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                            placeholder="E-mail"
                            
                        >
                    </div>



                </div>

                <div class="sm:col-span-6">

                    <div class="mt-1">
                        <input
                            type="number"
                            wire:model.lazy="cpf"
                            name="cpf"
                            id="cpf"
                            class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                            placeholder="Cpf"
                           
                        >
                    </div>



                </div>

                <div class="sm:col-span-6">

                    <div class="mt-1">
                        <input
                            type="number"
                            wire:model.lazy="ref"
                            name="ref"
                            id="ref"
                            class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                            placeholder="REF"
                            >
                    </div>
                </div>  

            </div>



                <div class="sm:col-span-6 flex">

                    <div class="mt-1 ">
                        <input
                            type="number"
                            wire:model.lazy="cep"
                            name="cep"
                            id="cep"
                            class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                            placeholder="Cep"
                            
                        >
                    </div>




                </div>

                <div class="sm:col-span-6 flex justify-between">

                    <div class="mt-1  ">
                        <input
                        
                        style="width: 400px"
                            type="text"
                            wire:model.lazy="city"
                            name="city"
                            id="city"
                            class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out "
                            placeholder="Cidade"
                            
                        >
                    </div>

                    <div class="mt-1">
                        <select name="uf"
                        wire:model.lazy="uf"
                        id="uf" class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out">
                        <option value="" hidden>UF</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                        <option value="Não definido">Não definido</option>
                        
  
                        </select>
                      </div>



                </div>


                <div class="sm:col-span-6 flex justify-between">

                    <div class="mt-1  ">
                        <input
                        
                        style="width: 400px"
                            type="text"
                            wire:model.lazy="street"
                            name="street"
                            id="street"
                            class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out "
                            placeholder="Rua"
                            
                        >
                    </div>

                    <div class="mt-1">
                        <input
                            type="number"
                            wire:model.lazy="number"
                            name="number"
                            id="number"
                            class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                            placeholder="Nro"
                            
                        >
                    </div>



                </div>

                <div class="sm:col-span-6 flex justify-between">

                    <div class="mt-1  ">
                        <input
                        
                        style="width: 400px"
                            type="text"
                            wire:model.lazy="adjunct"
                            name="adjunct"
                            id="adjunct"
                            class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out "
                            placeholder="Complemento"
                            
                        >
                    </div>

                    <div class="mt-1">
                        <input
                            type="text"
                            wire:model.lazy="district"
                            name="district"
                            id="district"
                            class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                            placeholder="Bairro"
                            
                        >
                    </div>



                </div>



             

               





                <div class="sm:col-span-6 pt-5">

                    <div class="mt-1">
                        <textarea
                            name="obs"
                            id="obs"
                            wire:model.lazy="obs"
                            class="shadow-sm focus:ring-indigo-500 appearance-none block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                            placeholder="Observações"
                        ></textarea>
                    </div>
                </div>


            </form></x-slot>
            {{-- @endif --}}


            <x-slot name="footer"> 
      
                @if ($isEditMode)
                <x-button wire:click="updateClient" name="title">Salvar alterações</x-button> 
            @else
            <x-button wire:click="storeClient" name="title">Novo Cliente</x-button>
            @endif 
        
            </x-slot>
        </x-dialog-modal>

    </div>
    {{-- -----------------fim modal-------------------------------- --}}
  

</div>




