$query=mysqli_query($mysqli,"SELECT * FROM 'additem' WHERE itemname='$itemname'");
                if(mysqli_num_rows($query)>0)
                {
                    echo"Item already placed.";
                }
                else