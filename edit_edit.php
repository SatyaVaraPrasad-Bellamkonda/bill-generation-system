<?php
	include('conn_edit.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `additem` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>editing form</title>
<style>
    body{background-image:url('background.jpg');
			/* Full height */
  			height: 100%;

				/* Center and scale the image nicely */
				background-position: center;
				background-repeat: no-repeat;
                background-size: cover;
        }
	 .input_table {
border-radius: 2px;
border: 1px solid;
padding-top: 12px;
padding-bottom: 12px;
width: 50%;
height=200px;
text-align: center;
background: #eee6ff;
margin-left: auto;
margin-right: auto;
}
input[type=submit] {
            width: 20%;
            padding: 9px;
            margin: 5px 0;
            border: 2px solid #000000;
            outline: none;
            background-color: green;
            color: white;

        }
		td,input{
			padding:10px 40px;
		}
		.pk{
			padding:20px 40px;
		}
	
		
	</style>
</head>
<body>
	<h2 align="center">Edit</h2>
	<form method="POST" action="update_edit.php?id=<?php echo $id; ?>">

	<table class="input_table">
            <caption>Add details of the Item.</caption>
            <tr>
                <th>Item Name :</th>
                <td><input type="text" value="<?php echo $row['itemname']; ?>" name="itemname"> </td>
            </tr>
            <tr>
                <th>Description :</th>

                <td><textarea class="pk" cols="20" rows="4"  name="description" ><?php echo $row['description']; ?></textarea></td>
            </tr>
            <tr>
                <th>Quantity :</th>
                <td><input type="number" name="quantity" value="<?php echo $row['quantity']; ?>"></td>
            </tr>
            <tr>
                <th>Price :</th>
                <td><input type="number" name="price" value="<?php echo $row['price']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td ><input type="submit" name="submit"></td>
            </tr>

			<tr><td></td><td><a href="edititems_edit.php">Back</a></td></tr>
        </table>

		
	</form>
</body>
</html>