<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merken overzicht</title>
</head>
<body>
    <h1>Merken overzicht</h1>

    @if($brands->isEmpty())
        <p>Geen merken gevonden.</p>
    @else
        @foreach($brands as $brand)
            <div>
                <h2>
                    <a href="/brands/{{ $brand->id }}">{{ $brand->name }}</a>
                </h2>
                <p>Land: {{ $brand->country }}</p>
                <p>{{ $brand->description }}</p>
            </div>
        @endforeach
    @endif

    <a href="/">← Terug naar home</a>
</body>
</html>
