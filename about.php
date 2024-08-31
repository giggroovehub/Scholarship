<?php 
include("nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - GMC Scholarship</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
            color: #333;
            overflow-x: hidden;
        }
        
        header h1 {
            margin: 20px 0;
            font-size: 3em;
            animation: fadeInUp 2s ease-out;
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

        h2 {
            font-size:8.5em;
            position: absolute;
            left: 550px;
            top: 300px;
            color:#ffff;
            text-align: center;
            animation: slideIn 1s ease-out;
        }

        p {
            line-height: 1.8;
            margin-bottom: 20px;
            font-size: 1.1em;
            color: #555;
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
<h2>About Us</h2>
    <img src="./images/grduates.png" width="1710px" height="800px">
    <div class="container">
        <div class="text-content">
       
            <p>Welcome to GMC Scholarship. We are dedicated to supporting college students who face challenges in their educational journey. Our mission is to provide financial assistance to those who are committed to their studies but are hindered by financial constraints.</p>
            
            <p>At GMC Scholarship, we believe that education is a fundamental right, and every student should have the opportunity to succeed. Our scholarships are designed to ease the financial burden, allowing students to focus on their academic goals without additional stress.</p>

            <p>We are committed to making a positive impact on the lives of students and helping them realize their full potential. Through our programs, we aim to empower the next generation of leaders and innovators.</p>
        </div>
        <img src="./images/logo.png" class="pic" alt="GMC Logo">
    </div>

    <?php 
  include("footer.php");
  ?>
 
</body>
</html>
