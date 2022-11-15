<?php
  foreach($users->getUsersData('buyer') as $user) : 
    if($user['email'] == $_SESSION['user']):
?>

<main class="account_page">
      <table>
        <tr>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>User Number</td>
          <td>#<?php echo $user['buyerID']?></td>
        </tr>
        <tr>
          <td>Name</td>
          <td><?php echo $user['firstName']?> <?php echo strtoupper($user['lastName'])?></td>
        </tr>
        <tr>
          <td>Email Address</td>
          <td><?php echo $user['email']?></td>
        </tr>
      </table>

      <div class="account_links">
        <div id="item-account">
          <h3><a href="products.php">Catalogue</a></h3>
        </div>
      </div>
    </main>
    <?php
  endif;;
  endforeach;;
?>
