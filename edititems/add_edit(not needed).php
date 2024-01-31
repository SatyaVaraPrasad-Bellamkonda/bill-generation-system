<?php
	include('conn_edit.php');
 
	$itemname=$_POST['itemname'];
	$description=$_POST['description'];
 
	mysqli_query($conn,"insert into `additem` (itemname,description) values ('$itemname','$description')");
	header('location:edititems_edit.php');
 
?>