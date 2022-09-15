<?php
    include 'setter.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Setter</title>
</head>
<body>
    <?php
        $person1 = new Person();

        $person1->setFName("Jimmy");
        
        $person1->setLName("McGill");
        
        echo $person1->fullName();
    ?>
</body>
</html>