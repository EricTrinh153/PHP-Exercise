<?php
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
$sql ="INSERT INTO Product(code, name, active_status, price, quantity,note, categoryID, UnitID) VALUES ('".$Code."','".$Name."',".$active.",".$price.",".$quantity.",'".$note."',".$category.",".$unit.")";
if ($conn->query($sql) === TRUE) {
    header("Location:product.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>