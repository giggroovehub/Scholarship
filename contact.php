<?php 
include("nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - GMC Scholarship</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            color: #333;
            overflow-x: hidden;
        }
       
        h2 {
            font-size:8.5em;
            position: absolute;
            left: 480px;
            top: 300px;
            color:#ffff;
            text-align: center;
            animation: slideIn 1s ease-out;
        }

        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 30px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            animation: fadeIn 2s ease-out;
            display: flex;
            align-items: center;
            gap: 20px;
            position: relative;
        }

        .text-content {
            flex: 1;
        }

        .pic {
            max-width: 400px;
            height: auto;
            animation: fadeIn 2s ease-out;
        }

        p {
            line-height: 1.8;
            margin-bottom: 20px;
            font-size: 1.1em;
            color: #555;
            animation: fadeIn 2s ease-out;
        }

        .email-link {
            font-size: 1.2em;
            color: #4a90e2;
            text-decoration: none;
            font-weight: bold;
            display: block;
            margin-top: 20px;
            animation: fadeIn 2s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <h2>Contact Us</h2>
<img src="./images/grduates.png" width="1710px" height="800px">

    <div class="container">
        <div class="text-content">
           
            <p>If you have any questions or need assistance, we are here to help. Feel free to reach out to us through the following contact details:</p>
            <p>Email us at:</p>
            <a href="mailto:gmcscholarship670@gmail.com" class="email-link">gmcscholarship670@gmail.com</a>
        </div>
        <img src="./images/logo.png" class="pic" alt="Contact Us Image">
    </div>

    <?php 
  include("footer.php");
  ?>
 
</body>
</html>
