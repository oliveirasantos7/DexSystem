<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão para Indústria</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 4rem;
        }

        .fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 1000;
            transition: background-color 0.3s ease;
        }

        .fixed-header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 4rem;
        }

        .fixed-header .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .fixed-header.navbar-open {
            background-color: rgba(0, 0, 0, 0.95);
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #1a202c;
            padding: 0.5rem;
            z-index: 1000;
        }

        .dropdown-content a {
            display: block;
            color: #ffffff;
            padding: 0.5rem;
            transition: background-color 0.3s ease;
        }

        .dropdown-content a:hover {
            background-color: #718096;
        }

        .dropdown:hover .dropdown-content a {
            display: block;
        }
    </style>
</head>

<body class="bg-gray-900 text-white">
    <header class="fixed-header">
        <div class="container mx-auto">
            <div class="logo ml-7"><img style="height: 50px" src="{{ asset('img/home/logoDex.png') }}" alt=""></div>
            <nav>
                <div class="dropdown inline-block relative">
                    <button class="text-white font-semibold py-2 px-4 rounded inline-flex items-center">
                        Recursos
                        <svg class="fill-current h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 14.293a1 1 0 001.414 0l4-4a1 1 0 00-1.414-1.414L11 11.586V5a1 1 0 00-2 0v6.586l-2.293-2.293a1 1 0 10-1.414 1.414l4 4z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="dropdown-content hidden absolute bg-gray-800 shadow-lg">
                        <a href="#">Controle de Estoque</a>
                        <a href="#">Gestão de Produção</a>
                        <a href="#">Monitoramento em Tempo Real</a>
                        <a href="#">Análise de Dados</a>
                        <a href="#">Relatórios Personalizados</a>
                    </div>
                </div>
                <a href="#" class="ml-4">Sobre Nós</a>
                <a href="#" class="ml-4">Contato</a>

               


                @if (Route::has('login'))
                    @auth
                <a href="{{ url('/dashboard') }}" class=" bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">Dashboard-se</a>

                    @else
                <a href="{{ url('/login') }}" class=" bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">Login</a>


                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif --}}
                    @endauth
                </div>
            @endif
            </nav>
        </div>
    </header>

    <div class="container mx-auto px-8">
        <div class="mt-8">
            <img src="{{ asset('img/home/a tecnologia a serviço do seu negocio.png') }}" alt="Imagem de Destaque" class="w-full rounded-lg shadow-lg transition-transform duration-500 hover:scale-105">
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-4">Por que escolher nosso sistema de gestão?</h2>
            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <li class="flex items-center">
                    <span class="text-green-500 mr-2">&#10003;</span>
                    <span>Personalizado para Indústria</span>
                </li>
                <li class="flex items-center">
                    <span class="text-green-500 mr-2">&#10003;</span>
                    <span>Eficiência Aprimorada</span>
                </li>
                <li class="flex items-center">
                    <span class="text-green-500 mr-2">&#10003;</span>
                    <span>Tomada de Decisão Informada</span>
                </li>
                <li class="flex items-center">
                    <span class="text-green-500 mr-2">&#10003;</span>
                    <span>Suporte Especializado</span>
                </li>
            </ul>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-4">Sobre Nós</h2>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce convallis, ipsum in fermentum varius, ipsum quam blandit mi, eget dignissim dolor libero vitae lorem. Nullam nec sapien sem. Integer sed ultricies leo. Donec at bibendum orci, sit amet pharetra arcu.</p>
            <p class="text-lg mt-4">In hac habitasse platea dictumst. Suspendisse vitae rhoncus risus. Proin dignissim, nulla eget feugiat vehicula, lacus velit aliquet tellus, in condimentum neque eros eu ipsum. Phasellus elementum urna a eros auctor, non consectetur eros fermentum.</p>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-4">Nossos Recursos Principais:</h2>
            <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <li>
                    <div class="bg-gray-800 p-6 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Controle de Estoque</h3>
                        <p>Gerencie seu estoque de forma eficiente e precisa.</p>
                    </div>
                </li>
                <li>
                    <div class="bg-gray-800 p-6 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 3m0 0l3-3m-3 3v8a2 2 0 002 2h5.586a1 1 0 00.707-.293l2.414-2.414a1 1 0 00.293-.707V9a2 2 0 00-2-2h-2m-5 0H8m3 0a1 1 0 110-2h2a1 1 0 110 2"></path>
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Gestão de Produção</h3>
                        <p>Otimize sua produção e aumente sua eficiência.</p>
                    </div>
                </li>
                <li>
                    <div class="bg-gray-800 p-6 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Monitoramento em Tempo Real</h3>
                        <p>Tenha insights instantâneos sobre sua operação.</p>
                    </div>
                </li>
                <li>
                    <div class="bg-gray-800 p-6 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Análise de Dados</h3>
                        <p>Obtenha informações valiosas para tomada de decisão.</p>
                    </div>
                </li>
                <li>
                    <div class="bg-gray-800 p-6 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 3m0 0l3-3m-3 3v8a2 2 0 002 2h5.586a1 1 0 00.707-.293l2.414-2.414a1 1 0 00.293-.707V9a2 2 0 00-2-2h-2m-5 0H8m3 0a1 1 0 110-2h2a1 1 0 110 2"></path>
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Relatórios Personalizados</h3>
                        <p>Crie relatórios adaptados às suas necessidades.</p>
                    </div>
                </li>
            </ul>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-4">Planos</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-2">Plano Básico</h3>
                    <p>Recursos limitados</p>
                    <p>Assistência online</p>
                    <p class="mt-4">$19.99/mês</p>
                    <a href="#" class="block mt-4 text-center bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">Inscreva-se</a>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-2">Plano Padrão</h3>
                    <p>Recursos médios</p>
                    <p>Assistência online e presencial</p>
                    <p class="mt-4">$39.99/mês</p>
                    <a href="#" class="block mt-4 text-center bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">Inscreva-se</a>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-2">Plano Premium</h3>
                    <p>Recursos avançados</p>
                    <p>Assistência 24/7</p>
                    <p class="mt-4">$59.99/mês</p>
                    <a href="#" class="block mt-4 text-center bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">Inscreva-se</a>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-2">Plano Personalizado</h3>
                    <p>Recursos personalizados</p>
                    <p>Assistência dedicada</p>
                    <p class="mt-4">Entre em contato</p>
                    <a href="#" class="block mt-4 text-center bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">Inscreva-se</a>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-4">Fale Conosco</h2>
            <form class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <input type="text" placeholder="Seu nome" class="py-2 px-4 mb-2 rounded-lg bg-gray-800 text-gray-200 focus:outline-none focus:ring focus:ring-blue-500">
                <input type="email" placeholder="Seu e-mail" class="py-2 px-4 mb-2 rounded-lg bg-gray-800 text-gray-200 focus:outline-none focus:ring focus:ring-blue-500">
                <textarea rows="4" placeholder="Sua mensagem" class="col-span-2 py-2 px-4 mb-2 rounded-lg bg-gray-800 text-gray-200 focus:outline-none focus:ring focus:ring-blue-500"></textarea>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg col-span-2">Enviar</button>
            </form>
            <p class="mt-4 text-center"><a href="#" class="text-blue-500 hover:underline">Entre para sua conta</a></p>
        </div>
    </div>

    <footer class="bg-gray-800 text-gray-400 mt-8">
        <div class="container mx-auto py-4 px-8">
            <p class="text-center">&copy; 2024 Sistema de Gestão para Indústria. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script>
        window.addEventListener('scroll', function () {
            var header = document.querySelector('header');
            header.classList.toggle('navbar-open', window.scrollY > 0);
        });
    </script>
</body>

</html>
