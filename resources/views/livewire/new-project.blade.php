

{{-- -------------page--------------------- --}}
<div class="flex flex-col  mt-4 px-3">

    <div style="background-color: rgb(30 41 59);" class="max-w-md w-full rounded-lg overflow-hidden shadow-lg mt-5 ">
        <div class="px-6 py-4 bg-gray-800 dark:bg-gray-700">
            <div class="flex">
                <div class="relative ">
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
                        placeholder="Buscar tipologia" required="">
    
                        
                </div>
    
    
              

                <div class="flex space-x-3">
                    <div class="flex space-x-3 items-center">
                        <label class="w-40 text-sm font-medium text-white"></label>
                        <select
                        wire:model.live="buscaCor"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option value="">Filtrar linha</option>
                            <option value="branco">Suprema </option>
                            <option value="Preto Pintado">Gold</option>
                            <option value="Preto Anodizado">Integrada</option>
                            <option value="Bronze Pintado">25</option>
                            <option value="Bronze Anodizado">42</option>
                        </select>
                    </div>  
                </div>


                <div class="flex space-x-3">
                    <div class="flex space-x-3 items-center">
                        <label class="w-40 text-sm font-medium text-white"></label>
                        <select
                        wire:model.live="buscaCor"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option value="">Filtrar categoria</option>
                            <option value="branco">Janelas</option>
                            <option value="Preto Pintado">Portas</option>
                            <option value="Preto Anodizado">Portões</option>
                            <option value="Bronze Pintado">Portinholas</option>
                            <option value="Bronze Anodizado">Grades</option>
                            <option value="Bronze 1001">Coberturas</option>
                        </select>
                    </div>  
                </div>

            </div>
            
        </div>

        

       

       
    </div>
    

    {{-- -------------titulo--------------------- --}}

        {{-- <div style="background-color: rgb(30 41 59);" class="max-w-md w-full rounded-lg overflow-hidden shadow-lg mt-5 ">
            <div class="px-6 py-4 bg-gray-800 dark:bg-gray-700">
                <h2 class="text-xl font-semibold text-white"></h2>
            </div>
        </div> --}}

    {{-- -------------titulo--------------------- --}}


    {{-- -------------modelos--------------------- --}}

        <div class="flex flex-wrap justify-center ">

            @foreach ($tipologies as $tipology)
            <button wire:click="showModal('{{ $tipology->model }}', '{{ $cliente_id }}', '{{ $tipology->line }}')"  class="px-4 py-4 rounded-md">
                <div  class="bg-white w-80 h-28 rounded-md ">
                        <img style="max-width: 300px"  class="rounded-md" src="{{ asset($tipology->img) }}" alt="Product Image" alt="">

                        <div class="h-2 flex justify-center">
                            <p class="text-green-500  text-sm font-extrabold" >{{ $tipology->model }}</p>
                        </div>
                </div>
            </button> 
            @endforeach


                {{-- <button wire:click="showModal('suprema 2 folhas vidro', '{{ $cliente_id }}')"  class="px-4 py-4 rounded-md">
                <div  class="bg-white w-80 h-28 rounded-md ">
                        <img  class="rounded-md" src="https://via.placeholder.com/300X200" alt="Product Image" alt="">

                        <div class="h-2 flex justify-center">
                            <p class="text-green-500  text-sm font-extrabold" >Janela suprema 2 folhas veneziana e vidro</p>
                        </div>
                </div>
            </button> --}}

        


         

           
        </div>
    {{-- -------------modelos--------------------- --}}


    {{-- -------------modal--------------------- --}}

        <div>
            <x-dialog-modal wire:model="showingModal">
                    
                    {{-- @if ($model1)
                        <x-slot name="title">Janela suprema 2 folhas vidro</x-slot>
                    @elseif($model2)
                        <x-slot name="title">Janela suprema 3 folhas vidro</x-slot>
                    @elseif($model3)
                        <x-slot name="title">Janela suprema 4 folhas vidro (2 fixas 2 moveis)</x-slot>
                    @else
                        <x-slot name="title">Título Padrão</x-slot>
                    @endif --}}
                
            
                    @switch(true)
                        @case($model1)
                            <x-slot name="title">Janela suprema 2 folhas vidro</x-slot>
                            @break

                        @case($model2)
                            <x-slot name="title">Janela suprema 3 folhas vidro</x-slot>
                            @break

                        @case($model3)
                            <x-slot name="title">Janela suprema 4 folhas vidro (2 fixas 2 moveis)</x-slot>
                            @break

                        @default
                            <x-slot name="title">Título Padrão</x-slot>
                    @endswitch
                    

                    
                <x-slot name="content">
                            <div  style="margin-bottom: 8px" class=" mb-2 flex itens-center rounded-md ">
                                <img  class="rounded-md" src="https://via.placeholder.com/100X100" alt="Product Image" alt="">
                        
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

                            @if ($model1 || $model2)
                                
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
                            @endif


                         

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
                        <x-button wire:click="storeProject" name="title">Novo item</x-button>
                </x-slot>

            </x-dialog-modal>
        </div>
    {{-- -------------modal--------------------- --}}



</div>
{{-- -------------page--------------------- --}}


