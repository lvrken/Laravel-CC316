<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Lotus Coffee</title>
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
        .contact-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: start;
        }
        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #2d5a27;
        }
        .contact-details p {
            font-size: 16px;
            margin: 10px 0;
            color: #5a6a5a;
        }
        .opening-hours {
            background: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
        }
        .location {
            grid-column: 1 / -1;
            text-align: center;
        }
        .private-functions {
            grid-column: 1 / -1;
            text-align: center;
            background: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
        }
        .decorative-dots {
            text-align: center;
            font-size: 24px;
            color: #ffb6c1;
            margin: 20px 0;
            grid-column: 1 / -1;
        }
        .email-link {
            color: #2d5a27;
            text-decoration: none;
        }
        .email-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Lotus Coffee</div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <a href="#" class="signup">Sign Up</a>
    </header>

    <div class="contact-container">
        <div class="decorative-dots">• •</div>

        <div class="contact-details">
            <div class="section-title">Contact Us</div>
            <p>Reservations: WhatsApp +27 45 44 758</p>
            <p>Email: <a href="mailto:contact@lotuscoffee.co.za" class="email-link">contact@lotuscoffee.co.za</a></p>
        </div>

        <div class="opening-hours">
            <div class="section-title">Opening Hours</div>
            <p>Monday - Saturday:<br>8:30 to 16:00</p>
            <p>Sunday - Public Holidays:<br>9:00 to 14:00</p>
        </div>

        <div class="location">
            <div class="section-title">Location</div>
            <p>Unit 2, 88 Lotus Lane, Mango Avenue</p>
            <p>Lahug, Cebu City 6000</p>
            <p>Philippines</p>
        </div>

        <div class="private-functions">
            <div class="section-title">Private Functions & Shoots</div>
            <p>Ask us!</p>
        </div>
    </div>
</body>
</html>