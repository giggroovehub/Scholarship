<?php 
include("php/config.php");

if(isset($_POST['submit'])){
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $age = $_POST['age'];
    $lvl = $_POST['lvl'];
    $course = $_POST['subOption'];
    $school = $_POST['selectOption'];
    $essay = $_POST['essay'];

    // Map option values to their respective names
    $schoolNames = [
        'option1' => 'Southern Luzon State University - Gumaca Campus (SLSU)',
        'option2' => 'Eastern Quezon College (EQC)',
        'option3' => 'Holy Child Jesus College (HCJC)',
        'option4' => 'Philtech Institute of Arts and Technology, INC. (PIAT)'
    ];

    $courseNames = [
        'Southern Luzon State University - Gumaca Campus (SLSU)' => [
            '' => 'Bachelor of Science in Nursing',
            'subOption1' => 'Bachelor of Science in Business Administration Major in Human Resource Management',
            'subOption2' => 'Bachelor of Science in Industrial Technology Major in Computer Technology'
        ],
        'Eastern Quezon College (EQC)' => [
            '' => 'Bachelor of Arts in History',
            'subOption1' => 'Bachelor of Science in Business Administration Major in Financial Management',
            'subOption2' => 'Bachelor of Science in Business Administration Major in Marketing Management'
        ],
        'Holy Child Jesus College (HCJC)' => [
            '' => 'Bachelor of Elementary Education',
            'subOption1' => 'Bachelor of Secondary Education Major in English',
            'subOption2' => 'Bachelor of Science in Business Administration Major in Marketing Management'
        ],
        'Philtech Institute of Arts and Technology, INC. (PIAT)' => [
            '' => 'Diploma in Tourism and Travel Services',
            'subOption1' => 'Diploma in Multimedia Arts and Design',
            'subOption2' => 'Diploma in Hospitality Services and Technology'
        ]
    ];

    // Retrieve the school and course names
    $selectedSchoolName = $schoolNames[$school] ?? '';
    $selectedCourseName = $courseNames[$selectedSchoolName][$course] ?? '';

    // Validate inputs
    if (!empty($selectedSchoolName) && !empty($selectedCourseName)) {
        // Prepare and execute the SQL statement
        $stmt = $con->prepare("INSERT INTO apply (lname, fname, mname, age, lvl, course, school, essay) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('ssssssss', $lname, $fname, $mname, $age, $lvl, $selectedCourseName, $selectedSchoolName, $essay);

        if ($stmt->execute()) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . $con->error;
        }
    } else {
        echo "Please select both a school and a course.";
    }
}
?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

/* Basic Reset */
body, h2, p, input, textarea, label, form, select {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    box-sizing: border-box;
}

body {
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.form-container {
    background-color: #ffffff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 600px; /* Increased max-width for better readability on larger screens */
    width: 100%;
    animation: fadeInUp 0.8s ease-in-out;
}

h2 {
    text-align: center;
    margin-bottom: 1.5rem;
    color: #333;
}

.form-row {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    margin-bottom: 1rem;
}

.field {
    flex: 1;
    min-width: 220px; /* Adjusted min-width for better responsiveness */
    margin-bottom: 1rem;
    position: relative;
}

label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
    color: #555;
}

input[type="text"], 
textarea,
select {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 0.9rem;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus, 
textarea:focus,
select:focus {
    border-color: #007bff;
    outline: none;
}

textarea {
    resize: vertical;
    min-height: 100px;
}

.submit-btn {
    width: 100%;
    padding: 0.75rem;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
    margin-top: 1rem;
}

.submit-btn:hover {
    background-color: #0056b3;
    transform: scale(1.02);
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .form-container {
        padding: 1.5rem; /* Adjusted padding for better spacing on smaller screens */
    }
    
    .form-row {
        flex-direction: column;
    }
}

@media (max-width: 600px) {
    .form-container {
        padding: 1rem;
    }

    .form-row {
        flex-direction: column;
    }

    input[type="text"], 
    textarea,
    select {
        font-size: 0.8rem;
        padding: 0.6rem;
    }

    .submit-btn {
        padding: 0.6rem;
        font-size: 0.9rem;
    }
}


    </style>
</head>
<body>

<?php
include('sidebar.php');
?>

<div class="form-container">
    <form action="" method="post">
        <h2>GMC Scholarship Application</h2>

        <div class="form-row">
            <div class="field input">
                <label for="lname">Last Name:</label>
                <input type="text" name="lname" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="fname">First Name:</label>
                <input type="text" name="fname" autocomplete="off" required>
            </div>
        </div>

        <div class="form-row">
            <div class="field input">
                <label for="mname">Middle Name:</label>
                <input type="text" name="mname" autocomplete="off" required>
            </div>

            <div class="field input">
                <label for="age">Age:</label>
                <input type="text" name="age" autocomplete="off" required>
            </div>
        </div>

        <div class="form-row">
            <div class="field input">
                <label for="lvl">Year Level:</label>
                <input type="text" name="lvl" autocomplete="off" required>
            </div>
    
<?php 
 include('option.php');

?>

        <div class="field input">
            <header>Why do you want to join GMC Scholarship Program?</header>
            <label for="essay">Essay:</label>
            <textarea name="essay" rows="4" autocomplete="off" required></textarea>
        </div>

        <input type="submit" name="submit" value="Submit Application Form" class="submit-btn">
    </form>
</div>


              
</body>
</html>