<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("php/config.php");
include("adminSidebar.php");

if(isset($_POST['submit'])){
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_error = $_FILES['image']['error'];
    $type = $_POST['type'];
    $description = $_POST['description'];

    
    // Define the target directory and path
    $upload_dir = 'Images/';
    $target_file = $upload_dir . basename($file_name);
    
    // Check if there was an error with the file upload
    if ($file_error !== UPLOAD_ERR_OK) {
        echo "<h2>File upload error: " . $file_error . "</h2>";
        exit();
    }
    
    // Sanitize the file name to avoid issues with special characters
    $file_name = preg_replace("/[^a-zA-Z0-9.]/", "", $file_name);
    $target_file = $upload_dir . basename($file_name);
    
    // Check if file is an actual image
    $check = getimagesize($file_tmp);
    if ($check === false) {
        echo "<h2>File is not an image.</h2>";
        exit();
    }
    
   
    // Move the uploaded file to the target directory
    if (move_uploaded_file($file_tmp, $target_file)) {
        // Insert file name into the database
        $sql = "INSERT INTO scholarship (file, type, description) VALUES ('$file_name', '$type', '$description')";
        if (mysqli_query($con, $sql)) {
            echo "<h2>File Uploaded Successfully</h2>";
        } else {
            echo "<h2>Database error: " . mysqli_error($con) . "</h2>";
        }
    } else {
        echo "<h2>File could not be moved to the target directory.</h2>";
    }
}
if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM scholarship WHERE id = '$id'";
    if (mysqli_query($con, $sql)) {
        echo "<h2>Scholarship Deleted Successfully</h2>";
    } else {
        echo "<h2>Database error: " . mysqli_error($con) . "</h2>";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage</title>
  <style>
     body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
        flex-direction: column;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
        margin: 20px auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form label {
        font-weight: bold;
        margin-top: 10px;
        display: block;
        width: 100%;
    }

    form input[type="text"],
    form input[type="file"] {
        width: calc(100% - 22px); /* Adjust for padding */
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    form button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    form button:hover {
        background-color: #0056b3;
    }

    form .delete-button {
        background-color: #ff4d4d;
        color: #fff;
        padding: 8px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        margin-top: 10px;
    }

    form .delete-button:hover {
        background-color: #cc0000;
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

  </style>



</head>
<body>

<form method="post" enctype="multipart/form-data">
<h1>Create <br>New Scholarship <br>Program</h1>
    <input type="file" name="image" />
    <label for="text">Type of Scholarship: </label>
                    <input type="text" name="type" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="text">Description</label>
                    <input type="text" name="description" autocomplete="off" required>
                </div>

    <button type="submit" name="submit">Create</button>

  
                
</form>
               

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
            <form method="post" onsubmit="return confirm('Are you sure you want to delete this scholarship?');">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
                <button type="submit" name="delete" class="delete-button">Delete</button>
            </form>
        </div>
    </div>
    <?php } ?>    
</div>


</body>
</html>
