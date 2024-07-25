<div class="flex flex-col items-center mt-5 px-3">

    {{-- -----------------botão modal-------------------------------- --}}
    <div style="background-color: rgb(30 41 59);" class="max-w-md w-full rounded-lg overflow-hidden shadow-lg mt-5 ">
        <div class="px-6 py-4 bg-gray-800 dark:bg-gray-700">
            <div class="flex">
                <div class="relative w-full">
                    <div class="absolute  inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-4 h-4 flex  text-gray-500 dark:text-gray-400"
                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input 
                    wire:model.live.debounce.300ms = "search"
                    type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                        placeholder="Buscar cliente" required="">
    
                        
                </div>
    
    
                <div class="relative w-full ml-2">
                    <div class="absolute  inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-4 h-4 flex  text-gray-500 dark:text-gray-400"
                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input 
                    wire:model.live="buscaId"
                    type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                        placeholder="Buscar Cod ou referencia" required="">
                </div>
            </div>
            
        </div>

       

       
    </div>

 

 

    {{-- -----------------card de cliente-------------------------------- --}}

    <div style="background-color: rgb(30 41 59);" class="max-w-md w-full rounded-lg overflow-hidden shadow-lg mt-5 ">
        <div class="px-6 py-4 bg-gray-800 dark:bg-gray-700">

            
            <div class="flex justify-items-start items-center mb-6">
                <div>
                    <img style="max-width: 80px; max-height: 80px;" class="object-cover" src="{{ $project->image }}" alt="">
                    </div>
              
                     <h2 style="margin-left: 40px" class="text-xl font-semibold text-white ">{{ $project->item }}- Cod: {{ $project->id }} - Ref: {{ $project->ref }}</h2>
                     <h2 style="margin-left: 40px" class="text-xl font-semibold text-white ">{{ $client->name }} - Cod: {{ $client->id }}</h2>
            </div>
            

          <div class="flex justify-between">
              <div class="box 1">

                <div class="flex items-center">
                    <h2 class="text-xl font-semibold text-white">Linha: </h2>
                    <span class="text-md font-semibold text-white ml-2 mt-1">  {{ $project->line }}</span>
    
                </div>
           
            <div class="flex items-center">
                <h2 class="text-xl font-semibold text-white">Cor esquadria: </h2>
                <span class="text-md font-semibold text-white ml-2 mt-1">  {{ $project->color_esquadrias }}</span>

            </div>

            <div class="flex items-center">
                <h2 class="text-xl font-semibold text-white">Cor acessorios: </h2>
                <span class="text-md font-semibold text-white ml-2 mt-1">  {{ $project->color_acessorio }}</span>

            </div>

            <div class="flex items-center">
                <h2 class="text-xl font-semibold text-white">Tipo vidro: </h2>
                <span class="text-md font-semibold text-white ml-2 mt-1">{{ $project->type_glass }}</span>

            </div>

        </div>


        <div class="box 2">

           
            <div class="flex items-center">
                <h2 class="text-xl font-semibold text-white">Com contramarco: </h2>
                <span class="text-md font-semibold text-white ml-2 mt-1">{{ $project->contramarco }}</span>

            </div>

            <div class="flex items-center">
                <h2 class="text-xl font-semibold text-white">Quantidade: </h2>
                <span class="text-md font-semibold text-white ml-2 mt-1">{{ $project->qtd }}</span>

            </div>

          

        </div>



        <div class="box 2">

           
            <div class="flex items-center">
                <h2 class="text-xl font-semibold text-white">Largura: </h2>
                <span class="text-md font-semibold text-white ml-2 mt-1">{{ $project->width }}(mm)</span>

            </div>

            <div class="flex items-center">
                <h2 class="text-xl font-semibold text-white">Altura: </h2>
                <span class="text-md font-semibold text-white ml-2 mt-1">{{ $project->height }}(mm)</span>

            </div>

            <div class="flex items-center">
                <h2 class="text-xl font-semibold text-white">Localização: </h2>
                <span class="text-md font-semibold text-white ml-2 mt-1">{{ $project->local }} </span>

            </div>

        </div>
      </div>


            

        </div>


      


        <div class="flex justify-end">

            <div class="p-4">
                  <!-- edit -->
                  <button  class="px-3 py-1 mr-10  text-green-500 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                </button>
                {{-- <x-button wire:click="showStockModal">Novo Projeto</x-button> --}}
                {{-- <x-button wire:click="showNoteModal" >Criar nota</x-button> --}}

            </div>

          
           

           

           
       </div>
    </div>

{{-- -------------------------------------lista de corte--------------------------------------------------- --}}
    <div style="background-color: rgb(30 41 59);" class="max-w-md w-full rounded-lg overflow-hidden shadow-lg mt-5 ">
        <div class="px-6 py-4 bg-gray-800 dark:bg-gray-700 flex justify-center">
            <h2 class="text-xl font-semibold text-white">Listagem de corte</h2>
        </div>

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
        
                    <th scope="col" class="px-4 py-3" >
                        <div class="relative inline-block text-left">
                            <button type="button" class="inline-flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring focus:border-blue-300 focus:ring-blue-200 active:bg-gray-200 active:text-gray-800" id="dropdown-button" aria-haspopup="true" aria-expanded="true">
                                ...
                                
                            </button>
                        
                            <!-- Itens do Dropdown -->
                            <div class="origin-top-right absolute right-15 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden" id="dropdown-menu">
                                <div class="py-1">
                                    <button type="submit"  wire:click="excluirItensSelecionados" value="apagar" class="block px-4 py-2 text-sm text-red-500 hover:bg-gray-100 hover:text-red-900">Deletar selecionados</a>
                                    
                                </div>
                            </div>

                           
                        </div>
                        
                     
                        </th>
                    
                    <th scope="col" class="px-4 py-3" >Perfil</th>
                    <th scope="col" class="px-4 py-3"></th>
                    <th scope="col" class="px-4 py-3" >Descrição do perfil</th>
                    <th scope="col" class="px-4 py-3">Qtd</th>
                    <th scope="col" class="px-4 py-3">Tamanho (Mm)</th>
                    <th scope="col" class="px-4 py-3">Pos</th>
                    <th scope="col" class="px-4 py-3">Corte</th>
                    <th scope="col" class="px-4 py-3">Qtd total</th>
                    <th scope="col" class="px-4 py-3">Qtd barras</th>
                    <th scope="col" class="px-4 py-3">Peso total</th>
                    <th scope="col" class="px-4 py-3">Peso total por barras</th>
                    <th scope="col" class="px-4 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>

            <tbody>
                
                   @foreach ($cuttingDesign as $cd)
                       
                        <tr wire:key="" class="border-b dark:border-gray-700" onclick="window.location='{{ route('dashboard') }}';" style="cursor:pointer;">
                        <td class="p-2"><input type="checkbox" ></td>
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $cd->profile }}</th>
                        <th scope="row" class="px-4 py-3 h-96 w-96  font-medium text-gray-900 whitespace-nowrap  dark:text-white">
                            <a href="{{ $cd->image }}">
                        <img style="max-width: 60px; max-height: 60px;" class="object-cover" src="{{ $cd->image }}" alt="">
                    </a>
                        </th>

                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $cd->descri_profile }}</th>
                        
                        <td class="px-4 py-3 text-green-500">{{ $cd->qtd_profile }}</td>
                        <td class="px-4 py-3  text-green-500">{{ $cd->size }}</td>
                        <td class="px-4 py-3 text-green-500">{{ $cd->pos }}</td>
                        <td class="px-4 py-3 text-green-500">{{ $cd->cut }}</td>
                        <td class="px-4 py-3 ">{{ $cd->qtd_mt }}</td>
                        <td class="px-4 py-3 text-green-500">{{ $cd->qtd_bars }}</td>
                        <td class="px-4 py-3 text-green-500">{{ $cd->weight_mt }}</td>
                        <td class="px-4 py-3 text-green-500">{{ $cd->weight_bars }}</td>
                      {{-- 
                        <td class="px-4 py-3 flex items-center justify-end">
                            <!-- delete -->
                            <button class="px-3 p-10 py-1 text-red-500 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                            <!-- edit -->
                            <button  class="px-3 py-1 mr-10  text-green-500 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </button>
                        </td> --}}
                    </tr>

                   @endforeach


                    



                   
            </tbody>
        </table>
        <div class="flex justify-end">

            <div class="p-4">
                <x-button wire:click="SearchStock({{ $project->id }})">Buscar no estoque <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm3.75 11.625a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                  </svg>
                  </x-button>
                {{-- <x-button wire:click="showNoteModal" >Criar nota</x-button> --}}
            </div> 

            <div class="p-4">
                <x-button wire:click="showStockModal">Imprimir
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                      </svg>
                      
                  </x-button>
                {{-- <x-button wire:click="showNoteModal" >Criar nota</x-button> --}}
            </div> 

          
              
       </div>
    </div>
{{-- -------------------------------------  fim da lista de corte--------------------------------------------------- --}}

{{-- -------------------------------------lista de componente--------------------------------------------------- --}}
<div style="background-color: rgb(30 41 59);" class="max-w-md w-full rounded-lg overflow-hidden shadow-lg mt-5 ">
    <div class="px-6 py-4 bg-gray-800 dark:bg-gray-700 flex justify-center">
        <h2 class="text-xl font-semibold text-white">Listagem de componentes</h2>
    </div>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
    
                <th scope="col" class="px-4 py-3" >
                    <div class="relative inline-block text-left">
                        <button type="button" class="inline-flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring focus:border-blue-300 focus:ring-blue-200 active:bg-gray-200 active:text-gray-800" id="dropdown-button" aria-haspopup="true" aria-expanded="true">
                            ...
                            
                        </button>
                    
                        <!-- Itens do Dropdown -->
                        <div class="origin-top-right absolute right-15 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden" id="dropdown-menu">
                            <div class="py-1">
                                <button type="submit"  wire:click="excluirItensSelecionados" value="apagar" class="block px-4 py-2 text-sm text-red-500 hover:bg-gray-100 hover:text-red-900">Deletar selecionados</a>
                                
                            </div>
                        </div>

                       
                    </div>
                    
                 
                    </th>
                
                <th scope="col" class="px-4 py-3" >Componente</th>
                <th scope="col" class="px-4 py-3"></th>
                <th scope="col" class="px-4 py-3">Quantidade</th>
                <th scope="col" class="px-4 py-3">Descrição</th>
                
                <th scope="col" class="px-4 py-3">
                    <span class="sr-only">Actions</span>
                </th>
            </tr>
        </thead>
        <tbody>
            
               
                   


            @foreach ($components as $component)
                
                <tr wire:key="" class="border-b dark:border-gray-700" onclick="window.location='{{ route('dashboard') }}';" style="cursor:pointer;">
                    <td class="p-2"><input type="checkbox" ></td>
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $component->component }}</th>
                    <th scope="row" class="px-4 py-3 h-96 w-96  font-medium text-gray-900 whitespace-nowrap  dark:text-white">
                    <img style="max-width: 60px; max-height: 60px;" class="object-cover" src="{{ $component->img }}" alt="">

                    </th>

                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $component->qtd }}</th>
                    
                    <td class="px-4 py-3 text-green-500">{{ $component->descri }}</td>
                  
                  {{-- 
                    <td class="px-4 py-3 flex items-center justify-end">
                        <!-- delete -->
                        <button class="px-3 p-10 py-1 text-red-500 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>
                        <!-- edit -->
                        <button  class="px-3 py-1 mr-10  text-green-500 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        </button>
                    </td> --}}
                </tr>

            @endforeach

             

              
                



               
        </tbody>
    </table>
    <div class="flex justify-end">

        <div class="p-4">
            <x-button wire:click="showStockModal">Buscar no estoque <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm3.75 11.625a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
              </svg>
              </x-button>
            {{-- <x-button wire:click="showNoteModal" >Criar nota</x-button> --}}
        </div> 

        <div class="p-4">
            <x-button wire:click="showStockModal">Imprimir
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                  </svg>
                  
              </x-button>
            {{-- <x-button wire:click="showNoteModal" >Criar nota</x-button> --}}
        </div> 

      
          
   </div>
</div>
{{-- -------------------------------------fim lista de componentes--------------------------------------------------- --}}

{{-- ------------------------------------- lista de vidros--------------------------------------------------- --}}

<div style="background-color: rgb(30 41 59);" class="max-w-md w-full rounded-lg overflow-hidden shadow-lg mt-5 ">
    <div class="px-6 py-4 bg-gray-800 dark:bg-gray-700 flex justify-center">
        <h2 class="text-xl font-semibold text-white">Listagem de vidros</h2>
    </div>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
    
                <th scope="col" class="px-4 py-3" >
                    <div class="relative inline-block text-left">
                        <button type="button" class="inline-flex justify-center items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring focus:border-blue-300 focus:ring-blue-200 active:bg-gray-200 active:text-gray-800" id="dropdown-button" aria-haspopup="true" aria-expanded="true">
                            ...
                            
                        </button>
                    
                        <!-- Itens do Dropdown -->
                        <div class="origin-top-right absolute right-15 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden" id="dropdown-menu">
                            <div class="py-1">
                                <button type="submit"  wire:click="excluirItensSelecionados" value="apagar" class="block px-4 py-2 text-sm text-red-500 hover:bg-gray-100 hover:text-red-900">Deletar selecionados</a>
                                
                            </div>
                        </div>

                       
                    </div>
                    
                 
                    </th>
                
                <th scope="col" class="px-4 py-3" >Tipo de vidro</th>
                <th scope="col" class="px-4 py-3">Largura</th>
                <th scope="col" class="px-4 py-3">Altura</th>
                <th scope="col" class="px-4 py-3">Quantidade</th>

                
                <th scope="col" class="px-4 py-3">
                    <span class="sr-only">Actions</span>
                </th>
            </tr>
        </thead>
        <tbody>
            
               
                   
            @foreach ($glasses as $glass)
                

                <tr wire:key="" class="border-b dark:border-gray-700" onclick="window.location='{{ route('dashboard') }}';" style="cursor:pointer;">
                    <td class="p-2"><input type="checkbox" ></td>
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $glass->type_glss }}</th>
                   

                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $glass->width }}</th>
                    
                    <td class="px-4 py-3 text-green-500">{{ $glass->height }}</td>
                    <td class="px-4 py-3 text-green-500">{{ $glass->qtd }}</td>

                  
                  {{-- 
                    <td class="px-4 py-3 flex items-center justify-end">
                        <!-- delete -->
                        <button class="px-3 p-10 py-1 text-red-500 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>
                        <!-- edit -->
                        <button  class="px-3 py-1 mr-10  text-green-500 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        </button>
                    </td> --}}
                </tr>
             
            @endforeach


                

                
                



               
        </tbody>
    </table>
    <div class="flex justify-end">

        <div class="p-4">
            <x-button wire:click="showStockModal">Buscar no estoque <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm3.75 11.625a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
              </svg>
              </x-button>
            {{-- <x-button wire:click="showNoteModal" >Criar nota</x-button> --}}
        </div> 

        <div class="p-4">
            <x-button wire:click="showStockModal">Imprimir
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                  </svg>
                  
              </x-button>
            {{-- <x-button wire:click="showNoteModal" >Criar nota</x-button> --}}
        </div> 

      
          
   </div>
</div>
{{-- -------------------------------------fim lista de vidros--------------------------------------------------- --}}





   
</div>





