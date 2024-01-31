<?php
	include('conn_edit.php');
	$id=$_GET['id'];
 
	$itemname=$_POST['itemname'];
	$description=$_POST['description'];
    $quantity=$_POST['quantity'];
	$price=$_POST['price'];
 
	mysqli_query($conn,"update `additem` set itemname='$itemname', description='$description' ,quantity='$quantity' , price='$price' where id='$id'");
	header('location:edititems_edit.php');
?>