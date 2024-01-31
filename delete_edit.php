<?php
include('conn_edit.php');
	$id=$_GET['id'];
	include('conn_edit.php');
	mysqli_query($conn,"delete from `additem` where id='$id'");
	header('location:edititems_edit.php');
?>