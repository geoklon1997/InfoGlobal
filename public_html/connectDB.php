
<?php
    
$servername = "localhost";

$username = "root";

$password = "";

$dbName = "acnh516";



// Create connection

$conn = new mysqli($servername, $username, $password);


$select_db = mysqli_select_db($conn,$dbName);

//Check connection

if ($conn->connect_error) {

	die("Connection failed: " . $conn->connect_error);

}
if (!$select_db) 
  {
 die("Database Selection Failed" .mysqli_error($conn));
        }
        
        
echo "Connected successfully";


?>
