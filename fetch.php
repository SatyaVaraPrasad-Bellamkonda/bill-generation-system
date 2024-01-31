<?php 
  include("conn.php");
  $id=$_GET['id'];
   $sql = "SELECT * FROM additem WHERE id='".$_POST['id']."'";
   $query = mysqli_query($conn,"select * from `additem`");
   while($row = mysqli_fetch_assoc($query))
   {
         $data = $row;
   }
    echo json_encode($data);
 ?>