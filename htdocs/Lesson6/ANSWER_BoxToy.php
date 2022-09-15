<?php
class Toy 
{
	public $name;
	public $color;
	public $cost;
	
  function __construct($newName, $newColor, $newCost) 
  {
    $this->name = $newName;
    $this->color = $newColor;
    $this->cost = $newCost;
  }
  function __toString() 
  {
    //  $result = $this->name .  '(' .$this->color . ' ) @ $' . $this->cost;
	$result = "$this->name ($this->color) @ $$this->cost";
    return $result;
  }
}
class Box { 
	protected $toyCount = 0;
	protected $allMyToys = array();

  function addToy($newName, $newColor, $newCost) 
  {
    $aNewToy = new Toy($newName, $newColor, $newCost);
    $this->allMyToys[] = $aNewToy;
    $this->toyCount += 1;
  }
  function sortToys () 
  {
	  usort($this->allMyToys,  function ($a, $b) {return strcmp($a->name, $b->name); });
  }
  function __toString () 
  {
    $this->sortToys();
    $result = "<br>This toybox has $this->toyCount toys<br>";
	$result .=  '<ul>';
    foreach ($this->allMyToys as $aToy) 
	{
      $result .= "<li>$aToy</li>";
    }
	$result .= '</ul>';
    return $result;
  }
}

$theBox = new Box();
$theBox->addToy('Bear', 'brown', 12.34);
$theBox->addToy('Aadrvard', 'black', .12);
$theBox->addToy('Doll', 'pink', 34.36);
var_dump($theBox);

echo $theBox;

$servername = "localhost";
$username = "root";

    //     Create connection    //
$conn = new mysqli($servername, $username);

    //    Check connection     //
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error . "<br />");
}
echo "Connected successfully" . "<br />";

$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "DB created successfully" . "<br />";
} else {
  echo "Error creating database: " . $conn->error . "<br />";
}

$conn->select_db("myDB");
// sql to create table
$sql = "CREATE TABLE MyGuests (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
  if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully" . "<br />";
  } else {
    echo "Error creating table: " . $conn->error . "<br />";
  }

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Joe', 'Boy', 'jb@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully" . "<br />";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error . "<br />";
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
