<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneakers overzicht</title>
</head>
<body>
    <h1>Sneakers overzicht</h1>

    @if($sneakers->isEmpty())
        <p>Geen sneakers gevonden.</p>
    @else
        @foreach($sneakers as $sneaker)
            <div>
                <h2>
                    <a href="/sneakers/{{ $sneaker->id }}">{{ $sneaker->name }}</a>
                </h2>
                <p>Merk: {{ $sneaker->brand->name ?? 'Onbekend' }}</p>
                <p>Kleurstelling: {{ $sneaker->colorway }}</p>
                <p>Jaar: {{ $sneaker->release_year }}</p>
            </div>
        @endforeach
    @endif

    <a href="/">← Terug naar home</a>
</body>
</html>
