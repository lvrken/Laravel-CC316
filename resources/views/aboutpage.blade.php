
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Lotus Coffee</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #fff5f5, #ffe4e6); /* Soft pink gradient */
            color: #2d5a27; /* Dark green */
            line-height: 1.6;
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
        .about-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            text-align: center;
            position: relative;
        }
        .about-title {
            font-size: 36px;
            margin-bottom: 10px;
            color: #2d5a27;
        }
        .about-subtitle {
            font-size: 28px;
            margin-bottom: 30px;
            color: #4a7c3d;
            font-style: italic;
        }
        .intro-text {
            font-size: 18px;
            margin-bottom: 40px;
            color: #5a6a5a;
        }
        .features {
            list-style: none;
            padding: 0;
            margin: 40px 0;
        }
        .features li {
            font-size: 18px;
            margin: 20px 0;
            padding: 10px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
        }
        .description {
            font-size: 18px;
            margin: 40px 0;
            color: #5a6a5a;
            font-style: italic;
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
            font-weight: bold;
        }
        .btn:hover {
            background: #4a7c3d;
        }
        .lotus-icon {
            position: absolute;
            top: 50%;
            right: 10%;
            transform: translateY(-50%);
            font-size: 80px;
            opacity: 0.1;
            z-index: -1;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Lotus Coffee</div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
        <a href="#" class="signup">Sign Up</a>
    </header>

    <div class="about-container">
        <div class="lotus-icon">🌸</div>
        <h1 class="about-title">Cebu's beloved neighborhood café—</h1>
        <h2 class="about-subtitle">brewing smiles since 2018</h2>
        <p class="about-subtitle">In 2025, Lotus Coffee turns 7!</p>
        <p class="intro-text">We've become a favorite spot for students, creatives, and coffee lovers alike—</p>
        
        <ul class="features">
            <li>☕ Featured among Cebu's Top 10 Cozy Study Cafes by Local Pulse PH</li>
            <li>📷 Listed as one of the Most Aesthetic Cafes to Visit by Cebu Daily Life</li>
            <li>🌿 Proudly supporting local farmers with every cup we brew</li>
        </ul>
        
        <p class="description">Lotus Coffee celebrates calm and connection in every sip. From hand-poured brews to signature lattes and homemade pastries, every visit is a little pause from the rush of the day.</p>
        
    </div>
</body>
</html>