

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #fff5f5; /* Soft pink */
            color: #2d5a27; /* Dark green */
        }
        header {
            background-color: rgba(255, 192, 203, 0.9); /* Semi-transparent pink */
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 10;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #2d5a27;
            background: white;
            padding: 5px 15px;
            border-radius: 50px;
        }
        .search {
            flex: 1;
            margin: 0 20px;
            padding: 5px;
            border: none;
            border-radius: 20px;
            background: white;
        }
        nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }
        nav li {
            margin: 0 10px;
        }
        nav a {
            text-decoration: none;
            color: #2d5a27;
            font-weight: bold;
        }
        .signup {
            background: #2d5a27;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            text-decoration: none;
        }
        .hero {
            position: relative;
            height: 80vh;
            background: linear-gradient(to bottom, rgba(255, 192, 203, 0.7), rgba(255, 192, 203, 0.3)), 
                        url('data:image/png;base64,...') center/cover; /* Placeholder for hero image */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #2d5a27;
        }
        .hero h1 {
            font-size: 48px;
            margin: 0;
        }
        .hero p {
            font-size: 24px;
            margin: 10px 0;
        }
        .arrow {
            font-size: 24px;
            margin-top: 20px;
        }
        .content {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            text-align: center;
        }
        .content h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .content p {
            font-size: 18px;
            line-height: 1.6;
        }
        .buttons {
            margin-top: 40px;
        }
        .btn {
            background: #2d5a27;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 25px;
            margin: 0 10px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Lotus Coffee</div>
        <input type="text" class="search" placeholder="Search...">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <a href="#" class="signup">Sign Up</a>
    </header>

    <section class="hero">
        <h1>Sip, slow down, and savor the moment.</h1>
        <p>Lotus Coffee, a cozy corner where every cup is brewed with care and every guest feels at home.</p>
        <div class="arrow">▼</div>
    </section>
    
</body>
</html>