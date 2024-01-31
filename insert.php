<?php
include("config.php");
$result=mysqli_query($mysqli,"SELECT* from additem ORDER by id ASC");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Items</title>
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
        input,
        textarea {
            border-radius: 5px;
            width: 50%;
            padding: 10px;
            margin: 5px solid;
            border: 1px solid #000000;
            resize: none;
        }

        th {
            
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: #04AA6D;
            color: white;
        }

        input[type=submit] 
        {
            width: 20%;
            padding: 9px;
            margin: 5px 0;
            border: 2px solid #000000;
            outline: none;
            background-color: green;
            color: white;

        }

        .prasad {
            border: 1px solid;
            width: 100%;
            text-align: center;
            font-style:strong;
        }

        .input_table {

            border-radius: 2px;
            border: 1px solid;
            width: 50%;
            text-align: center;
            background: #eee6ff;
            margin-left: auto;
            margin-right: auto;

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
    </style>

</head>

<body>
    <form action="function.php" method="POST">
        <table class="input_table">
            <caption>Add details of the Item.</caption>
            <tr>
                <td>Item Name :</td>
                <td><input type="text" name="itemname"> </td>
            </tr>
            <tr>
                <td>Description :</td>

                <td><textarea name="description" cols="30" rows="4"></textarea></td>
            </tr>
            <tr>
                <td>Quantity :</td>
                <td><input type="number" name="quantity"></td>
            </tr>
            <tr>
                <td>Price :</td>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <td></td>
                <td ><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
    <a href="home.html" ><i id="home" class="fa fa-home" style="font-size:48px;color:green"></i></a>

    <br>
    <h3 align="center">AVAILABLE ITEMS </h3>


    <table border="2" class="prasad">
    
        <tr>
            <th>S.No</th>
            <th>Item Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        <?php
            while($res=mysqli_fetch_array($result))
            {
                echo '<tr>';
                echo '<td>'.$res['id'].'</td>';
                echo '<td>'.$res['itemname'].'</td>';
                echo '<td>'.$res['description'].'</td>';
                echo '<td>'.$res['quantity'].'</td>';
                echo '<td>'.$res['price'].'</td>';
                echo '</tr>';
            }
        ?>
    </table>
</body>

</html>