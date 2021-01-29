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

$sql = "SELECT * FROM workers ";
$result = $connection->query($sql);

if ($result->num_rows > 0) 
{
    
    
    $page = $_GET['page'];
        
    
    $i =0;
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        $i = $i+1;

        if($page == 1)
        {
            if($i <= 5)
            {
                echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Department: " . $row["department"]." - Salary: " . $row["salary"]." - age: " . $row["age"]." - year: " . $row["year"].  "<br>";
            }
        }
        else if($page == 2)
        {
            if($i > 5 && $i <= 10)
            {
                echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Department: " . $row["department"]." - Salary: " . $row["salary"]." - age: " . $row["age"]." - year: " . $row["year"].  "<br>";
            }
        }
        else if($page == 3)
        {
            if($i > 10 && $i <= 15)
            {
                echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Department: " . $row["department"]." - Salary: " . $row["salary"]." - age: " . $row["age"]." - year: " . $row["year"].  "<br>";
            }
        }
        else if($page == 4)
        {
            if($i > 15 && $i <= 20)
            {
                echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Department: " . $row["department"]." - Salary: " . $row["salary"]." - age: " . $row["age"]." - year: " . $row["year"].  "<br>";
            }
        }
        else
        {
            echo "No Results";
        }

  
    }


    echo "<a href='/Task4-20170078/view_all.php?page=1'>1</a>";
    echo "<a href='/Task4-20170078/view_all.php?page=2'>2</a>";
    echo "<a href='/Task4-20170078/view_all.php?page=3'>3</a>";
    echo "<a href='/Task4-20170078/view_all.php?page=4'>4</a>";
    

} 
else 
{
  echo "0 results";
}
$connection->close();




?>