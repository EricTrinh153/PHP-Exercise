
<!DOCTYPE html>
<html>
<head>
	<title>Create Products</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="product.css">
</head>
<body>
<div class="product-container">
		<div id="main-nav">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="product.php">Products</a></li>
		</ul>
		</div>
		<div id="content">
			<header>
		<h1>Product > Details</h1>
		</header>
			<form method="post" action="update.php">
			<?php
			$servername = "localhost";
$username = "root";
$password = "";
$dbname ="products";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$code =$_REQUEST['code'];

$query ="SELECT Product.Code,Product.Name,category.category_name,Product.Price,unit.unit_name,Product.quantity,Product.active_status, Product.note FROM Product INNER JOIN category ON Product.categoryID=category.category_id INNER JOIN unit ON Product.UnitID=unit.unit_id WHERE Product.Code='".$code."'";
$result=mysqli_query($conn,$query) or die(mysqli_error());
$row = mysqli_fetch_assoc($result);
	$active=$row['active_status'];
			$name=$row['Name'];
			$cat=$row['category_name'];
			$unit=$row['unit_name'];
			$price=$row['Price'];
			$quantity=$row['quantity'];
			$note=$row['note'];
			
			?>
			<hr>
			<input type="submit" name="saveButton" value="Update"/>
			<button type="button"><a href="product.php">Cancel</a></button>
			<hr>
			<fieldset id="basic-info">
				<legend>Basic</legend>
				<label>Product Code</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="code" value="<?php echo $code;?>" />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="checkbox" name="activeStatus" value="1" 
				<?php
				echo ($active==1)?"checked" : "";
				?>
				 />Acive<br><br>
				<label>Name</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="name" value="<?php echo $name;?>"/><br><br>
				<label>Category</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<select name="categories" value="">
					<option><?php echo $cat;?></option>
					<option value="1">Component</option>
					<option value="2">Desktop</option>
					<option value="3">Laptop</option>
					<option value="4">Networking</option>
				</select> Please choose the new one
				<br><br>
				<label>Unit of Measure</label>
				&nbsp;
				<select name="units">
					<option><?php echo $unit;?></option>
					<option value="1">Pieces</option>
					<option value="2">Box</option>
					<option value="3">Tray</option>
				</select> Please choose the new one
				<br>
			</fieldset>
			<fieldset id="extra-info">
				<legend>Extra Information</legend>
				<label>Market Price</label>
				&nbsp;&nbsp;&nbsp;
				<input type="text" name="price" value="<?php echo $price;?>" /><br><br>
				<label>QOH</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="quantity" value="<?php echo $row['quantity'];?>" /><br><br>
				<label>Note</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<textarea name="note" cols="59em" rows="5em"><?php echo $note;?></textarea><br>
			</fieldset>
			</form>
		
		</div>
</body>
</html>