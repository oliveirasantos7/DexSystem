


<div class="flex flex-col items-center  mt-5" >

    <div>
        <x-button wire:click="showStockModal" >Novo registro</x-button>

    </div>



    <div class="m-2 p-2 ">

        @if($mensagem)
        <div class="{{ $tipoMensagem === 'success' ? 'bg-white' : 'text-white bg-red-600' }}">
            {{ $mensagem }}
        </div>
    @endif

        <div>
            <section class="mt-10">
                <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                    <!-- Start coding here -->
                    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                        <div class="flex items-center justify-between d p-4">
                            <div class="flex">
                                <div class="relative w-full">
                                    <div class="absolute  inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 flex  text-gray-500 dark:text-gray-400"
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
                                        placeholder="    Buscar" required="">
                                </div>


                               
                            </div>
                            <div class="flex space-x-3">
                                <div class="flex space-x-3 items-center">
                                    <label class="w-40 text-sm font-medium text-white">Selecione uma linha</label>
                                    <select
                                    wire:model.live="buscaLinha"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                        <option value="">Todas as linhas</option>
                                        <option value="Suprema">Suprema</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Integrada">Integrada</option>
                                        <option value="42">42</option>
                                        <option value="25">25</option>
                                        <option value="16">16</option>
                                        <option value="42">42</option>
                                        <option value="Eng. vidro temperado">Eng. vidro temperado</option>
                                        <option value="Box">Box</option>
                                        <option value="Outros">Outros</option>


                                    </select>
                                </div>  
                            </div>


                            <div class="flex space-x-3">
                                <div class="flex space-x-3 items-center">
                                    <label class="w-40 text-sm font-medium text-white">Selecione uma cor</label>
                                    <select
                                    wire:model.live="buscaCor"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                        <option value="">Todas as cores</option>
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
                            </div>

                            <div class="flex space-x-3">
                                <div class="flex space-x-3 items-center">
                                    <label class="w-40 text-sm font-medium text-white">Selecione a localização</label>
                                    <select
                                    wire:model.live="buscaLocalizacao"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                        <option value="">Todas</option>
                                        <option value="A1">A1</option>
                                        <option value="A2">A2</option>
                                        <option value="A3">A3</option>
                                        <option value="A4">A4</option>
                                        <option value="A5">A5</option>
                                        <option value="B1">B1</option>
                                        <option value="B2">B2</option>
                                        <option value="B3">B3</option>
                                        <option value="B4">B4</option>
                                        <option value="B6">B5</option>
                                        <option value="B5">B6</option>
                                        <option value="G1">G1</option>
                                        <option value="G2">G2</option>
                                        <option value="G3">G3</option>
                                        <option value="G4">G4</option>
                                        <option value="G5">G5</option>
                                        <option value="G6">G6</option>
                                        <option value="G7">G7</option>
                                        <option value="G8">G8</option>
                                        <option value="G9">G9</option>
                                        <option value="Não definido">Não definido</option>
 
                                       


                                    </select>
                                </div>  
                            </div>

                        </div>
                        <div class="overflow-x-auto">
                            

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
                                        <th scope="col" class="px-4 py-3">Imagem</th>
                                        <th scope="col" class="px-4 py-3">Perfil</th>
                                        <th scope="col" class="px-4 py-3">Desc</th>
                                        <th scope="col" class="px-4 py-3">Cor</th>
                                        <th scope="col" class="px-4 py-3">Tam</th>
                                        <th scope="col" class="px-4 py-3">Qtd</th>
                                        <th scope="col" class="px-4 py-3">Linha</th>
                                        <th scope="col" class="px-4 py-3">Local</th>
                                        <th scope="col" class="px-4 py-3">Data de reg.</th>
                                        <th scope="col" class="px-4 py-3">Ultima atual</th>
                                        <th scope="col" class="px-4 py-3">
                                            <span class="sr-only">Actions</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($stocks as $stock)

                                    <tr wire:key="{{ $stock->id }}" class="border-b dark:border-gray-700">
                                        
                                        <td class="p-2"><input type="checkbox" wire:click="marcarDesmarcar({{ $stock->id }})" {{ $stock->selected ? 'checked' : '' }}></td>
                                   
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $stock->id }}</th>
                                            <th scope="row"
                                            class="px-4 py-3   font-medium text-gray-900 whitespace-nowrap  dark:text-white">
                                         <img class="" src="{{Storage::url($stock->imagem) }}" alt="">
                                         

                                        

                                         
                                        



                                        </th>
                                        <td class="px-4 py-3 text-green-500">{{ $stock->perfil }}</td>

                                        <td class="px-4 py-3 ">
                                            {{ $stock->descri }}</td>

                                        <td class="px-4 py-3  text-green-500">
                                                {{ $stock->cor }}</td>

                                        <td class="px-4 py-3 text-green-500">{{ $stock->tamanho}}</td>

                                        <td class="px-4 py-3 ">{{ $stock->qtd }}</td>

                                        <td class="px-4 py-3 text-green-500">{{ $stock->linha}}</td>

                                        <td class="px-4 py-3">{{ $stock->loca }}</td>

                                        {{-- <td class="px-4 py-3">{{ $stock->created_at}}</td> --}}
                                        <td class="px-4 py-3 text-green-500">{{ \Carbon\Carbon::parse($stock->created_at)->format('d/m/Y') }}</td>


                                        {{-- <td class="px-4 py-3">{{ $stock->updated_at}}</td> --}}
                                        <td class="px-4 py-3">{{ \Carbon\Carbon::parse($stock->updated_at)->format('d/m/Y') }}</td>

                                        <td class="px-4 py-3 flex items-center justify-end">

                                            {{-- delete --}}
                                            <button onclick="confirm('tem certeza que deseja deletar o item {{$stock->perfil }} com o cod {{ $stock->id }} ?') ? '' : event.stopImmediatePropagation()" wire:click="deleteStock({{ $stock->id }})" class="px-3 p-10 py-1 text-red-500 rounded"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                              </svg>
                                              </button>
                                            -

                                            {{-- edit --}}
                                            <button wire:click="showEditStockModal({{ $stock->id }})"  class="px-3 py-1 mr-10  text-green-500 rounded"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                              </svg>
                                              </button>


                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </form>

                        </div>

                        <div class="py-4 px-3">
                            <div class="flex ">
                                <div class="flex space-x-4 items-center mb-3">
                                    <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                                    <select
                                     wire:model.live='perPage'
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                      
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>

                                
                            </div>


                            {{ $stocks->links()}}

                           

                           
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

    

    <div>
        <x-dialog-modal wire:model="showingStockModal">

            @if ($isEditMode)
            <x-slot name="title">Editar item</x-slot>
           
        @else
            <x-slot name="title">Novo item</x-slot>
        @endif 
            <x-slot name="content"> <form enctype="multipart/form-data">

                <div class="sm:col-span-6">

                    <div class="mt-1">
                        <input
                            type="text"
                            wire:model.lazy="perfil"
                            name="perfil"
                            id="perfil"
                            class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                            placeholder="Perfil" required
                        >
                    </div>

                    @error('perfil')<span class="text-red-400">{{ $message }}</span>@enderror


                </div>

                <div class="sm:col-span-6">

                    <div class="mt-1">
                        <input
                            type="text"
                            wire:model.lazy="tamanho"
                            name="tamanho"
                            id="tamanho"
                            class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                            placeholder="Tamanho"
                            required
                        >
                    </div>

                    @error('tamanho')<span class="text-red-400">{{ $message }}</span>@enderror


                </div>

                <div class="sm:col-span-6">

                    <div class="mt-1">
                        <input
                            type="number"
                            wire:model.lazy="qtd"
                            name="qtd"
                            id="qtd"
                            class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                            placeholder="Quantidade"
                            required
                        >
                    </div>

                    @error('qtd')<span class="text-red-400">{{ $message }}</span>@enderror


                </div>


                <div class="sm:col-span-6 mt-6">
                    <label for="title" class="block text-sm font-medium  text-white">Imagem do perfil</label>
                    @if ($oldImage)

                    Imagem antiga:
                    <img src="{{ Storage::url($oldImage) }}" alt="">
                    @endif

                    @if ($newImage)
                    Imagem selecionada:
                    <img src="{{ $newImage->temporaryUrl() }}" alt="">

                    @endif

                    <div class="mt-1">
                        <input
                            type="file"
                            wire:model.lazy="newImage"
                          
                            name="image"
                            id="image"
                            class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                        >
                    </div>

                    @error('newImage')<span class="text-red-400">{{ $message }}</span>@enderror


                </div>


                <div class="sm:col-span-6 mt-3">

                    <div class="mt-1">
                        <select name="cor" wire:model.lazy="cor" id="cor" class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out">
                            <option value="" hidden>Selecione a cor do item</option>
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

                    @error('cor')<span class="text-red-400">{{ $message }}</span>@enderror


                </div>


                <div class="sm:col-span-6 mt-3">

                    <div class="mt-1">
                        <select name="linha"
                            wire:model.lazy="linha"
                       id="linha" class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out">
                       <option value="" hidden>Selecione uma linha</option>
                        <option value="Suprema">Suprema</option>
                        <option value="Gold">Gold</option>
                        <option value="Integrada">Integrada</option>
                        <option value="42">42</option>
                        <option value="25">25</option>
                        <option value="16">16</option>
                        <option value="42">42</option>
                        <option value="Eng. vidro temperado">Eng. vidro temperado</option>
                        <option value="Box">Box</option>
                        <option value="Outros">Outros</option>



                      </select>
                    </div>

                     @error('linha')<span class="text-red-400">{{ $message }}</span>@enderror 


                </div>

                <div class="sm:col-span-6 mt-3">

                    <div class="mt-1">
                      <select name="loca"
                      wire:model.lazy="loca"
                      id="loc" class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out">
                      <option value="" hidden>Selecione a localização</option>
                        <option value="A1">A1</option>
                        <option value="A2">A2</option>
                        <option value="A3">A3</option>
                        <option value="A4">A4</option>
                        <option value="A5">A5</option>
                        <option value="B1">B1</option>
                        <option value="B2">B2</option>
                        <option value="B3">B3</option>
                        <option value="B4">B4</option>
                        <option value="B6">B5</option>
                        <option value="B5">B6</option>
                        <option value="G1">G1</option>
                        <option value="G2">G2</option>
                        <option value="G3">G3</option>
                        <option value="G4">G4</option>
                        <option value="G5">G5</option>
                        <option value="G6">G6</option>
                        <option value="G7">G7</option>
                        <option value="G8">G8</option>
                        <option value="G9">G9</option>
                        <option value="Não definido">Não definido</option>

                      </select>
                    </div>

                    @error('loca')<span class="text-red-400">{{ $message }}</span>@enderror


                </div>

                <div class="sm:col-span-6 pt-5">

                    <div class="mt-1">
                        <textarea
                            name="descri"
                            id="desc"
                            wire:model.lazy="descri"
                            class="shadow-sm focus:ring-indigo-500 appearance-none block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                            placeholder="Descrição"
                        ></textarea>
                    </div>
                </div>


            </form></x-slot>
            {{-- @endif --}}


            <x-slot name="footer"> 
            @if ($isEditMode)
            <x-button wire:click="updateStock" name="title">Salvar alterações</x-button> 
        @else
            <x-button wire:click="storeStock" name="title">Novo item</x-button>
        @endif 
            </x-slot>
        </x-dialog-modal>
    </div>
    
    <script>
        // JavaScript para manipular a visibilidade do dropdown
        const dropdownButton = document.getElementById('dropdown-button');
        const dropdownMenu = document.getElementById('dropdown-menu');
    
        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    
        // Fechar o dropdown ao clicar fora dele
        document.addEventListener('click', (event) => {
            if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    </script> 

</div>



