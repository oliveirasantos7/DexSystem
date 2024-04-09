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

    <div style="background-color: rgb(30 41 59);" class="max-w-md w-full rounded-lg overflow-hidden shadow-lg mt-5 ">
        <div class="px-6 py-4 bg-gray-800 dark:bg-gray-700">
            <h2 class="text-xl font-semibold text-white">Erick Adriel gomes de oliveira - Código: 123 - Referência: 2343</h2>
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
                
                   
                        <tr  wire:key="" class="border-b dark:border-gray-700 " onclick="window.location='{{ route('projetos.details') }}';" style="cursor:pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='rgba(0, 0, 0, 0.1)';" onmouseout="this.style.backgroundColor='transparent';">
                        <td class="p-2"><input type="checkbox" ></td>
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">2</th>
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">2234</th>
                        <th scope="row" class="px-4 py-3 h-96 w-96  font-medium text-gray-900 whitespace-nowrap  dark:text-white">
                            <img style="max-width: 80px; max-height: 80px;" class="object-cover" src="https://via.placeholder.com/150" alt="">
                        </th>
                        <td class="px-4 py-3 text-green-500">Janela suprema 2 folhas vidro</td>
                        <td class="px-4 py-3  text-green-500">Preto</td>
                        <td class="px-4 py-3 text-green-500">2345</td>
                        <td class="px-4 py-3 text-green-500">1234</td>
                        <td class="px-4 py-3 ">3</td>
                        <td class="px-4 py-3 text-green-500">Suprema</td>
                        <td class="px-4 py-3 text-green-500">20/12/2023</td>
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
                        </td>
                    </tr>
                    



                    <tr wire:key="" class="border-b dark:border-gray-700" onclick="window.location='{{ route('dashboard') }}';" style="cursor:pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='rgba(0, 0, 0, 0.1)';" onmouseout="this.style.backgroundColor='transparent';">
                        <td class="p-2"><input type="checkbox" ></td>
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">2</th>
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">2234</th>
                        <th scope="row" class="px-4 py-3 h-96 w-96  font-medium text-gray-900 whitespace-nowrap  dark:text-white">
                            <img style="max-width: 80px; max-height: 80px;" class="object-cover" src="https://via.placeholder.com/150" alt="">
                        </th>
                        <td class="px-4 py-3 text-green-500">Janela suprema 2 folhas vidro</td>
                        <td class="px-4 py-3  text-green-500">Preto</td>
                        <td class="px-4 py-3 text-green-500">2345</td>
                        <td class="px-4 py-3 text-green-500">1234</td>
                        <td class="px-4 py-3 ">3</td>
                        <td class="px-4 py-3 text-green-500">Suprema</td>
                        <td class="px-4 py-3 text-green-500">20/12/2023</td>
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
                        </td>
                    </tr>   
                
            </tbody>
            
        
        </table>


        <div class="flex justify-end">

            <div class="p-4">
                <x-button wire:click="newProject">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                    Novo Projeto</x-button>
                {{-- <x-button wire:click="showNoteModal" >Criar nota</x-button> --}}
            </div>

          
           

           

           
       </div>
    </div>


    <div style="background-color: rgb(30 41 59);" class="max-w-md w-full rounded-lg overflow-hidden shadow-lg mt-5 ">
        <div class="px-6 py-4 bg-gray-800 dark:bg-gray-700">
            <h2 class="text-xl font-semibold text-white">Dante lorenzo gomes de oliveira - Código: 123 - Referência: 2343</h2>
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
                
                   
                        <tr wire:key="" class="border-b dark:border-gray-700 " onclick="window.location='{{ route('dashboard') }}';" style="cursor:pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='rgba(0, 0, 0, 0.1)';" onmouseout="this.style.backgroundColor='transparent';">
                        <td class="p-2"><input type="checkbox" ></td>
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">2</th>
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">2234</th>
                        <th scope="row" class="px-4 py-3 h-96 w-96  font-medium text-gray-900 whitespace-nowrap  dark:text-white">
                            <img style="max-width: 80px; max-height: 80px;" class="object-cover" src="https://via.placeholder.com/150" alt="">
                        </th>
                        <td class="px-4 py-3 text-green-500">Janela suprema 2 folhas vidro</td>
                        <td class="px-4 py-3  text-green-500">Preto</td>
                        <td class="px-4 py-3 text-green-500">2345</td>
                        <td class="px-4 py-3 text-green-500">1234</td>
                        <td class="px-4 py-3 ">3</td>
                        <td class="px-4 py-3 text-green-500">Suprema</td>
                        <td class="px-4 py-3 text-green-500">20/12/2023</td>
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
                        </td>
                    </tr>
                    



                    <tr wire:key="" class="border-b dark:border-gray-700" onclick="window.location='{{ route('dashboard') }}';" style="cursor:pointer;">
                        <td class="p-2"><input type="checkbox" ></td>
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">2</th>
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">2234</th>
                        <th scope="row" class="px-4 py-3 h-96 w-96  font-medium text-gray-900 whitespace-nowrap  dark:text-white">
                            <img style="max-width: 80px; max-height: 80px;" class="object-cover" src="https://via.placeholder.com/150" alt="">
                        </th>
                        <td class="px-4 py-3 text-green-500">Janela suprema 2 folhas vidro</td>
                        <td class="px-4 py-3  text-green-500">Preto</td>
                        <td class="px-4 py-3 text-green-500">2345</td>
                        <td class="px-4 py-3 text-green-500">1234</td>
                        <td class="px-4 py-3 ">3</td>
                        <td class="px-4 py-3 text-green-500">Suprema</td>
                        <td class="px-4 py-3 text-green-500">20/12/2023</td>
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
                        </td>
                    </tr>   
            </tbody>
        </table>
        <div class="flex justify-end">

            <div class="p-4">
                <x-button wire:click="showStockModal">Novo Projeto</x-button>
                {{-- <x-button wire:click="showNoteModal" >Criar nota</x-button> --}}
            </div> 
       </div>
    </div>


    <div style="background-color: rgb(30 41 59);" class="max-w-md w-full rounded-lg overflow-hidden shadow-lg mt-5 mb-4">
        <div class="px-6 py-4 bg-gray-800 dark:bg-gray-700">
            <h2 class="text-xl font-semibold text-white">Dante lorenzo gomes de oliveira - Código: 123 - Referência: 2343</h2>
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
                
                   
                        <tr wire:key="" class="border-b dark:border-gray-700 " onclick="window.location='{{ route('dashboard') }}';" style="cursor:pointer; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor='rgba(0, 0, 0, 0.1)';" onmouseout="this.style.backgroundColor='transparent';">
                        <td class="p-2"><input type="checkbox" ></td>
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">2</th>
                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">2234</th>
                        <th scope="row" class="px-4 py-3 h-96 w-96  font-medium text-gray-900 whitespace-nowrap  dark:text-white">
                            <img style="max-width: 80px; max-height: 80px;" class="object-cover" src="https://via.placeholder.com/150" alt="">
                        </th>
                        <td class="px-4 py-3 text-green-500">Janela suprema 2 folhas vidro</td>
                        <td class="px-4 py-3  text-green-500">Preto</td>
                        <td class="px-4 py-3 text-green-500">2345</td>
                        <td class="px-4 py-3 text-green-500">1234</td>
                        <td class="px-4 py-3 ">3</td>
                        <td class="px-4 py-3 text-green-500">Suprema</td>
                        <td class="px-4 py-3 text-green-500">20/12/2023</td>
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
                        </td>
                    </tr>
                    



                    
            </tbody>
        </table>
        <div class="flex justify-end">

            <div class="p-4">
                <x-button wire:click="showStockModal">Novo Projeto</x-button>
                {{-- <x-button wire:click="showNoteModal" >Criar nota</x-button> --}}
            </div> 
       </div>
    </div>



 


 
   
</div>




