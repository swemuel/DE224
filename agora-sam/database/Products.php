<?php

// Fetch product data

class Product{
    public $db = null;

    public function __construct(DBController $db){
        if(!isset($db->conn)){
            return null;
        }

        $this->db = $db; 
    }

    public function getProductData($table = 'product'){
        $result = $this->db->conn->query("Select * from {$table}");

        $resultArray = array();

        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getSellersProductData($user){
        $result = $this->db->conn->query(
            "SELECT listingNum, product.productID, prodTitle, price, productImage, businessName, logo
            FROM listing 
            INNER JOIN product ON product.productID = listing.productID
            INNER JOIN seller ON seller.sellerID = listing.sellerID
            INNER JOIN business ON business.businessID = seller.businessID
            WHERE seller.sellerID LIKE {$user}");

        $resultArray = array();

        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }
}