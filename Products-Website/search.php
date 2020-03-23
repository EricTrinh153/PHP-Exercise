<!DOCTYPE html>
<html>
<head>
	<title>Search Page</title>
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
		<h1>Searched Result</h1>
		<hr>
		
		<table border="1">
			<tr>
				<td>Code</td>
				<td>Name</td>
				<td>Category</td>
				<td>Price</td>
				<td>UOM</td>
				<td>Quantity On Hand</td>
				<td>Active</td>

			</tr>
			<?php

		$Name =$_POST['name'];
		if(isset($_POST['categories']))
		{
		$category=$_POST['categories'];
		}
		else
		{
		echo 'Please select a category';
		}
		$conn = mysqli_connect("localhost","root","","products");
		$query=mysqli_query($conn,"SELECT Product.Code,Product.Name,category.category_name,Product.Price,unit.unit_name,Product.quantity,Product.active_status FROM Product INNER JOIN category ON Product.categoryID=category.category_id INNER JOIN unit ON Product.UnitID=unit.unit_id WHERE Product.Name='$Name' AND Product.categoryID='$category'") or die("No match found");
				
				while($row = mysqli_fetch_assoc($query)){
					echo "<tr>";
					echo "<td>".$row['Code']."</td>";
					echo "<td>".$row['Name']."</td>";
					echo "<td>".$row['category_name']."</td>";
					echo "<td>".$row['Price']."</td>";
					echo "<td>".$row['unit_name']."</td>";
					echo "<td>".$row['quantity']."</td>";
					echo "<td>".$row['active_status']."</td>";
					
				}
			?>
		</table>
		<button><a href="product.php">Back</a></button>
		</div>
</div>
</body>
</html>