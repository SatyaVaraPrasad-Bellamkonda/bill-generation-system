<?php

include("config.php");
            if(isset($_POST['submit']))
            {
                $itemname=$_POST['itemname'];
                $description=$_POST['description'];
                $quantity=$_POST['quantity'];
                $price=$_POST['price'];
               if(!$itemname||!$description||!$quantity||!$price)
                {
                    $alert="<script>alert('Fill all the fields..!!!');</script>";
                    echo $alert;
                    return;
                }
            
                else{

                    $result=mysqli_query($mysqli,"INSERT into additem values('','$itemname','$description','$quantity','$price')");

                    if($result)
                     {
                       header("location:insert.php");
                     }
                     else{
                         echo"Failed";
                        }
                }
            }

        ?>