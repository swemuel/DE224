<?php
$sellerID = $_COOKIE['seller_id'];
$product_shuffle = $product->getSellersProductData($sellerID);
?>
<main class="catalogue">
<a href="seller.php">My Account</a>
    <?php
    foreach($product_shuffle as $item)
    {
        ?>
        <figure class="item">
        <a href="<?php printf('%s?productID=%s', 'seller_item.php',$item['productID'])?>">
            <img src="<?php echo $item['productImage'] ?>" alt="">
        </a>
        <figcaption class="item-sub-head">
            <p><?php echo $item['prodTitle'] ?></p>
            <p><?php echo '$' . $item['price'] ?></p>
        </figcaption>
        </figure>
        <?php
    }
        ?>
</main>