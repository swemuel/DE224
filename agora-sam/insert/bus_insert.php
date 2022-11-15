
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
        $business_name =  $_REQUEST['business_name'];
        $email = $_REQUEST['email'];
        $pword = $_REQUEST['password'];
        $hashed_pword = password_hash($pword, PASSWORD_DEFAULT);
        $business_id = $_COOKIE['business_id'];
         
        // Performing insert query execution
        // here our table name is buyer
        if(isset($business_id)){
            $sql = 
            "UPDATE business
            SET businessName = '$business_name', email = '$email', pword = '$pword'
            WHERE businessID = '$business_id'
            ";
        }
        else{
            $sql = "INSERT INTO business (businessName, email, pword) VALUES ('$business_name',
            '$email','$pword')";
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