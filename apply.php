<?php 
  include("php/config.php");
  include("sidebar.php");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h1{
            margin-top: 2%;
           text-align: center;
        }
         .card-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        width: 100%;
        max-width: 1000px; /* Adjust to fit your layout */
        margin: 20px auto;
    }

    .scholarship {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
        position: relative;
        width: 100%;
        padding-bottom: 100%; /* Keeps the card square by setting padding-bottom to 100% of the width */
    }

    .scholarship:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .scholarship img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 12px 12px 0 0; /* Optional: round corners of the image */
    }

    .scholarship .card-content {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 10px; /* Reduced padding for a smaller card */
        background-color: #f9f9f9;
        box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
    }

    .scholarship .card-title {
        font-size: 16px; /* Reduced font size */
        font-weight: bold;
        margin-bottom: 5px; /* Reduced margin */
        color: #333;
    }

    .scholarship .card-description {
        font-size: 12px; /* Reduced font size */
        color: #555;
        margin-bottom: 10px; /* Reduced margin */
    }

    .apply{
        background-color: green;
        color: #fff;
        font-size: 15px;
        padding: 5px 20px 5px 20px;
        border: none;
        text-decoration: none;
    }

    .apply:hover{
        border-radius: 40px;
        transition: 1s;
    }

    </style>
</head>
<body>
<img class="img" src="./images/Blue Yellow and White Modern School Admission Banner.png" width="1710px" height="700px">

    <h1>Scholarship Offered</h1>

     <div class="card-container">
     <?php 
     $res = mysqli_query($con, "SELECT * FROM scholarship");
     while($row = mysqli_fetch_assoc($res)){
     ?>
     <div class="scholarship">
         <img src="Images/<?php echo htmlspecialchars($row['file']); ?>" alt="Scholarship Image">
         <div class="card-content">
             <div class="card-title"><?php echo htmlspecialchars($row['type']); ?></div>
             <div class="card-description"><?php echo htmlspecialchars($row['description']); ?></div>
             <a href="forms.php" class="apply" type="submit" name="submit">Apply Now</a>
         </div>
     </div>
     <?php } ?>    
 </div>

</body>
</html>