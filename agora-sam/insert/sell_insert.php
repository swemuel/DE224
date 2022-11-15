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
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $email =  $_REQUEST['email'];
        $pword = $_REQUEST['password'];
        $hashed_pword = password_hash($pword, PASSWORD_DEFAULT);
        $business_id = $_REQUEST['businessID'];
        $seller_id = $_COOKIE['seller_id'];
         
        if(isset($business_id)){
            $sql = 
            "UPDATE seller
            SET firstName = '$first_name', lastName = '$last_name', email = '$email', pword = '$pword', businessID = '$business_id'
            WHERE sellerID = '$seller_id'
            ";
        }
        else{
            $sql = "INSERT INTO seller (firstName, lastName, email, pword, businessID) VALUES ('$first_name',
            '$last_name','$email','$pword','$business_id')";
        }
         
        if(mysqli_query($conn, $sql)){
            header("Location: ../login.php");
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