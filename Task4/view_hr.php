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

$sql = "SELECT id, name,department,salary,age,year FROM workers WHERE department='HR'";
$result = $connection->query($sql);

if ($result->num_rows > 0) 
{
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Department: " . $row["department"]." - Salary: " . $row["salary"]." - age: " . $row["age"]." - year: " . $row["year"].  "<br>";
  }
} 
else 
{
  echo "0 results";
}
$connection->close();




?>