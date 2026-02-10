<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Resort Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #333;
        }

        header {
            display: flex;
            justify-content: flex-end;
            padding: 20px 50px;
            align-items: center;
        }

        header a {
            text-decoration: none;
            color: #fff;
            font-weight: 600;
            margin-left: 20px;
            padding: 10px 20px;
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        header a:hover {
            background: rgba(255, 255, 255, 0.35);
        }

        .hero {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 100px 20px 50px;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #fff;
            margin: 0;
        }

        .hero p {
            font-size: 1.2rem;
            color: #f0f0f0;
            margin-top: 15px;
            max-width: 600px;
        }

        .btn-hero {
            margin-top: 30px;
            padding: 14px 40px;
            background: #ff7f50;
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-hero:hover {
            background: #ff6238;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255, 127, 80, 0.4);
        }

        .tag {
            display: inline-block;
            margin-top: 20px;
            padding: 6px 14px;
            background: #eef2ff;
            color: #667eea;
            border-radius: 999px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            header {
                justify-content: center;
            }
            header a {
                margin-left: 10px;
                padding: 8px 16px;
            }
            .hero h1 {
                font-size: 2.2rem;
            }
            .hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <!-- Header with Login/Register -->
    <header>
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif
    </header>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Welcome to Paradise Resort</h1>
        <p>Experience luxury and comfort surrounded by nature. Book your stay now and enjoy exclusive resort packages and deals.</p>
        <a href="#" class="btn-hero">Book Now</a>
        <div class="tag">Luxury Resort</div>
    </div>

</body>
</html>
