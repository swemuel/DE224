<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "agora");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $image = $_REQUEST['image'];
        $business_id = $_COOKIE['business_id'];
         
        // Performing insert query execution
        // here our table name is seller
        $sql = 
        "UPDATE business 
        SET logo = '../agora-sam/images/$image'
        WHERE businessID = '$business_id'
        ";
         
        if(mysqli_query($conn, $sql)){
            setcookie("prod_id", $prod_id);
            header("Location: ../business.php");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>