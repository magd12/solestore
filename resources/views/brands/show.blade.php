<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $brand->name }}</title>
</head>
<body>
    <h1>{{ $brand->name }}</h1>
    <p>Land: {{ $brand->country }}</p>
    <p>{{ $brand->description }}</p>

    <a href="/brands">← Terug naar alle merken</a>
</body>
</html>
