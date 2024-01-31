<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `additem` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>editing form</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Item Name:</label><input type="text" value="<?php echo $row['itemname']; ?>" name="itemname">
		<label>Description:</label><input type="text" value="<?php echo $row['description']; ?>" name="description">
        <label>Quantity:</label><input type="number" value="<?php echo $row['quantity']; ?>" name="quantity">
		<label>Price:</label><input type="number" value="<?php echo $row['price']; ?>" name="price">
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>