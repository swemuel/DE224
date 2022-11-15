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
        $productID =  intval($_COOKIE['prod_id']);
        $sellerID = $_COOKIE['seller_id'];
         
        // Performing insert query execution
        // here our table name is seller
        $sql = 
        "INSERT INTO listing (productID, sellerID) 
        VALUES ('$productID','$sellerID') 
        ";
         
        if(mysqli_query($conn, $sql)){
            header("Location: ../seller.php");
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