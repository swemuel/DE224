<?php
session_start();
require_once('../functions.php');
require_once('../database/DBController.php');
require_once('../database/connect.php');

$email        = $_POST['email'];
$pword        = $_POST['pword'];
$hashed_pword = password_hash($pword, PASSWORD_DEFAULT);
$account_type = $_POST['type'];



if (isset($_POST['submit'])) {
    $_SESSION['user'] = $email;
    //  MYSQL injection prevention
    $email = stripslashes($email);
    $pword = stripslashes($pword);
    $email = mysqli_real_escape_string($con, $email);
    $pword = mysqli_real_escape_string($con, $pword);
    
    if ($account_type == "buyer") {
        $sql = "SELECT * FROM buyer WHERE email like '$email' and pword like '$pword'";
    } else if ($account_type == "business") {
        $sql = "SELECT * FROM business WHERE email like '$email' and pword like '$pword'";
    } else if ($account_type == "seller") {
        $sql = "SELECT * FROM seller WHERE email like '$email' and pword like '$pword'";
    } else {
        header("Location: ../login.php");
    }
    
    $result = $con->query($sql);
    $row    = $result->fetch_array(MYSQLI_NUM);
    $count  = mysqli_num_rows($result);
    
    if ($count === 1) {
        if (isset($_SESSION['user'])) {
            if ($account_type == "buyer") {
                header("Location: ../buyer.php");
            } else if ($account_type == "business") {
                header("Location: ../business.php");
            } else if ($account_type == "seller") {
                header("Location: ../seller.php");
            }
        }
    } else {
        header("Location: ../login.php");
    }
}