<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Dropdown</title>
    <script>
        function updateCourses() {
            var schoolSelect = document.getElementById('selectOption');
            var courseSelect = document.getElementById('subOption');
            var selectedSchool = schoolSelect.options[schoolSelect.selectedIndex].text;

            // Clear previous course options
            courseSelect.innerHTML = '<option value="">Select a course</option>';

            // Define course options based on selected school
            var courses = [];
            switch (selectedSchool) {
                case 'Southern Luzon State University - Gumaca Campus (SLSU)':
                    courses = [
                        { value: '', label: 'Bachelor of Science in Nursing' },
                        { value: 'subOption1', label: 'Bachelor of Science in Business Administration Major in Human Resource Management' },
                        { value: 'subOption2', label: 'Bachelor of Science in Industrial Technology Major in Computer Technology' }
                    ];
                    break;
                case 'Eastern Quezon College (EQC)':
                    courses = [
                        { value: '', label: 'Bachelor of Arts in History' },
                        { value: 'subOption1', label: 'Bachelor of Science in Business Administration Major in Financial Management' },
                        { value: 'subOption2', label: 'Bachelor of Science in Business Administration Major in Marketing Management' }
                    ];
                    break;
                case 'Holy Child Jesus College (HCJC)':
                    courses = [
                        { value: '', label: 'Bachelor of Elementary Education' },
                        { value: 'subOption1', label: 'Bachelor of Secondary Education Major in English' },
                        { value: 'subOption2', label: 'Bachelor of Science in Business Administration Major in Marketing Management' }
                    ];
                    break;
                case 'Philtech Institute of Arts and Technology, INC. (PIAT)':
                    courses = [
                        { value: '', label: 'Diploma in Tourism and Travel Services' },
                        { value: 'subOption1', label: 'Diploma in Multimedia Arts and Design' },
                        { value: 'subOption2', label: 'Diploma in Hospitality Services and Technology' }
                    ];
                    break;
            }

            // Populate course options
            for (var i = 0; i < courses.length; i++) {
                var option = document.createElement('option');
                option.value = courses[i].value;
                option.text = courses[i].label;
                courseSelect.add(option);
            }
        }
    </script>
</head>
<body>
    <form method="post" action="">
        <label for="selectOption">School</label>
        <select id="selectOption" name="selectOption" onchange="updateCourses()">
            <option value="">Select an option</option>
            <option value="option1">Southern Luzon State University - Gumaca Campus (SLSU)</option>
            <option value="option2">Eastern Quezon College (EQC)</option>
            <option value="option3">Holy Child Jesus College (HCJC)</option>
            <option value="option4">Philtech Institute of Arts and Technology, INC. (PIAT)</option>
        </select>

        <div id="additionalOptions">
            <label for="subOption">Course: </label>
            <select id="subOption" name="subOption">
                <option value="">Select a course</option>
            </select>
        </div>

    </form>
</body>
</html>
