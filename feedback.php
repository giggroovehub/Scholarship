<?php
ob_start(); 

include("php/config.php");
include("sidebar.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {
        $comment = $_POST['comment'];

        $sql = mysqli_query($con, "INSERT INTO comment (comment) VALUES ('$comment')");

        header('Location: ' . $_SERVER['PHP_SELF']);
        exit; 
    }
}

ob_end_flush(); 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column; /* Align items vertically */
        }

        header {
            font-size: 2.5em;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 2px;
            animation: fadeIn 1s ease-in-out;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            width: 400px;
            animation: slideIn 0.7s ease-out;
            margin: 0 auto; /* Center form horizontally */
        }

        .field {
            margin-bottom: 20px;
        }

        label {
            font-size: 1.1em;
            color: #555;
            display: block;
            margin-bottom: 8px;
            transition: color 0.3s;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            font-size: 1.1em;
            border: 2px solid #ccc;
            border-radius: 8px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input[type="text"]:focus {
            border-color: #007BFF;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.2);
            outline: none;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            font-size: 1.1em;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s, box-shadow 0.2s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                transform: translateY(-30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>

    <header>Student Feedback</header>
    <form action="" method="post">
        <div class="field input">
            <label for="comment">Comment:</label>
            <input type="text" name="comment" autocomplete="off" required>
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php include("studentFeedbackView.php"); ?>

</body>
</html>
