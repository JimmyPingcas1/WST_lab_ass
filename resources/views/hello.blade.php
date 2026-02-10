<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .card {
            background: #ffffff;
            padding: 40px 50px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            text-align: center;
            max-width: 400px;
            width: 90%;
        }

        h1 {
            margin: 0;
            font-size: 2.2rem;
            color: #333;
        }

        p {
            margin-top: 10px;
            color: #666;
            font-size: 1rem;
        }

        .badge {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 16px;
            background: #667eea;
            color: #fff;
            border-radius: 999px;
            font-size: 0.9rem;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Hello, World 👋</h1>
        <p>Welcome to your first modern Laravel view.</p>
        <span class="badge">Laravel</span>
    </div>
</body>
</html>
