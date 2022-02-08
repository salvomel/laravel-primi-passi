<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="{{ route('about') }}">Chi siamo</a>
            </li>
            <li>
                <a href="{{ route('where') }}">Dove siamo</a>
            </li>
            <li>
                <a href="{{ route('what') }}">Cosa facciamo</a>
            </li>
        </ul>
    </nav>

    <main>
        <h1>Dipartimenti Università</h1>
    
        <h2>{{ $name }}</h2>
    
        <div>
            @forelse($degrees as $degree)
            {{ $degree }}
    
            @if (!$loop->last) 
                -
            @endif
    
            @empty
                <p>Non ci sono Corsi di Laurea per questo Dipartimento</p>
            @endforelse
        </div>
    </main>

    <style>
        ul {
            display: flex;
            justify-content: center;
        }
        li {
            margin: 20px;
            font-size: 20px;
        }
        main {
            margin: 30px;
        }
    </style>
    
</body>
</html>