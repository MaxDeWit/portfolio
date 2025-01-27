<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9fafb;
            color: #333;
        }

        header {
            background-color: #4f46e5;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            font-size: 1.5rem;
        }

        header nav a {
            color: white;
            text-decoration: none;
            margin-left: 1rem;
            font-size: 1rem;
        }

        header nav a:hover {
            text-decoration: underline;
        }

        main {
            padding: 2rem;
            text-align: center;
        }

        main h2 {
            font-size: 2rem;
            color: #4f46e5;
            margin-bottom: 1rem;
        }

        .button {
            display: inline-block;
            background-color: #4f46e5;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-size: 1rem;
            margin-top: 1rem;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #4338ca;
        }

        footer {
            background-color: #4f46e5;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 20rem;
        }
    </style>
</head>

<body>
    <header>
        <h1>Welkom bij Database Management</h1>
        @if (Route::has('login'))
            <nav>
                @auth
                    <a href="{{ url('/add-data') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <main>
        <h2>Beheer jouw Database</h2>
        <p>Gebruik deze applicatie om gegevens efficiënt op te slaan en te beheren</p>
        <a href="/add-data" class="button">Voeg Data toe</a>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Database Management App. All rights reserved.</p>
    </footer>
</body>