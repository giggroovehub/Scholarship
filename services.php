<?php
include("nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f8fa;
            color: #333;
            overflow-x: hidden;
        }

        h1 {
            font-size: 2.8em;
            color: #2c3e50;
            margin: 40px auto;
            padding-bottom: 10px;
            text-align: center;
            animation: slideInLeft 1s ease-in-out;
        }

        h2 {
            font-size:8.5em;
            position: absolute;
            left: 450px;
            top: 300px;
            color:#ffff;
            text-align: center;
            animation: slideIn 1s ease-out;
        }

        .container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
            padding: 20px;
        }

        @media (min-width: 768px) {
            .container {
                grid-template-columns: 1fr 1fr;
                align-items: center;
            }
        }

        .text-block {
            animation: fadeInUp 1.2s ease-in-out;
        }

        .text-block h3 {
            font-size: 1.8em;
            color: #34495e;
            margin: 30px 0 10px;
            border-bottom: 2px solid #3498db;
        }

        .text-block p {
            margin: 0 0 20px;
            font-size: 1.2em;
            line-height: 1.6;
        }

        .image-block {
            text-align: center;
            animation: slideInRight 1.2s ease-in-out;
        }

        .image-block img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .image-block img:hover {
            transform: scale(1.1);
        }

        /* Animations */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-100%); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(100%); }
            to { opacity: 1; transform: translateX(0); }
        }
    </style>
</head>
<body>
    <h2>Our Services</h2>
<img src="./images/grduates.png" width="1710px" height="800px">

    <div class="container">
        <div class="text-block">
            <h3>Eligibility Assessment:</h3>
            <p>We simplify the scholarship process by evaluating your qualifications against various scholarship criteria. Our expert team carefully reviews your application to determine your eligibility, ensuring you’re considered for opportunities that truly match your profile.</p>
        </div>
        <div class="image-block">
            <img src="./images/students.jpg" alt="Students discussing scholarships">
        </div>

        <div class="image-block">
            <img src="./images/bukas-student.width-800.jpg" alt="Scholarship program development">
        </div>
        <div class="text-block">
            <h3>Scholarship Program Development:</h3>
            <p>In addition to matching students with existing scholarships, we take an active role in creating new scholarship programs. Our commitment to education and opportunity drives us to design scholarships that cater to diverse student needs and aspirations.</p>
        </div>
    </div>

    <?php 
  include("footer.php");
  ?>
  
</body>
</html>
