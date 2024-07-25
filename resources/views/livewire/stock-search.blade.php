<div class="text-white">
    <div>
        <h1>Perfis Necessários</h1>
        <ul>
            @foreach($profilesNeeded as $profile)
                {{-- <li>{{ $profile }} </li> --}}
                {{ $profile['profile'] }} - <br>
                Tamanho: {{ $profile['size'] }},<br> 
                Cor: {{ $profile['color'] }}, <br>
                Linha: {{ $profile['line'] }} <br>
                <br>
            @endforeach
        </ul>
    
        <br>
        <br>
        @if($profilesAvailable->isNotEmpty())
            <h2>Perfis Disponíveis no Estoque</h2>
            <ul>
                @foreach($profilesAvailable as $profile)
                    <li>{{ $profile->perfil }} - Quantidade: {{ $profile->qtd }} Localizaçã: {{ $profile->loca }} Tamanho: {{ $profile->tamanho }}</li>
                @endforeach
            </ul>
        @else
            <p>Nenhum perfil disponível no estoque.</p>
        @endif
    </div>
    
</div>
