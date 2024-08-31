<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  
    footer {
        background-color: white;
        color: black;
        padding: 40px 20px;
        text-align: center;
        font-family: Arial, sans-serif;
    }

    .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: flex-start;
        max-width: 1200px;
        margin: 0 auto;
    }

    .footer-logo img {
        width: 100px;
        height: auto;
        border-radius: 20px;
    }

    .footer-about {
        flex: 1;
        margin-right: 20px;
    }

    .footer-about h4 {
        font-size: 1.5em;
        margin-bottom: 15px;
    }

    .footer-about p {
        line-height: 1.6;
        color: #aaa;
    }

    .footer-links {
        flex: 1;

    }

    .footer-links h4 {
        font-size: 1.5em;
        margin-bottom: 15px;
    }

    .footer-links ul {
        list-style: none;
        padding: 0;
    }

    .footer-links ul li {
        margin-bottom: 10px;
    }

    .footer-links ul li a {
        color: black;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-links ul li a:hover {
        color: #007bff;
    }

    .footer-social {
        flex: 1;
    }

    .footer-social h4 {
        font-size: 1.5em;
        margin-bottom: 15px;
    }

    .footer-social a {
        display: inline-block;
        margin-right: 10px;
    }

    .footer-social img {
        width: 30px;
        height: 30px;
        filter: invert(100%);
        transition: transform 0.3s ease;
    }

    .footer-social a:hover img {
        transform: scale(1.2);
    }

    .footer-bottom {
        margin-top: 30px;
        border-top: 1px solid #333;
        padding-top: 20px;
    }

    .footer-bottom p {
        margin: 0;
        font-size: 0.9em;
        color: #aaa;
    }
</style>
<body>
<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <img src="./images/logo.png" alt="GMC Logo">
        </div>
        <div class="footer-about">
            <h4>About GMC Scholarship</h4>
            <p>We are dedicated to providing scholarships to college students facing financial challenges, helping them achieve their academic goals without the burden of financial stress.</p>
        </div>
        <div class="footer-links">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="index.php">Apply Now</a></li>
            </ul>
        </div>
        <div class="footer-social">
            <h4>Follow Us</h4>
            <a href="#"><img src="./images/facebook-icon.png" alt="Facebook"></a>
            <a href="#"><img src="./images/twitter-icon.png" alt="Twitter"></a>
            <a href="#"><img src="./images/linkedin-icon.png" alt="LinkedIn"></a>
            <a href="#"><img src="./images/instagram-icon.png" alt="Instagram"></a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 GMC Scholarship. All rights reserved.</p>
    </div>
</footer>
</body>
</html>