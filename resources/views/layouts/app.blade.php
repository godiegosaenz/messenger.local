<!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Fonts -->
     <link rel="dns-prefetch" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

  </head>
 <body>
    <form id="logout-form" action="{{route('logout')}}" method="post" style="display:none;">
        {{ csrf_field() }}
    </form>
     <div id="app">
             <b-navbar toggleable type="dark" variant="primary">
                 <b-navbar-toggle target="nav_text_collapse"></b-navbar-toggle>
                 <b-navbar-brand href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</b-navbar-brand>
                 <b-collapse is-nav id="nav_text_collapse">
                         <b-navbar-nav class="ml-auto">
                             @guest
                                 <b-nav-item href="{{route('login')}}">Ingresar</b-nav-item>
                                 <b-nav-item href="{{route('register')}}">Registro</b-nav-item>
                             @else

                                <b-nav-item-dropdown text="{{Auth::user()->name}}" right>
                                    <b-dropdown-item>
                                        <a v-on:click="cerrarsesion">Cerrar sesion</a>

                                    </b-dropdown-item>

                                </b-nav-item-dropdown>
                             @endguest
                         </b-navbar-nav>
                 </b-collapse>
             </b-navbar>

          <main class="py-4">
             @yield('content')
         </main>
     </div>
 </body>
 </html>
