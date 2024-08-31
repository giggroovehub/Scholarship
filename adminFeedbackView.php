<?php

include('php/config.php');
include("adminSidebar.php");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Comments</title>
    <style>
        /* General Card Container Style */
        .card-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
            background-color: #f9f9f9; /* Slightly off-white background for the container */
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Individual Comment Card Style */
        .comment {
            background: #ffffff; /* White background for cards */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s, transform 0.3s;
            position: relative;
            padding: 15px;
            text-align: left; /* Align text to the left for better readability */
        }

        /* Hover Effect for Comment Card */
        .comment:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        /* Card Header Style */
        .comment-header {
            font-size: 24px;
            font-weight: bold;
            color: #007bff; /* Blue color for header text */
            border-bottom: 3px solid #007bff; /* Thicker blue line for emphasis */
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        /* Card Body Style */
        .comment-body {
            font-size: 16px;
            color: #333; /* Darker color for better readability */
            line-height: 1.6; /* Improved line height for readability */
        }
    </style>
</head>
<body>

<div class="card-container">
    <div class="comment-header">Student Comments</div>
    <?php 
    $res = mysqli_query($con, "SELECT * FROM comment");
    while($row = mysqli_fetch_assoc($res)){
    ?>
    <div class="comment">
        <div class="comment-body"><?php echo htmlspecialchars($row['comment']); ?></div>
    </div>
    <?php } ?>  
</div>

</body>
</html>
