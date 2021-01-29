<?php


$ServerName = "localhost";
$UserName = "root" ;
$password = "";

/// Create Connection
$connection = new mysqli($ServerName,$UserName,$password);

/// Check Connection
if($connection->connect_error)
{
    die("Connection faild:" . $connection->connect_error);
}

/// Create a database.
$sql = "CREATE DATABASE Company";

if ($connection->query($sql) === TRUE) 
{
     echo "Database created successfully";
} 
else 
{
echo "Error creating database : " . $connection->error;
}

$connection->close();




?>