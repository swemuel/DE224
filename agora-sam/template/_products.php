<?php
  $product_shuffle = $product->getProductData();
?>
    <main class="catalogue">
        <?php
        foreach($product_shuffle as $item)
        {
          ?>
          <figure class="item">
            <a href="<?php printf('%s?productID=%s', 'item.php',$item['productID'])?>">
                <img src="<?php echo $item['productImage'] ?>" alt="Screwdriver">
            </a>
            <figcaption class="item-sub-head">
                <p><?php echo $item['prodTitle'] ?? "Unkown"?></p>
                <p><?php echo '$' .$item['price'] ?? "Unkown"?></p>
            </figcaption>
          </figure>
          <?php
        }
          ?>
    </main>