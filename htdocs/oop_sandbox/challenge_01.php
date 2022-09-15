<?php

class Bicycle {

  var $brand;
  var $model;
  var $date;
  var $description = 'Used bicycle';
  var $weight_kg = 0.0;

  function name() {
    return "Brand: " . $this->brand . ". Model: " . $this->model;
  }

  function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218;
  }

  function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

}


$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->date = DateTime::createFromFormat('d. m. Y', '22. 11. 1968');
$trek->weight_kg = 1.0;

$cd = new Bicycle;
$cd->brand = 'Cannondale';
$cd->model = 'Synapse';
$cd->date = '2016';
$cd->weight_kg = 8.0;

echo $trek->name() . "<br />";
echo $cd->name() . "<br />";
echo 'Trek Purchase Date: ' . $trek->date->format('Y-m-d') . PHP_EOL . "<br />";

echo $trek->weight_kg . "<br />";
echo $trek->weight_lbs() . "<br />";
// notice that one is property, one is a method

$trek->set_weight_lbs(2);
echo $trek->weight_kg . "<br />";
echo $trek->weight_lbs() . "<br />";

?>
