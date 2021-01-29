<?php


$ServerName = "localhost";
$UserName = "root" ;
$password = "";
$dbname = "Company";

/// Create Connection
$connection = new mysqli($ServerName,$UserName,$password,$dbname);

/// Check Connection
if($connection->connect_error)
{
    die("Connection faild:" . $connection->connect_error);
}

/// Create a database.
$sql = "CREATE DATABASE Company";

//  create table

$sql = "CREATE TABLE workers(
    id int(8)  PRIMARY KEY, 
    name VARCHAR(50) NOT NULL,
    department VARCHAR(50) NOT NULL,
    salary int(5) NOT NULL,
    age int (2) NOT NULL, /* Age = 99 years is enough :)  */ 
    year int (5) NOT NULL)";

if ($connection->query($sql) === TRUE) 
{
     echo "Table created successfully\n";
} 
else 
{
echo "Error creating table : " . $connection->error;
}

$connection->close();




?>