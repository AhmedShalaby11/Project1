<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form test</title>
  </head>
  <body>
  <form class="" action="<?php echo($_SERVER["PHP_SELF"]); ?>" method="POST">
    <table>
      <tr>
        <td>First Name: </td>
        <input type="text" name="fname" value="">
        <td>Last Name: </td>
        <td><input type="text" name="lname" value=""></td>

      </tr>
      <tr>
        <td><input type="submit" name="" value="click"></td>
      </tr>
    </table>
  </form>


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
//session_start
$fname = $_POST["fname"];
$lname = $_POST["lname"];
//$sql = "insert into db_test.persons (PersonID,LastName,FirstName,Address,City) values (2,'$fname','$lname','Cairo','Nasr City')";
$sql = "update db_test.persons  set FirstName = '$fname' where personid = '$lname'";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 ?>

  </body>
</html>
