<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Web Project</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
        }
        header {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2c3e50;
        }
        .nav-links a {
            color: #2c3e50;
            text-decoration: none;
            margin-left: 1.5rem;
            transition: color 0.3s ease;
        }
        .nav-links a:hover {
            color: #3498db;
        }
        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 60px; /* Account for fixed header */
        }
        .content {
            text-align: center;
            padding: 3rem;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            max-width: 800px;
            width: 90%;
        }
        .content:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: #2c3e50;
            font-size: 3rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        p {
            color: #34495e;
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        .btn {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.3s ease;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .btn:hover {
            background-color: #2980b9;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .float-element {
            animation: float 6s ease-in-out infinite;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Secure Web</div>
            <div class="nav-links">
                <a href="/">Home</a>
                <a href="{{ route('login') }}">Login</a>
                <a href="/about">About</a>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="content">
            <h1 class="float-element">Secure Web Project</h1>
            <p>Never Trust, Always Verify</p>
            <a href="{{ route('register') }}"class="btn">Register</a>
        </div>
    </div>
</body>
</html>