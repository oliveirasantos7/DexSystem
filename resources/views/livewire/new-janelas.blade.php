{{-- -------------page--------------------- --}}
<div class="flex flex-col  mt-4 px-3">

    {{-- -------------titulo--------------------- --}}

        <div style="background-color: rgb(30 41 59);" class="max-w-md w-full rounded-lg overflow-hidden shadow-lg mt-5 ">
            <div class="px-6 py-4 bg-gray-800 dark:bg-gray-700">
                <h2 class="text-xl font-semibold text-white">Janelas</h2>
            </div>
        </div>

    {{-- -------------titulo--------------------- --}}


    {{-- -------------modelos--------------------- --}}

        <div class="flex flex-wrap justify-center ">
                <button wire:click="showModal('modelo1')"  class="px-4 py-4 rounded-md">
                <div  class="bg-white w-80 h-28 rounded-md ">
                        <img  class="rounded-md" src="https://via.placeholder.com/300X200" alt="Product Image" alt="">

                        <div class="h-2 flex justify-center">
                            <p class="text-green-500  text-sm font-extrabold" >Janela suprema 2 folhas veneziana e vidro</p>
                        </div>
                </div>
            </button>

            <button wire:click="showModal('modelo2')"  class="px-4 py-4 rounded-md">
                <div  class="bg-white w-80 h-28 rounded-md ">
                    <img  class="rounded-md" src="https://via.placeholder.com/300X200" alt="Product Image" alt="">

                    <div class="h-2 flex justify-center">
                        <p class="text-green-500  text-sm font-extrabold" >Janela suprema 2 folhas veneziana e vidro</p>
                    </div>
                </div>
            </button>

            <button wire:click="showModal('modelo3')"  class="px-4 py-4 rounded-md">
                <div  class="bg-white w-80 h-28 rounded-md ">
                    <img  class="rounded-md" src="https://via.placeholder.com/300X200" alt="Product Image" alt="">

                    <div class="h-2 flex justify-center">
                        <p class="text-green-500  text-sm font-extrabold" >Janela suprema 2 folhas veneziana e vidro</p>
                    </div>
                </div>
            </button>
        </div>
    {{-- -------------modelos--------------------- --}}


    {{-- -------------modal--------------------- --}}

        <div>
            <x-dialog-modal wire:model="showingModal">
                    
                    @if ($model1)
                        <x-slot name="title">Janela suprema 2 folhas vidro</x-slot>
                    @elseif($model2)
                        <x-slot name="title">Janela suprema 3 folhas vidro</x-slot>
                    @elseif($model3)
                        <x-slot name="title">Janela suprema 4 folhas vidro (2 fixas 2 moveis)</x-slot>
                    @else
                        <x-slot name="title">Título Padrão</x-slot>
                    @endif
                
            
                    

                    
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
                                <select name="color" wire:model.lazy="color" id="cor" class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out">
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
                                <select name="accessoryColor"
                                    wire:model.lazy="accessoryColor"
                                    id="accessoryColor" class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out">
                                        <option value="" hidden>Cor acessorios</option>
                                        <option value="Branco">Branco</option>
                                        <option value="Preto">Preto</option>
                                        <option value="Outros">Outros</option>
                            </select>
                            </div>


                            <div class="mt-1">
                                <select name="glass"
                                    wire:model.lazy="glass"
                                    id="glass" class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out">
                                    <option value="" hidden>Vidro</option>
                                    <option value="">Incolor 4mm comum</option>
                                    <option value="">Incolor 6mm comum</option>
                                    <option value="">Incolor 6 temperado</option>
                                    <option value="">Incolor 6mm laminado</option>

                                    <option value="">Verde 4mm comum</option>
                                    <option value="">Verde 6mm comum</option>
                                    <option value="">Verde 6 temperado</option>
                                    <option value="">Verde 6mm laminado</option> 
                                    <option value="">Outros</option>



                                </select>
                            </div>


                            <div class="mt-1">
                                <select name="contamarco"
                                    wire:model.lazy="contamarco"
                                    id="contamarco" class="block w-full py-2 px-3 border border-gray-300 rounded-md leading-5 text-gray-700 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out">
                                    <option value="" hidden>Contramarco</option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
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
                                        wire:model.lazy="location"
                                        name="location"
                                        id="location"
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
                        <x-button wire:click="storeItem" name="title">Novo item</x-button>
                </x-slot>

            </x-dialog-modal>
        </div>
    {{-- -------------modal--------------------- --}}



</div>
{{-- -------------page--------------------- --}}

