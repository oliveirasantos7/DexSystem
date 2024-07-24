<div class="flex flex-col items-center mt-5 px-3">

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

   
    @foreach ($clientes as $cliente)

    @if ($cliente->projetos->isNotEmpty())
   
        
        
    <div style="background-color: rgb(30 41 59);" class="max-w-md w-full rounded-lg overflow-hidden shadow-lg mt-5 ">
        <div class="px-6 py-4 bg-gray-800 dark:bg-gray-700">
            <h2 class="text-xl font-semibold text-white">{{ $cliente->name }} - Código: {{ $cliente->id }} - Referência: {{ $cliente->ref }}</h2>
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
                    
                    <th scope="col" class="px-4 py-3" >Cod</th>
                    <th scope="col" class="px-4 py-3" >Ref</th>
                    <th scope="col" class="px-4 py-3">Imagem</th>
                    <th scope="col" class="px-4 py-3">Item</th>
                    <th scope="col" class="px-4 py-3">Cor</th>
                    <th scope="col" class="px-4 py-3">Largura</th>
                    <th scope="col" class="px-4 py-3">Altura</th>
                    <th scope="col" class="px-4 py-3">Qtd</th>
                    <th scope="col" class="px-4 py-3">Linha</th>
                    <th scope="col" class="px-4 py-3">Data de criação</th>
                   
                    <th scope="col" class="px-4 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>

          
            <tbody>
                
             @foreach ($cliente->projetos as $project)
                 
                        <tr  wire:key="{{ $project->id }}" class="border-b dark:border-gray-700 " onclick="window.location='{{ route('projetos.details', ['id' => $project->id]) }}';" style="cursor:pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='rgba(0, 0, 0, 0.1)';" onmouseout="this.style.backgroundColor='transparent';">
                        <td class="p-2"><input type="checkbox" ></td>
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $project->id }}</th>
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $project->ref }}</th>
                        <th scope="row" class="px-4 py-3 h-96 w-96  font-medium text-gray-900 whitespace-nowrap  dark:text-white">
                            <img style="max-width: 80px; max-height: 80px;" class="object-cover" src="{{ $project->image }}" alt="">
                        </th>
                        <td class="px-4 py-3 text-green-500">{{ $project->item }}</td>
                        <td class="px-4 py-3  text-green-500">{{ $project->color_esquadrias }}</td>
                        <td class="px-4 py-3 text-green-500">{{ $project->width }}</td>
                        <td class="px-4 py-3 text-green-500">{{ $project->height }}</td>
                        <td class="px-4 py-3 ">{{ $project->qtd }}</td>
                        <td class="px-4 py-3 text-green-500">{{ $project->line }}</td>
                        <td class="px-4 py-3 text-green-500">{{ $project->created_at }}</td>
                        <td class="px-4 py-3 flex items-center justify-end">
                            <!-- delete -->
                            <button wire:click="deleteProject({{ $project->id }})" class="px-3 p-10 py-1 text-red-500 rounded" onclick="event.stopPropagation(); confirm('tem certeza que deseja deletar o projeto {{$project->id }} - {{ $project->item }} ?') ? '' : event.stopImmediatePropagation()" >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                            <!-- edit -->
                            <button  wire:click="showEditModal({{ $project->id }})" class="px-3 py-1 mr-10  text-green-500 rounded" onclick="event.stopPropagation();">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </button> 

                              {{-- <button  wire:click="editProject({{ $project->id }})" class="px-3 py-1 mr-10  text-green-500 rounded" onclick="event.stopPropagation();">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </button> --}}
                        </td>
                    </tr>
             @endforeach

            </tbody>
            
        
        </table>


        <div class="flex justify-end">

            <div class="p-4">
                <x-button wire:click="newProject({{ $cliente->id }})">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                    Novo Projeto</x-button>
                {{-- <x-button wire:click="showNoteModal" >Criar nota</x-button> --}}
            </div>

          
           

           

           
       </div>
    </div>

    @endif

    @endforeach



 
   {{-- -------------modal--------------------- --}}

   <div>
    <x-dialog-modal wire:model="showingModal">
            
         
        @if ($isEditMode)
        <x-slot name="title">{{ $this->item }}</x-slot>
    @else
        <x-slot name="title">Cadastrar novo cliente</x-slot>
        @endif 
           

            
        <x-slot name="content">
                    <div  style="margin-bottom: 8px" class=" mb-2 flex itens-center rounded-md ">
                        <img style="width: 150px"  class="rounded-md" src="{{ $this->image }}" alt="Product Image" alt="">
                
                        <div class="h-2 flex justify-center">
                        </div>
                    </div>

            <form enctype="multipart/form-data" >
                        @csrf
                <div style="margin-bottom: 24px" class="">
                    <div class="sm:col-span-6 flex w-full">

                        <div class="mt-1">
                                <input
                                    type="number"
                                    wire:model.lazy="width"
                                    name="width"
                                    id="width"
                                    class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                                    placeholder="Largura (mm)" required>
                        </div>

                            @error('perfil')<span class="text-red-400">{{ $message }}</span>@enderror
            
                        <div class="mt-1 ml-3">
                                <input
                                    type="number"
                                    wire:model.lazy="height"
                                    name="height"
                                    id="height"
                                    class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                                    placeholder="Altura" required>
                        </div>
                            @error('perfil')<span class="text-red-400">{{ $message }}</span>@enderror
            
                        <div class="mt-1 ml-3">
                                <input
                                    type="number"
                                    wire:model.lazy="qtd"
                                    name="qtd"
                                    id="qtd"
                                    class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                                    placeholder="Quantidade" required>
                        </div>
                            @error('perfil')<span class="text-red-400">{{ $message }}</span>@enderror
                    </div>
                </div>


                    <div class="mt-1">
                        <select name="color_esquadrias" wire:model.lazy="color_esquadrias" id="cor" class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out">
                            <option value="" hidden>Cor do aluminio</option>
                            <option value="branco">Branco</option>
                            <option value="Preto Pintado">Preto Pintado</option>
                            <option value="Preto Anodizado">Preto Anodizado</option>
                            <option value="Bronze Pintado">Bronze Pintado</option>
                            <option value="Bronze Anodizado">Bronze Anodizado</option>
                            <option value="Bronze 1001">Bronze 1001</option>
                            <option value="Brilhante">Brilhante</option>
                            <option value="Fosco">Fosco</option>
                            <option value="Natural">Natural</option>
                            <option value="Dourado">Dourado</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </div>

                    <div class="mt-1">
                        <select name="color_acessorio"
                            wire:model.lazy="color_acessorio"
                            id="color_acessorio" class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out">
                                <option value="" hidden>Cor acessorios</option>
                                <option value="Branco">Branco</option>
                                <option value="Preto">Preto</option>
                                <option value="Outros">Outros</option>
                    </select>
                    </div>

                
                        
                    <div class="mt-1">
                        <select name="type_glass"
                            wire:model.lazy="type_glass"
                            id="type_glass" class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out">
                            <option value="" hidden>Vidro</option>
                            <option >Incolor 4mm comum</option>
                            <option >Incolor 6mm comum</option>
                            <option >Incolor 6 temperado</option>
                            <option >Incolor 6mm laminado</option>

                            <option>Verde 4mm comum</option>
                            <option>Verde 6mm comum</option>
                            <option >Verde 6 temperado</option>
                            <option >Verde 6mm laminado</option> 
                            <option>Outros</option>



                        </select>
                    </div>


                    <div class="mt-1">
                        <select name="contramarco"
                            wire:model.lazy="contramarco"
                            id="contamarco" class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out">
                            <option value="" hidden>Contramarco</option>
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                    


                 

                    <div class="sm:col-span-6 flex justify-between">

                        <div class="mt-1  ">
                            <input
                                style="width: 400px"
                                type="text"
                                wire:model.lazy="ref"
                                name="ref"
                                id="ref"
                                class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out "
                                placeholder="REF">
                        </div>
                    </div>


                    <div class="sm:col-span-6 flex justify-between">

                        <div class="mt-1">
                            <input
                                style="width: 400px"
                                type="text"
                                wire:model.lazy="local"
                                name="local"
                                id="local"
                                class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out "
                                placeholder="Localização">
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

            </form>
        </x-slot>

        <x-slot name="footer">
                @if ($isEditMode)
                <x-button wire:click="updateProject" name="title">Salvar alterações</x-button> 
            @else
            <x-button wire:click="storeClient" name="title">Novo Cliente</x-button>
            @endif 
        </x-slot>

    </x-dialog-modal>
</div>
{{-- -------------modal--------------------- --}}



 


 
   
</div>




