<?php
  require 'include/db_conn.php';
 

    // $id=$_POST["trainer_id"];
    // $name=$_POST["name"];
    // $mobileno=$_POST["mobileno"];
    
    
    
    // $sql="insert into trainer(trainer_id,name,mobileno) values('$id','$name','$mobileno')";
  
    // $result=mysqli_query($con,$sql);
    // if($result){ 
    
    //  echo "<head><script>alert('Trainer Added');</script></head></html>";
    //  echo "<meta http-equiv='refresh' content='0; url=addtrainer.php'>";
    // }else{
    //  echo "<head><script>alert('Trainer Added Failed');</script></head></html>";
    //  echo mysqli_error($con);
    // }
  

  

       
    $id=$_POST["hotel_id"];
    $name=$_POST["tourist_name"];
    $email=$_POST["tourist_email"];
    $comment=$_POST["hotel_comment"];
    $rating=$_POST["hotel_rating"];

    $sql="insert into hotel_feedback(hotel_id,tourist_name,tourist_email,hotel_comment,hotel_rating) values('$id','$name','$email','$comment', '$rating')";
  
    $result=mysqli_query($con,$sql);
    if($result){ 
    
                    echo "<head><script>alert('Feedback Added Successfully');</script></head></html>";
                    echo "<script>window.location.href='hoteldetail.php?hotel_id=".$id ."'</script>";     
    }

  else{
     echo "<head><script>alert('Review Added Failed');</script></head></html>";
     echo mysqli_error($con);
    }

// else{ 
//             $statusMsg = 'Please fill in the form.';
//             echo '<script language="javascript">';
//             echo 'alert("'.$statusMsg.'");';
//             echo 'window.location.href="cityadd.php"';
//             echo '</script>';
//         }

    
// }
  
?>