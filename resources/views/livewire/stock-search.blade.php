<div class="text-white">
    <div>
        <h1>Perfis Disponiveis</h1>



    @if($profilesAvailable->isNotEmpty())

    <div class="overflow-x-auto px-4">
                            
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
        
                   
                    
                    <th scope="col" class="px-4 py-3" >Cod</th>
                    <th scope="col" class="px-4 py-3">Imagem</th>
                    <th scope="col" class="px-4 py-3">Perfil</th>
                    <th scope="col" class="px-4 py-3">Desc</th>
                    <th scope="col" class="px-4 py-3">Cor</th>
                    <th scope="col" class="px-4 py-3">Tam</th>
                    <th scope="col" class="px-4 py-3">Qtd</th>
                    <th scope="col" class="px-4 py-3">Linha</th>
                    <th scope="col" class="px-4 py-3">Local</th>
                    <t
                </tr>
            </thead>

            <tbody>
                @foreach($profilesAvailable as $profile)


                <tr wire:key="{{ $profile->id }}" class="border-b dark:border-gray-700">
                    
               
                    <th scope="row"
                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $profile->id }}</th>


                        <th scope="row"
                        class="px-4 py-3 h-96 w-96  font-medium text-gray-900 whitespace-nowrap  dark:text-white">
                     
                     <a href="{{Storage::url($profile->imagem) }}">

                        

                        <img style="max-width: 80px; max-height: 80px;" class="object-cover" src="{{Storage::url($profile->imagem) }}" alt="">
                    
                     </a>
                     

                    

                     
                    



                    </th>
                    <td class="px-4 py-3 text-green-500">{{ $profile->perfil }}</td>

                    <td class="px-4 py-3 ">
                        {{ $profile->descri }}</td>

                    <td class="px-4 py-3  text-green-500">
                            {{ $profile->cor }}</td>

                    <td class="px-4 py-3 text-green-500">{{ $profile->tamanho}}</td>

                    <td class="px-4 py-3 ">{{ $profile->qtd }}</td>

                    <td class="px-4 py-3 text-green-500">{{ $profile->linha}}</td>

                    <td class="px-4 py-3">{{ $profile->loca }}</td>

                

                </tr>
                @endforeach
            </tbody>
        </table>

    </form>

    </div>

    @else
    <p>Nenhum perfil disponível no estoque.</p>
@endif
    
</div>
