
<main class="flex-1 overflow-x-hidden overflow-y-auto p-6">


    {{-- <div >
        <button class="flex items-center px-4 bg-white rounded-md mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
              </svg>
              Criar alerta
        </button>
    </div> --}}



    {{-- ----------------estoqye minimo de l009 branca------------- --}}
    @if ($l009B->count() < 3)
    <div  id="notification1" class="bg-red-500 flex justify-between text-slate-800  mb-2 p-1">
        <div class="flex items-center"> 
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
              </svg>  
              @if ($l009B->count() == 0 )
                  Voçê não possui barras inteiras de L-009
              @else
             <p>Seu estoque de L-009 na cor branca está abaixo de 3 barras voçê possui atualmente {{ $l009B->count() }} barras inteiras </p>

             @endif
            </div> 
        <div class="cursor-pointer" onclick="fecharNotificacao1()">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </div>   
    </div>
    @endif
    {{-- ------------------------------------------------------- --}}



    {{-- ----------------estoqye minimo de l013 branca------------- --}}
    @if ($l013B->count() < 3)
    <div  id="notification2" class="bg-red-500 flex justify-between text-slate-800  mb-2 p-1">
        <div class="flex items-center"> 
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
              </svg>  

              @if ($l013B->count() == 0 )
                  Voçê não possui barras inteiras de L-013
              @else
             <p>Seu estoque de L-013 na cor branca está abaixo de 3 barras voçê possui atualmente {{ $l013B->count() }} barras inteiras </p>

             @endif
            </div> 
        <div class="cursor-pointer" onclick="fecharNotificacao2()">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </div>   
    </div>
    @endif
    {{-- ------------------------------------------------------- --}}


     {{-- ----------------estoqye minimo de l013 branca------------- --}}
     @if ($regua->count() < 3)
     <div  id="notification3" class="bg-red-500 flex justify-between text-slate-800  mb-2 p-1">
         <div class="flex items-center"> 
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
               </svg>  
 
               @if ($regua->count() == 0 )
                   Voçê não possui barras inteiras de TUB-4576 branco
               @else
              <p>Seu estoque de TUB-4576 na cor branca está abaixo de 3 barras voçê possui atualmente {{ $regua->count() }} barras inteiras </p>
 
              @endif
             </div> 
         <div class="cursor-pointer" onclick="fecharNotificacao3()">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
             <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
           </svg>
         </div>   
     </div>
     @endif
     {{-- ------------------------------------------------------- --}}
 

    
   

   
    

  
    
  


 

    <!-- Seção de Métricas -->
    <section class="mt-6 flex flex-wrap justify-between">
        <!-- Card 1 --> 
        <div class="w-full sm:w-1/2 lg:w-1/4 mb-4 flex " >
            <div class="bg-white p-6 rounded-md shadow-md">
                <h2 class="text-xl font-semibold mb-4">Total de perfis em estoque</h2>
                <h2 class="text-xl font-semibold  text-green-500 mb-4">{{ $estoque->count() }}</h2>
            </div>

            <div class="bg-white p-6 rounded-md shadow-md ml-4">
                <h2 class="text-xl font-semibold mb-4">Total de barras inteiras</h2>
                <h2 class="text-xl text-green-500 font-semibold mb-4">{{ $barrasInteiras->count() }}</h2>

            </div>

           
        </div>
  
      
  
       
  
  
       
      
    </section>


                       <!-- Seção de Métricas -->
                       <section class="mt-6 flex flex-wrap justify-between">

                      
                
                
                       <!-- Card 4 - Produtos Adicionados Recentemente -->
                       <div class="w-full sm:w-1/2 lg:w-1/4 mt-5" >
                        <div class="bg-white p-6 rounded-md shadow-md">
                            <h2 class="text-xl font-semibold mb-4">Perfis adcionados Recentemente</h2>
                            <table class="w-full text-sm text-left  ">
                             
                                <thead style="background-color: rgb(30 41 59)"  class="text-xs  uppercase text-white rounded-md bg-slate-800">
                                    <tr>
                            
                                       
                                        
                                        <th scope="col" class="px-4 py-3" >Cod</th>
                                        <th scope="col" class="px-4 py-3">Perfil</th>
                                        <th scope="col" class="px-4 py-3">Desc</th>
                                        <th scope="col" class="px-4 py-3">Cor</th>
                                        <th scope="col" class="px-4 py-3">Tam</th>
                                        <th scope="col" class="px-4 py-3">Qtd</th>
                                        <th scope="col" class="px-4 py-3">Linha</th>
                                        <th scope="col" class="px-4 py-3">Local</th>
                                        <th scope="col" class="px-4 py-3">Data de reg.</th>
                                        
                                    </tr>
                                </thead

                                @foreach ($ultimasAdd as $ulAdd)
                                    
                                <tbody>
                                    

                                    <tr class="border-b dark:border-gray-700">
                                        
                                   
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap ">
                                            {{ $ulAdd->id }}</th>


                                        <td class="px-4 py-3 text-green-500">{{ $ulAdd->perfil }}</td>

                                        <td class="px-4 py-3 ">
                                            {{ $ulAdd->descri }}
                                        </td>

                                        <td class="px-4 py-3  text-green-500">
                                            {{ $ulAdd->cor }}
                                        </td>

                                        <td class="px-4 py-3 text-green-500">
                                            {{ $ulAdd->tamanho }}
                                        </td>

                                        <td class="px-4 py-3 ">{{ $ulAdd->qtd }}</td>

                                        <td class="px-4 py-3 text-green-500">{{ $ulAdd->linha }}</td>

                                        <td class="px-4 py-3">{{ $ulAdd->loca}}</td>

                                        <td class="px-4 py-3 text-green-500">{{ \Carbon\Carbon::parse($ulAdd->created_at)->format('d/m/Y') }}</td>
                                        
                                        {{-- <td class="px-4 py-3 text-green-500">23/07/2023</td> --}}


                                        {{-- <td class="px-4 py-3">{{ $stock->updated_at}}</td> --}}
                                        <td class="px-4 py-3"></td>

                                    
                                    </tr>

                                  

                                  
                                </tbody>

                                @endforeach

                             </table>
                        </div>
                    </div>
                </section>

                <script>
                    function fecharNotificacao1() {
                        var notification = document.getElementById('notification1');
                        notification.style.display = 'none';
                    }
                    function fecharNotificacao2() {
                        var notification = document.getElementById('notification2');
                        notification.style.display = 'none';
                    }
                    function fecharNotificacao3() {
                        var notification = document.getElementById('notification3');
                        notification.style.display = 'none';
                    }
                </script>
  </main>
