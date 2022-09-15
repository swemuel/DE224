<?php
class Person {
    //properties
    private $fName;
    private $lName;
    private $age;

    //Methods
    public function setFName($newFName) {
        $this->fName = $newFName;
    }

    public function setLName($newLName) {
        $this->lName = $newLName;
    }

    public function fullName() {
        return $this->fName . " " . $this->lName;
    }
}

?>