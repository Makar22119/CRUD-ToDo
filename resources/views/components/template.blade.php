<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @if (isset($styles))
        {{ $styles }}
    @endif
    @vite(['resources/css/template.css'])
</head>
<body>
    <header>
        <nav>
            <a href="/">TO-DO Lists</a>
            <div class="blank"></div>
            <a href="/form">Sign/log in</a>
            <a href="/tasks">My Tasks</a>
        </nav>
        <div class="heading">
            <h1>TO-DO Lists</h1>
        </div>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        <h3>&#169;Pryanik123</h3>
    </footer>
</body>
