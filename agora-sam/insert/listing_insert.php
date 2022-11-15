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
        $prod_id = $_REQUEST['pid'];
        $title =  $_REQUEST['title'];
        $description = $_REQUEST['desc'];
        $price =  $_REQUEST['price'];
        $image = $_REQUEST['image'];
         
        // Performing insert query execution
        // here our table name is seller
        $sql = 
        "INSERT INTO product (productID, prodTitle, prodDesc, price, productImage) 
        VALUES ('$prod_id','$title','$description','$price','../agora-sam/images/$image') 
        ";
         
        if(mysqli_query($conn, $sql)){
            setcookie("prod_id", $prod_id);
            header("Location: ../insert/listing_insert_two.php");
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