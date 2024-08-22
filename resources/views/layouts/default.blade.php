<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
    </head>

    <body>
        <main>
            <header>
                @include('includes.header')
            </header>
            <div>
                @yield('content')
            </div>
            <footer>
                @include('includes.footer')
            </footer>
        </main>
    </body>
</html>