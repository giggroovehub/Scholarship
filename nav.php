<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #ffffff;
            overflow: hidden;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .logo {
            width: 50px;
            height: auto;
        }

        .navbar-links {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: row;
        }

        .navbar-links li {
            margin: 0 15px;
        }

        .navbar-links a {
            color: rgb(0, 0, 0);
            text-decoration: none;
            padding: 8px 15px;
            display: block;
            transition: all 0.3s ease;
        }

        .navbar-links a:hover {
            background-color: #000000;
            border-radius: 20px;
            color: #ffffff;
            font-size: 16px;
            padding: 8px 15px;
        }

        .navbar-toggle {
            display: none;
            font-size: 24px;
            color: #000;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .navbar-links {
                display: none;
                flex-direction: column;
                width: 100%;
                background-color: #ffffff;
                position: absolute;
                top: 60px;
                left: 0;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .navbar-links.active {
                display: flex;
            }

            .navbar-toggle {
                display: block;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <img class="logo" src="./images/logo.png" alt="GMC Logo">
        <ul class="navbar-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="index.php">Apply Now</a></li>
        </ul>
        <div class="navbar-toggle" onclick="toggleNavbar()">☰</div>
    </nav>

    <script>
        function toggleNavbar() {
            const navbarLinks = document.querySelector('.navbar-links');
            navbarLinks.classList.toggle('active');
        }
    </script>
</body>
</html>
