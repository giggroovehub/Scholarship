<?php 
session_start();

include("nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Admin Login</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php 
            include("php/config.php");

            if(isset($_POST['submit'])){
                // Correct field names and ensure they match your table structure
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);

                // Update query to match field names
                $query = "SELECT * FROM admin WHERE Email='$email' AND Password='$password'";
                $result = mysqli_query($con, $query) or die("Query Error: " . mysqli_error($con));

                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    // Set session variables
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                    
                    // Redirect to admin dashboard
                    header("Location: adminDashboard.php");
                    exit();
                } else {
                    // Display error message
                    echo "<div class='message'>
                        <p>Wrong Email or Password</p>
                    </div> <br>";
                    echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
                }
            }
            ?>
            <header>Admin Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    <a href="register.php">Log in as Student</a>
                </div>
                <div class="links">
                    Don't have an account? <a href="adminRegister.php">Sign Up Now</a>
                </div>
            </form>
        </div>
    </div>

    <?php include("footer.php"); ?>
</body>
</html>
