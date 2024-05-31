<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ikoKazi GetHired ASAP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        nav {
            background-color: #0056b3;
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
            color: #007bff;
        }

        section p {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 20px;
        }

        section button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        section button:hover {
            background-color: #0056b3;
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
    </style>
</head>

<body>
    <header>
        <h1>Welcome to ikoKazi GetHired ASAP</h1>
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
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Jobs</a>
        <a href="#">Contact</a>
    </nav>
    <section>
        <h2>Find Your Dream Job Today!</h2>
        <p>Join thousands of job seekers who have found success with ikoKazi GetHired ASAP.</p>
        <button>Get Started</button>
    </section>
    <footer>
        <p>&copy; 2024 ikoKazi GetHired ASAP. All rights reserved.</p>
    </footer>
</body>

</html>