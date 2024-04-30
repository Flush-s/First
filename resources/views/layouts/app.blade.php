<!DOCTYPE html>
<html 
 lang="{{ str_replace('_', '-', app()->getLocale()) }}"
 class="" id="home">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased light">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset ($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script>
            let home = document.getElementById('home');
            let change = document.getElementById('change');
            let currentTheme = localStorage.getItem("theme")


            if (currentTheme == "dark"){
                document.body.classList = "dark"
            }

            change.addEventListener('click',()=>{
                document.body.classList.toggle('dark');
                let theme = "light";

                if(document.body.classList.contains("dark")){
                    theme = "dark"
                }

                localStorage.setItem('theme',theme);
            })

            // change.addEventListener('click', ()=>{
            //     if(home.classList == "dark"){
            //         home.classList = "light"
            //     }else{
            //         home.classList = "dark"
            //     }
            // })

            // change.addEventListener('click',()=>{
            //     if(localStorage.darkmode == false){
            //         localStorage.darkmode = false
            //     }else{
            //         localStorage.darkmode = true
            //     } 
            // })
            //     if( home.classList="dark"){
            //         localStorage.darkmode = true
            //     }else{
            //         localStorage.darkmode = false
            //     }

        </script>
    </body>
</html>
