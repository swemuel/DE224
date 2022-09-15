<?php
Class Fruit {
    protected $name;
    public $colour;

    //method is the same as the setName()
    function __construct($newName) {
        $this->name = $newName;
    }
    
    public function getFruitName() {
        return $this->name;
    }
}


?>