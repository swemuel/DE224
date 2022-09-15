<!DOCTYPE html>
<html>
<head lang="en">
    <title>Grades</title>
</head>
<body>
    <?php
        $marks = 86;

        switch ($marks) {
            case in_array($marks, range(0, 39.9)): 
                $grade = "E"; $gpa = "-1"; 
                break;
            case in_array($marks, range(40, 49.9)): 
                $grade = "D"; $gpa = "0"; 
                break;
            case in_array($marks, range(50, 54.9)): 
                $grade = "C-"; $gpa = "1"; 
                break;
            case in_array($marks, range(55, 59.9)): 
                $grade = "C"; $gpa = "2"; 
                break;
            case in_array($marks, range(60, 64.9)): 
                $grade = "C+"; $gpa = "3"; 
                break;
            case in_array($marks, range(65, 69.9)): 
                $grade = "B-"; $gpa = "4"; 
                break;
            case in_array($marks, range(70, 74.9)): 
                $grade = "B"; $gpa = "5"; 
                break;
            case in_array($marks, range(75, 79.9)): 
                $grade = "B+"; $gpa = "6"; 
                break;
            case in_array($marks, range(80, 84.9)): 
                $grade = "A-"; $gpa = "7"; 
                break;
            case in_array($marks, range(85, 89.9)): 
                $grade = "A"; $gpa = "8"; 
                break;
            case in_array($marks, range(90, 100)): 
                $grade = "A+"; $gpa = "9"; 
                break;
        }
        echo "Grade: " . $grade . " GPA: " . $gpa;
    ?>
</body>
</html>