<?php
$sellerID = $_COOKIE['seller_id'];
$productID = $_GET['productID'] ?? 1;
foreach($product->getSellersProductData($sellerID) as $item) : 
    if($item['productID'] == $productID):
?>

<!DOCTYPE html>
    <main class="catalogue">
    <a href="seller.php">My Account</a>
    <figure class="item">
            <img src="<?php echo $item['productImage'] ?>" alt="<?php echo $item['productImage'] ?>">
        </figure>

      <div id="item-details">
          <h2><?php echo $item['prodTitle'] ?></h2>
          <h4><?php echo 'Listing Number: #' . $item['listingNum'] ?></h4>
          <div id="item-account">
              <h3>Seller: <?php echo $item['businessName'] ?></h3>
              <?php if(isset($item['logo'])): ?>
                  <img src="<?php echo $item['logo'] ?>" ? style="width: 10%;">
              <?php
                  endif;;
              ?>
          </div>
          <div id="buy" style="margin-bottom: 2em;">
              <h3><?php echo '$' . $item['price'] ?></h3>
          </div>
      </div>
    </main>
  </body>
</html>

<?php
  endif;;
  endforeach;;
?>