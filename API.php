<?php



$servername = "localhost:3306";
$username = "root";
$password = "ahmedtato1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



 $sql = "SELECT Customer_Type,category FROM db_test.data ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

$arr = array();
while($row =  $result->fetch_assoc())
{
     $arr[] = $row;
}
}





?>
