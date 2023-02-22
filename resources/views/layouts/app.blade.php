<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zadanie</title>
        @vite('resources/css/app.css')
        
    </head>
    <body class="bg-gray-300">
        <nav class="p-6 bg-white flex justify-between">
            <ul class="flex items-center">
                <li>
                    <a href="{{ route('home') }}" class="p-3">Home</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>                
                </li>
            </ul>

            <ul class="flex items-center">
               @auth
                    <li>
                        <a href="" class="p-3">{{ auth()->user()->name }} {{ auth()->user()->nazwisko }}</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submitt" class="p-3">Logout</button>
                        </form>            
                    </li>
                @endauth

                @guest
                    <li>
                        <a href=" {{ route('register') }}" class="p-3">Register</a>                
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="p-3">Login</a>             
                    </li>
                @endguest

            </ul>
        </nav>    
        @yield('content')
    </body>
</html>