<!DOCTYPE html>
<html>
<title>Switch Statement | (Decision-Making Statements) | PHP Tutorial</title>
<head></head>
<body>
 
<h4>Switch Statement | (Decision-Making Statements)</h4>
 
 <form action="" method="post">
  number: <input type="text" name="name">
   <input type="submit">
 </form>
 
<?php
  $server="localhost";
$user="root";
$password="8090866024";
 $database="myDB";
 
 // connection checking
 $link= mysqli_connect($server,$user,$password,$database );
 
 if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	
}
 
 echo"input 1 for creating database / 2 for create table/input 3 for insert data into table / input 4 for retrive data <br><br> ";
 
 $number =$_REQUEST['name'];
 
 switch ($number) {
 
    case 1:
       

// Create database
$sql = "CREATE DATABASE myD";
 
if(mysqli_query($link, $sql)){
    echo "Database created successfully";
} else{
    echo "Error creating database: " . mysqli_error($link);
}
// Close connection
mysqli_close($link); 
		
        break;
    case 2:
   	
       // create table 
$sql = "CREATE TABLE Client (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50)
)";

if(mysqli_query($link, $sql)){
    echo "table created successfully";
} else{
    echo "Error creating table: " . mysqli_error($link);
}
// Close connection
mysqli_close($link); 
        break;
    case 3:
	        // insert into table 
$sql = "INSERT INTO client (firstname, lastname, email) VALUES
            ('John', 'Rambo', 'johnrambo@mail.com'),
            ('Clark', 'Kent', 'clarkkent@mail.com'),
            ('John', 'Carter', 'johncarter@mail.com'),
            ('Harry', 'Potter', 'harrypotter@mail.com')";


if(mysqli_query($link, $sql)){
    echo "all record inserted successfully";
} else{
    echo "Error record not inserted: " . mysqli_error($link);
}
mysqli_close($link); 

        break;
     case 4:
	  include "retrive.php";
	 
    default:
        echo "The default case";
        break;
 }
 
?>
 
</body>
</html>