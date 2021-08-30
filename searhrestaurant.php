<?php
  require 'include/db_conn.php';

  

       
    $aid=$_POST["keyword"];

    $sql="select city_ID from city where city_name like '%$aid%'";

    $result=mysqli_query($con,$sql);

    

    $sql="select * from places where place_name like '%$aid%'";

    $result=mysqli_query($con,$sql);

    $sno=1;

      if (mysqli_affected_rows($con) != 0) {
         while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $id   = $row['Iplace_ID'];
                



             // echo "$id";
             echo "<head><script>alert('We Found');</script></head></html>";
            echo "<script>window.location.href='placesdetail.php?Iplace_ID=".$id ."'</script>";          
                $sno++;
              }
        }
                                  

  
?>