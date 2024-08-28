<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
    </head>

    <body>
        <main class="flex flex-col h-screen">
            <header>
                @include('includes.header')
            </header>
            <div class="mb-auto px-20 py-5">
                @yield('content')
            </div>
            <footer class="flex justify-center p-3 w-full bg-red-400 text-gray-100 place-self-end">
                @include('includes.footer')
            </footer>
        </main>
    </body>
</html>