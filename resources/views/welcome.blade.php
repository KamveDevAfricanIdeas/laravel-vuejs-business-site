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
             <div><navbar /></div>
             <div id="search-area"><searchbar /></div>

            <!-- Content -->
            <main class="border border-black rounded-xl flex-grow p-2 pt-5 flex items-center justify-center">
                <table class="table-auto border-collapse border border-slate-500 sm: w-20 md:w-50 lg:w-80 xl:w-full">
                    <!-- column headers -->
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-slate-500 p-4 text-left">Company</th>
                            <th class="border border-slate-500 p-4 text-left">Contact</th>
                            <th class="border border-slate-500 p-4 text-left">Location</th>
                        </tr>
                    </thead>
                    <!-- table data: rows -->
                    <tbody>
                        <tr class="bg-lightblue hover:bg-blue-50">
                            <td class="border border-slate-500 p-4">BONA!</td>
                            <td class="border border-slate-500 p-4">+27 123 456 7890</td>
                            <td class="border border-slate-500 p-4">South Africa</td>
                        </tr>
                        <tr class="bg-lightblue hover:bg-blue-50">
                            <td class="border border-slate-500 p-4">Roland</td>
                            <td class="border border-slate-500 p-4">+27 123 456 7890</td>
                            <td class="border border-slate-500 p-4">Switzerland</td>
                        </tr>
                        <tr class="bg-lightblue hover:bg-blue-50">
                            <td class="border border-slate-500 p-4">Alien Worlds</td>
                            <td class="border border-slate-500 p-4">+27 123 456 7890</td>
                            <td class="border border-slate-500 p-4">USA</td>
                        </tr>
                    </tbody>
                </table>
            </main>
            
            <!-- Footer -->
             <div><footer_component /></div>
        </div>
        @vite('resources/js/app.js')
    </body>
</html>
