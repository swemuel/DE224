<?php
  $listingID = $_GET['listingNum'] ?? 1;
  foreach($listing->getProductData() as $item) : 
    if($item['listingNum'] == $listingID ):
?>

