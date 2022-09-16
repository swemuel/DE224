<?php
include_once 'ProgressReportingDB.php';

/*
$servername = 'localhost';
$username = 'root';
$password = '';
*/

/*
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
*/
// MAKE THE INSTANCE
$db = new ProgressReportingDB('localhost', 'root', '', 'myDB');


// Drop database if required
$sql = 'DROP DATABASE myDB';
$db->query($sql);
//$conn->query($sql);



// Create database
$sql = "Create DATABASE myDB";
/*
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully <br />";
} else {
  echo "Error creating database: " . $conn->error;
}
*/

$db->createDatabase();
$db->selectDatabase();

// Use DATABASE
// Change db to "myDB" db
// $conn -> select_db('myDB');
// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

/*
if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully <br />";
} else {
  echo "Error creating table: " . $conn->error;
}

*/
$db->query($sql);


// Insert data into the table
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mike', 'Lance', 'mike@cat.com')";
/*
if ($conn->query($sql) === TRUE) {
  echo "<br>New record created successfully <br />";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
*/

$db->query($sql);

// Use query() to run a SELECT, which returns a resultset.
// Run with "FETCH_ASSOC" option.
// Resultset's row is an associative array indexed by column-name only.

$sql = "SELECT id, firstname, lastname FROM MyGuests";
//$result = $conn->query($sql);
$result = $db->query($sql);
/*
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
*/
while ($row = $result->fetch())
{
  echo "<br>id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
}
/*
foreach ($all as $row)
{
  //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
   echo $row . '<br>';
}
var_dump($all);
*/

// close the db conn
// $conn->close();
?>