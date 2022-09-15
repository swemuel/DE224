<?php
    include 'constructor.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Constructor</title>
</head>
<body>
    <?php
        $fruit1 = new Fruit("Musa");

        echo $fruit1->getFruitName();
    ?>
</body>
</html>