<?php

class Person {
    private $firstName = "Sam";
    private $lastName = "Moulson";
}

class Pet {
    public function owner() {
        $greet = "Hi there!!";
        return $greet;
    }
}

?>