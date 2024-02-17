<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    /*
     |---------------------------------------------------------------- -------------------------
     | Nome da Aplicação
     |---------------------------------------------------------------- -------------------------
     |
     | Este valor é o nome do seu aplicativo. Este valor é usado quando o
     | framework precisa colocar o nome do aplicativo em uma notificação ou
     | qualquer outro local conforme exigido pelo aplicativo ou seus pacotes.
     |
     */

    'name' => env('APP_NAME', 'DexSystem'),

   /*
     // |---------------------------------------------------------- ---------------------------
     // | Ambiente de aplicação
     // |---------------------------------------------------------- ---------------------------
     // |
     // | Este valor determina o "ambiente" em que seu aplicativo está atualmente
     // | em execução. Isso pode determinar como você prefere configurar vários
     // | serviços que o aplicativo utiliza. Defina isso em seu arquivo ".env".
     // |
      */
    'env' => env('APP_ENV', 'production'),

  /*
     |---------------------------------------------------------------- -------------------------
     | Modo de depuração do aplicativo
     |---------------------------------------------------------------- -------------------------
     |
     | Quando seu aplicativo está no modo de depuração, mensagens de erro detalhadas com
     | rastreamentos de pilha serão mostrados em cada erro que ocorrer em seu
     | aplicativo. Se desativado, uma página de erro genérica simples será mostrada.
     |
     */

    'debug' => (bool) env('APP_DEBUG', false),

 /*
     |---------------------------------------------------------------- -------------------------
     | URL do aplicativo
     |---------------------------------------------------------------- -------------------------
     |
     | Este URL é usado pelo console para gerar URLs corretamente ao usar
     | a ferramenta de linha de comando Artisan. Você deve definir isso para a raiz de
     | seu aplicativo para que ele seja usado ao executar tarefas do Artisan.
     |
     */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),
/*
     |---------------------------------------------------------------- -------------------------
     | Fuso horário do aplicativo
     |---------------------------------------------------------------- -------------------------
     |
     | Aqui você pode especificar o fuso horário padrão para sua aplicação, que
     | será usado pelas funções de data e hora do PHP. Nós tínhamos ido
     | adiante e defina-o como um padrão sensato para você, pronto para uso.
     |
     */

     'timezone' => 'America/Sao_Paulo',

/*
     |---------------------------------------------------------------- -------------------------
     | Configuração de localidade do aplicativo
     |---------------------------------------------------------------- -------------------------
     |
     | A localidade do aplicativo determina a localidade padrão que será usada
     | pelo prestador de serviços de tradução. Você é livre para definir esse valor
     | para qualquer uma das localidades que serão suportadas pelo aplicativo.
     |
     */

    'locale' => 'pt-BR',


    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => 'file',
        // 'store' => 'redis',
    ],

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        App\Providers\FortifyServiceProvider::class,
        App\Providers\JetstreamServiceProvider::class,
    ])->toArray(),

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => Facade::defaultAliases()->merge([
        // 'Example' => App\Facades\Example::class,
    ])->toArray(),

];
