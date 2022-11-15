<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agora</title>
    <link rel="stylesheet" href="style/style.css">
    <?php
      require('functions.php');
      include('database/connect.php');
    ?>
</head>

<body>
	<header>
		<h1>AGORA</h1>
        <div>
            <?php 
                session_start();
                if(!isset($_SESSION['user'])):
            ?> 
                <h3><a href="login.php">Login</a>     |     <a href="signup.php">Sign up</a></h3>
            <?php 
                elseif(isset($_SESSION['user'])):
            ?> 
                <h3><a href="logout.php">Logout</a></h3>
        </div>
        <?php
            endif;;
        ?>
	</header>