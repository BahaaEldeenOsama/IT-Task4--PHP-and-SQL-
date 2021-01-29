<?php

$ServerName = "localhost";
$UserName = "root" ;
$password = "";
$dbname = "Company";

// Create connection
$connection = mysqli_connect($ServerName, $UserName, $password, $dbname);
// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}



/// Test:1
$sql1 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170078', 'Bahaa El Deen Osama', 'IT',2000,22,2001)";
if (mysqli_query($connection, $sql1)) 
{
  echo "1.New record created successfully\n";
} 
else 
{
  echo "1.Error: " . $sql1 . "<br>" . mysqli_error($connection);
}


/// Test:2
$sql2 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170343', 'Abdelrahman Nasr', 'HR',3000,21,2002)";
if (mysqli_query($connection, $sql2)) 
{
  echo "2.New record created successfully\n";
} 
else 
{
  echo "2.Error: " . $sql2 . "<br>" . mysqli_error($connection);
}


/// Test:3
$sql3 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170230', 'Mohamed Khaled', 'Management',4000,20,2003)";
if (mysqli_query($connection, $sql3)) {
  echo "3.New record created successfully\n";
} else {
  echo "3.Error: " . $sql3 . "<br>" . mysqli_error($connection);
}

/// Test:4
$sql4 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170485', 'Mohamed Osama Emam', 'Accounting',1500,19,2004)";
if (mysqli_query($connection, $sql4)) {
  echo "4.New record created successfully\n";
} else {
  echo "4.Error: " . $sql4 . "<br>" . mysqli_error($connection);
}

/// Test:5
$sql5 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170005', 'Yassien Abdelafar', 'Management',5000,23,2005)";
if (mysqli_query($connection, $sql5)) {
  echo "5.New record created successfully\n";
} else {
  echo "5.Error: " . $sql5 . "<br>" . mysqli_error($connection);
}

/// Test:6
$sql6 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170006', 'Mohamed Ahmed', 'IT',44000,30,2006)";
if (mysqli_query($connection, $sql6)) {
  echo "6.New record created successfully\n";
} else {
  echo "6.Error: " . $sql6 . "<br>" . mysqli_error($connection);
}

/// Test:7
$sql7 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170007', 'Bahaa El Deen Osama', 'Accounting',10000,35,2007)";
if (mysqli_query($connection, $sql7)) {
  echo "7.New record created successfully\n";
} else {
  echo "7.Error: " . $sql7 . "<br>" . mysqli_error($connection);
}

/// Test:8
$sql8 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170008', 'Sayed Mosatafa', 'HR',15000,28,2008)";
if (mysqli_query($connection, $sql8)) {
  echo "8.New record created successfully \n";
} else {
  echo "8.Error: " . $sql8 . "<br>" . mysqli_error($connection);
}

/// Test:9
$sql9 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170009', 'Adel mohamed', 'IT',22000,25,2009)";
if (mysqli_query($connection, $sql9)) {
  echo "9.New record created successfully\n";
} else {
  echo "9.Error: " . $sql9 . "<br>" . mysqli_error($connection);
}

/// Test:10
$sql10 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170010', 'Anas Mostafa', 'Management',29000,24,2010)";
if (mysqli_query($connection, $sql10)) {
  echo "10.New record created successfully\n";
} else {
  echo "10.Error: " . $sql10 . "<br>" . mysqli_error($connection);
}

/// Test:11
$sql11 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170011', 'Moaz Mostafa', 'IT',2000,30,2011)";
if (mysqli_query($connection, $sql11)) {
  echo "11.New record created successfully\n";
} else {
  echo "11.Error: " . $sql11 . "<br>" . mysqli_error($connection);
}

/// Test:12
$sql12 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170012', 'Ahmed Ali', 'IT',2000,22,2012)";
if (mysqli_query($connection, $sql12)) {
  echo "12.New record created successfully\n";
} else {
  echo "12.Error: " . $sql12 . "<br>" . mysqli_error($connection);
}

/// Test:13
$sql13 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170013', 'Hossam Osama', 'Accounting',4000,26,2013)";
if (mysqli_query($connection, $sql13)) {
  echo "13.New record created successfully\n";
} else {
  echo "13.Error: " . $sql13 . "<br>" . mysqli_error($connection);
}

/// Test:14
$sql14 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170014', 'Alaa Mostafa', 'HR',2000,35,2014)";
if (mysqli_query($connection, $sql14)) {
  echo "14.New record created successfully\n";
} else {
  echo "14.Error: " . $sql14 . "<br>" . mysqli_error($connection);
}

/// Test:15
$sql15 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170015', 'Mohamed Samy', 'Management',2000,27,2015)";
if (mysqli_query($connection, $sql15)) {
  echo "15.New record created successfully\n";
} else {
  echo "15.Error: " . $sql15 . "<br>" . mysqli_error($connection);
}

/// Test:16
$sql16 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170016', 'Ahmed Samy', 'HR',20200,29,2016)";
if (mysqli_query($connection, $sql16)) {
  echo "16.New record created successfully\n";
} else {
  echo "16.Error: " . $sql16 . "<br>" . mysqli_error($connection);
}

/// Test:17
$sql17 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170071', 'Ahmed Mohamed', 'Accounting',2000,26,2017)";
if (mysqli_query($connection, $sql17)) {
  echo "17.New record created successfully\n";
} else {
  echo "Error: " . $sql17 . "<br>" . mysqli_error($connection);
}

/// Test:18
$sql18 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170081', 'Amr Sayed', 'IT',10000,40,2018)";
if (mysqli_query($connection, $sql18)) {
  echo "18.New record created successfully\n";
} else {
  echo "18.Error: " . $sql18 . "<br>" . mysqli_error($connection);
}

/// Test:19
$sql19 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170019', 'Salah El Deen Osama', 'Accounting',40000,39,2019)";
if (mysqli_query($connection, $sql19)) {
  echo "19.New record created successfully\n";
} else {
  echo "10.Error: " . $sql19 . "<br>" . mysqli_error($connection);
}

/// Test:20
$sql20 = "INSERT INTO workers (id,name,department,salary,age,year)
VALUES ('20170020', 'Saif El Deen Osama', 'Management',20000,16,2020)";
if (mysqli_query($connection, $sql20)) {
  echo "20.New record created successfully\n";
} else {
  echo "20.Error: " . $sql20 . "<br>" . mysqli_error($connection);
}






mysqli_close($connection);
?>