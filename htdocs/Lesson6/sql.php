<?php

$servername = "localhost";
$username = "root";

    //      1.  Create connection    //

$conn = new mysqli($servername, $username);

    //      1.1  Check connection     //
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error . "<br />");
}
echo "Connected successfully" . "<br />";


    //      2.  Create DB       //

$sql = "CREATE DATABASE IF NOT EXISTS myDB";
    //      2.1  Test DB creation       //
if ($conn->query($sql) === TRUE) {
  echo "DB created successfully" . "<br />";
} else {
  echo "Error creating database: " . $conn->error . "<br />";
}


    //      3.  Create Table       //

$conn->select_db("myDB");
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
    //      3.1  Test Table       //
  if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully" . "<br />";
  } else {
    echo "Error creating table: " . $conn->error . "<br />";
  }


    //      4.  Insert Data       //

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Joe', 'Boy', 'jb@example.com')";
    //  4.1  Test insertion       //
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully" . "<br />";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error . "<br />";
}


    //      5.  Query DB       //

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
    //      5.1 Test/display Query results       //
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();