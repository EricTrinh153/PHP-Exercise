<?php
include 'edit.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="products";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Code = $_POST['code'];

$active=$_POST['activeStatus'];
if(isset($_POST['activeStatus']))
{
	$active=$_POST['activeStatus'];
}else
{
	$active=0;
}
$Name =$_POST['name'];

if(isset($_POST['categories']))
{
	$category=$_POST['categories'];
}
else
{
	echo 'Please select a category';
}
if (isset($_POST['units'])) 
{
	$unit=$_POST['units'];	
}
else
{
	echo 'Please select a unit';
}
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$note=$_POST['note'];
$update="UPDATE Product SET Code='".$Code."',Name='".$Name."',categoryID=".$category.",Price=".$price.",UnitID=".$unit.",quantity=".$quantity.",note='".$note."',active_status='".$active."' WHERE Code='".$code."' ";
if ($conn->query($update) === TRUE) {
    header("Location:product.php");
} else {
    echo "Error: " . $update . "<br>" . $conn->error;
}

$conn->close();
?>

