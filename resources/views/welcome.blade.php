<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House help Finder</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        header {
            background-color: #8b4513;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        nav {
            background-color: #d2b48c;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #ffca28;
        }

        section {
            padding: 20px;
            text-align: center;
        }

        section h2 {
            margin-top: 0;
            font-size: 2rem;
            color: #8b4513;
        }

        section p {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 20px;
        }

        section button {
            background-color: #8b4513;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        section button:hover {
            background-color: #d2b48c;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .logo {
            display: block;
            margin: 20px auto;
            width: 150px;
            height: auto;
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to House help Finder</h1>
        <p>Utu Kwa Kazi</p>
        @if (Route::has('login'))
        <nav class="-mx-3 flex flex-1 justify-end">
            @auth
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
            <a href="{{ route('login') }}">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </nav>
        @endif
    </header>
    <section>
        <img src="{{ asset('public/log1') }}" alt="House help Finder Logo" class="logo">
        <h2>The solution for all your casual employees needs.</h2>
        <p>Contact us at: <a href="mailto:househelpfinder10@gmail.com">househelpfinder10@gmail.com</a></p>
        <p>Telephone number: 0790680702</p>
        <p>Facebook: <a href="https://facebook.com/Househelpfinder.co.ke" target="_blank">House help finder.co.ke</a></p>
        <p>Instagram: <a href="https://instagram.com/househelpfinder.co.ke" target="_blank">@househelpfinder.co.ke</a></p>
        <p>Twitter: <a href="https://twitter.com/househelpfinder.co.ke" target="_blank">@househelpfinder.co.ke</a></p>
    </section>
    <footer>
        <p>&copy; 2024 House help Finder. All rights reserved.</p>
    </footer>
</body>

</html>