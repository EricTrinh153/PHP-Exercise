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
		
			<form method="post" action="save.php">
			<hr>
			<input type="submit" name="saveButton" value="Save"/>
			<button type="button"><a href="product.php">Cancel</a></button>
			<hr>
			<fieldset id="basic-info">
				<legend>Basic</legend>
				<label>Product Code</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="code"/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="checkbox" name="activeStatus" value="1"/>Acive<br><br>
				<label>Name</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="name"/><br><br>
				<label>Category</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<select name="categories">
					
					<option value="1">Component</option>
					<option value="2">Desktop</option>
					<option value="3">Laptop</option>
					<option value="4">Networking</option>
				</select>
				<br><br>
				<label>Unit of Measure</label>
				&nbsp;
				<select name="units">
					
					<option value="1">Pieces</option>
					<option value="2">Box</option>
					<option value="3">Tray</option>
				</select><br>
			</fieldset>
			<fieldset id="extra-info">
				<legend>Extra Information</legend>
				<label>Market Price</label>
				&nbsp;&nbsp;&nbsp;
				<input type="text" name="price"/><br><br>
				<label>QOH</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="quantity"/><br><br>
				<label>Note</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<textarea name="note" cols="59em" rows="5em"></textarea><br>
			</fieldset>
			</form>
		
		</div>
</body>
</html>