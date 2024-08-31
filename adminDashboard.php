<?php 
   session_start();

   include('php/config.php');
   include("adminSidebar.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            color: #333;
        }
        header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 28px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .scholarship {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-left: 5px solid #007bff;
            transform: scale(1);
        }
        .scholarship:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-content {
            padding: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        .card-content div {
            padding: 10px;
            background: #f9f9f9;
            border-radius: 5px;
            transition: background 0.3s ease, color 0.3s ease;
        }
        .card-content div:hover {
            background: #e0e0e0;
            color: #007bff;
        }
        .card-content .label {
            font-weight: bold;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background: #f9f9f9;
            border-top: 1px solid #ddd;
        }
        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
            border: none;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
        .btn.disapprove {
            background-color: #dc3545;
        }
        .btn.disapprove:hover {
            background-color: #c82333;
        }

    </style>
</head>
<body>
<div class="card-container">

<header>Admin Dashboard</header>


<?php 
$res = mysqli_query($con, "SELECT * FROM apply");
while($row = mysqli_fetch_assoc($res)){
?>
    <div class="scholarship">
        <div class="card-content">
            <div class="lname"><strong>Last Name:</strong> <?php echo htmlspecialchars($row['lname']); ?></div>
            <div class="fname"><strong>First Name:</strong> <?php echo htmlspecialchars($row['fname']); ?></div>
            <div class="mname"><strong>Middle Name:</strong> <?php echo htmlspecialchars($row['mname']); ?></div>
            <div class="age"><strong>Age:</strong> <?php echo htmlspecialchars($row['age']); ?></div>
            <div class="lvl"><strong>Level:</strong> <?php echo htmlspecialchars($row['lvl']); ?></div>
            <div class="course"><strong>Course:</strong> <?php echo htmlspecialchars($row['course']); ?></div>
            <div class="school"><strong>School:</strong> <?php echo htmlspecialchars($row['school']); ?></div>
            <div class="essay"><strong>Essay:</strong> <?php echo htmlspecialchars($row['essay']); ?></div>
        </div>
        <div class="buttons">
    <button class="btn approve" name="action" value="approve">Approve</button>
    <button class="btn disapprove" name="action" value="disapprove">Disapprove</button>
</form>

        </div>
    </div>
<?php } ?>
</div>


      