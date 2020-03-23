<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
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
		<h1>Products</h1>
		<hr>
			<form method="post" action="search.php" id="searchProduct">
				<label>&nbsp;Product Name&nbsp;</label>&nbsp;<input type="text" name="name">
				<label>&nbsp;Category&nbsp;</label>
				<select name="categories">
					
					<option value="1">Component</option>
					<option value="2">Desktop</option>
					<option value="3">Laptop</option>
					<option value="4">Networking</option>
				</select>
				&nbsp;<input type="submit" name="searchButton" value="&#9906;" style="box-shadow: 1px 2px #1c6e8c; width:30px;">

				<button type="button" style="position: fixed; right:45px; box-shadow: 1px 2px #1c6e8c;"><a href="create-product.php">Create Product</a></button>
			</form>
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
			
	$conn = mysqli_connect("localhost","root","","products");
		$query=mysqli_query($conn,"SELECT Product.Code,Product.Name,category.category_name,Product.Price,unit.unit_name,Product.quantity,Product.active_status FROM Product INNER JOIN category ON Product.categoryID=category.category_id INNER JOIN unit ON Product.UnitID=unit.unit_id ");
				
				while($row = mysqli_fetch_array($query)){
					echo "<tr>";
					echo "<td>".$row['Code']."</td>";
					echo "<td>".$row['Name']."</td>";
					echo "<td>".$row['category_name']."</td>";
					echo "<td>".$row['Price']."</td>";
					echo "<td>".$row['unit_name']."</td>";
					echo "<td>".$row['quantity']."</td>";
					echo "<td><input type='checkbox' ".($row['active_status']==1? 'checked': '')."/></td>";
					echo "<td><a href='edit.php?code=".$row['Code']."'>Edit</a></td>";
					echo "</tr>";
					
				}
			?>
		</table>

		</div>
</div>
</body>
</html>