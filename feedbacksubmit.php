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
  

  

       
    $id=$_POST["restaurant_id"];
    $name=$_POST["tourist_name"];
    $email=$_POST["tourist_email"];
    $comment=$_POST["res_comment"];
    $rating=$_POST["res_rating"];

    $sql="insert into rest_feedback(restaurant_id,tourist_name,tourist_email,res_comment,res_rating) values('$id','$name','$email','$comment', '$rating')";
  
    $result=mysqli_query($con,$sql);
    if($result){ 
    
                    echo "<head><script>alert('Feedback Added Successfully');</script></head></html>";
                    echo "<script>window.location.href='restaurantdetail.php?restaurant_ID=".$id ."'</script>";     
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