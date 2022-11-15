<?php
  //session_start();
 //include header.php file
 include('header.php');

 include_once('functions.php');
 include_once('database/DBController.php');

//  print_r($_SESSION);
//  var_dump($_SESSION);
?>

<!DOCTYPE html>
<html>
  <center>
  <body>
    <form action="includes/_login.php" method="POST" style="border: 1px solid #ccc">
      <div class="container">
        <h1>Login</h1>
        <hr />
        <div style="margin-top: 2em;">
        <label for="type_select"><b>Account Type</b></label>
          <select name="type" id="type_select" required>
            <option value="">--Please choose an option--</option>
            <option value="buyer">Buyer</option>
            <option value="business">Business</option>
            <option value="seller">Seller</option>
          </select>
        </div>

        <div style="margin: 2em;">
          <label for="email"><b>Email</b></label>
          <input type="email" placeholder="Email" name="email" required />
        </div>

        <div style="margin-bottom: 2em;">
          <label for="pword"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="pword" required/>
        </div>

        <div class="clearfix">
          <button type="submit" name="submit" class="signupbtn">Login</button>
        </div>
      </div>
    </form>
  </body>
  </center>
</html>
<?php
 include('footer.php');
 ?>