<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta chearset="utf-8">
        {{--windows edge に対応するための呪文--}}
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        {{--スマホ画面調整--}}
        <meta name="viewport" content="width=device-width,initial-scale=1">
        {{--トークン--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{--継承--}}
        <title>@yield('title')</title>
        {{--「/js/app.js」javascript読み込み--}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        {{--フォント--}}
        <link rel="dns-prefetch" href="https://fonts.gstaic.com">
        
        <link href="https://fonts.googleapis.com/css/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        
        <link href="{{ secure_asset('css/profile.css')}}"rel="stylesheet">
        
    </head>
    <body>
        <div id="app">
        　　{{--ナビゲーションバー--}}　
            <nav class="navbar navbar-expant-md navbar-dark navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                      
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" date-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                          
                        </ul>
                        
                        <ul class="navbar-nav ml-auto">
                          
                        </ul>
                    </div>
                 </div>
            </nav>　　　{{--ここまでナビゲーションバー--}}
        
            <main class="py-4">
                @yield('content')
            </main>
        
        </div>  
        
    </body>
</html>