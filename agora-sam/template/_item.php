<?php
$sellerID = $_GET['sellerID'] ?? 2;
$productID = $_GET['productID'] ?? 1;
foreach($product->getSellersProductData($sellerID) as $item) : 
    if($item['productID'] == $productID):
?>

<!DOCTYPE html>
    <main class="catalogue">
    <div>
      <a href="buyer.php">My Account</a>
    </div>
    
    <figure class="item">
            <img src="<?php echo $item['productImage'] ?>" alt="<?php echo $item['productImage'] ?>">
        </figure>

      <div id="item-details">
          <h2><?php echo $item['prodTitle'] ?></h2>
          <div id="item-account">
              <h3>Business: <?php echo $item['businessName'] ?></h3>
              <?php if(isset($item['logo'])): ?>
                  <img src="<?php echo $item['logo'] ?>" ? style="width: 100%;">
              <?php
                  endif;;
              ?>
          </div>
          <div id="buy" style="margin-bottom: 2em;">
              <h3><?php echo '$' . $item['price'] ?></h3>
              <div id="buy-now">
                  <button type="submit">Buy</button>
              </div>  
          </div>
      </div>
    </main>
  </body>
</html>

<?php
  endif;;
  endforeach;;
?>