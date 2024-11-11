<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Business Site</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body class="min-h-screen flex flex-col text-black">
        <div id="app" class="flex flex-col min-h-screen">
            <!-- Navbar -->
             <div>
                <navbar />
             </div>
             <div id="search-area">
                <searchbar />
             </div>
            <!-- Content -->
            <main class="border border-black rounded-xl flex-grow p-8 pt-20 flex items-center justify-center">
                <h1>Site content here, Site content here, Site content here.......</h1>
            </main>
            <!-- Footer -->
             <div><footer_component /></div>
        </div>
        @vite('resources/js/app.js')
    </body>
</html>
