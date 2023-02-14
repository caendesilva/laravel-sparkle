<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>{{ $title ?? config('app.name') }}</title>
</head>
<body class="d-flex flex-column vh-100">
    @if($nav ?? true)
        <x-nav />
    @endif

    <main class="container py-4 mb-auto">
        {{ $slot }}
    </main>

    @if($footer ?? true)
        <x-footer />
    @endif
</body>
</html>
