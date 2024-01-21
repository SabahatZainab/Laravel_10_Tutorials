<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document - @yield('title','Default Value')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack('style')
</head>
<body>
    <div id="wrapper">
        <header>Example Template</header>
        <nav>
            <a href="/">Home</a>
            <a href="/post">Post</a>
            <a href="/about">About</a>
        </nav>
        <main>
            <article>
                @hasSection('content')
                @yield('content')
                @else
                    <h2>No Content Found!</h2>
                @endif
                {{-- @yield('content','<h2>No Content Found!</h2>') --}}
            </article>
            <aside>
            @section('sidebar')
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/post">Post</a></li>
                    <li><a href="/about">About</a></li>
                </ul>
            @show
            {{-- ya bhe dynamic wale asakte hai @show means --}}
            </aside>
        </main>
        <footer>This is Footer Section Saba2023</footer>
    </div>
    @stack('scripts')
    @stack('manualScripts')
</body>
</html>