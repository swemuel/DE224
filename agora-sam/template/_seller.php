<?php
//session_start();
  foreach($users->getUsersData('seller') as $user) : 
    if($user['email'] == $_SESSION['user']):
      setcookie("seller_id", $user['sellerID']);
?>
    <main class="account_page">
      <table>
        <tr>
          <td><a href="sign_up/seller_signup.php">Edit Details</a></td>
          <td></td>
        </tr>
        <tr>
          <td>User Number</td>
          <td>#<?php echo $user['sellerID']?></td>
        </tr>
        <tr>
          <td>Name</td>
          <td><?php echo $user['firstName']?> <?php echo $user['lastName']?></td>
        </tr>
        <tr>
          <td>Email Address</td>
          <td><?php echo $user['email']?></td>
      </table>

      <div class="account_links">
        <div id="item-account">
          <h3><a href="seller_products.php">Listed Items</a></h3>
        </div>
        <div id="item-account">
          <h3><a href="placeholder.html">Items Sold</a></h3>
        </div>
        <div id="item-account">
          <h3><a href="add_listing.php">Add Listing</a></h3>
        </div>
      </div>

    </main>

</body>
</html>
<?php
  endif;;
  endforeach;;
?>