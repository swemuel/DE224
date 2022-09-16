<?php
include_once 'ProgressReportingDB.php';

/*
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'myDB';
*/
// MAKE THE INSTANCE 

$db = new ProgressReportingDB('localhost', 'root', '', 'myDB');


// Drop database if required
$sql = 'DROP DATABASE if exists myDB';
$db->query($sql);

// create database
$db->createDatabase();

// select database
$db->selectDatabase();


// create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$db->query($sql);


// Insert data into the table
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mike', 'Lance', 'mike@cat.com')";
$db->query($sql);


// SELECT data from table
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $db->query($sql);


// display results
while ($row = $result->fetch())
{
  echo "<br>id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
}
