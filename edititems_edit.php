<!DOCTYPE html>
<html>
<head>
<title>Edit Available Items</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	body{background-image:url('background.jpg');
			/* Full height */
  			height: 100%;

				/* Center and scale the image nicely */
				background-position: center;
				background-repeat: no-repeat;
                background-size: cover;
        }
	 .prasad {
            border: 1px solid;
            width: 80%;
            text-align: center;
            font-style:strong;
			margin-left: auto;
            margin-right: auto;
			background-color:white;
        }
		th {
            
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #04AA6D;
            color: white;
        }
		 #home {
            position: fixed;
            top: 20px;
            right: 30px;
            z-index: 99;
            font-size: 15px;
            outline: none;
            background-color:white;
            color: white;
            cursor: pointer;
            padding: 2px;
            border-radius: 10px;
        }
        #home:hover{
            border-radius:25px;
			background-color: pink;
			color: white;}
		.editbutton{
			width: 100%;
            padding: 9px;
            outline: none;
            background-color: green;
            color: white;
			border-radius:1px;
		}
		.deletebutton{
			width: 100%;
            padding: 9px;
            outline: none;
            background-color: red;
            color: white;
			border-radius:5px;
		}
		.block{
			text-align: center;
			text-decoration: none;
			display: block;
			width:100%;
			font-size: 16px;
			color:white;
			
		}
	</style>
</head>
<body>

	<br>
	<div>
		<table border="1" class="prasad">
			<caption>Edit And Delete items as your requirements</caption>
			<br><br><thead>
				<th>Item Name</th>
				<th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th colspan="2">Operations</th>
			</thead>
			<tbody>
				<?php
					include('conn_edit.php');
					$query=mysqli_query($conn,"select * from `additem`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['itemname']; ?></td>
							<td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php echo $row['price']; ?></td>
							<td>
								<button class="editbutton"><a href="edit_edit.php?id=<?php echo $row['id']; ?>" class="block">Edit</a></buttton></td>

							<td><button class="deletebutton"><a href="delete_edit.php?id=<?php echo $row['id']; ?>" class="block">Delete</a></button>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
		<a href="home.html" ><i id="home" class="fa fa-home" style="font-size:48px;color:green"></i></a>
	</div>
</body>
</html>