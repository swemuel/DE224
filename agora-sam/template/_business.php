<?php
//session_start();
  foreach($users->getUsersData('business') as $user) : 
    if($user['email'] == $_SESSION['user']):
        setcookie("business_id", $user['businessID']);
?>
    <main class="account_page">
      <table>
        <tr>
        <td><a href="sign_up/business_signup.php">Edit Details</a></td>
        <td>
        <?php if(!isset($user['logo'])): ?>
            <form action="./insert/logo_insert.php" method="post">
                <input type="file" id="image" name="image" required>
                <input type="submit" value="Add Logo" style="margin-top: 1em;">
            </form>
        <?php
            endif;;
        ?>
        </td>
        </tr>
        <tr>
          <td>Business Number</td>
          <td>#<?php echo $user['businessID']?></td>
        </tr>
        <tr>
          <td>Business Name</td>
          <td><?php echo $user['businessName']?></td>
        </tr>
        <tr>
          <td>Email Address</td>
          <td><?php echo $user['email']?></td>
      </table>

      <div class="account_links">
        <div id="item-account">
          <?php if(isset($user['logo'])): ?>
            <img src="<?php echo $user['logo'] ?>" ? style="width: 100%;">
            <?php
                endif;;
            ?>

    </main>

</body>
</html>
<?php
  endif;;
  endforeach;;
?>