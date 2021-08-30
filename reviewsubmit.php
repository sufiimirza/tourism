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
  

  

       
    $id=$_POST["Iplace_ID"];
    $name=$_POST["tourist_name"];
    $email=$_POST["tourist_email"];
    $comment=$_POST["comment"];
    $rating=$_POST["rating"];
    $date= date('Y-m-d');

    $sql="insert into feedback(Iplace_ID,tourist_name,tourist_email,comment,rating,comment_date) values('$id','$name','$email','$comment', '$rating', '$date')";
  
    $result=mysqli_query($con,$sql);
    if($result){ 
    
                  echo "<head><script>alert('Feedback Added Successfully');</script></head></html>";
                    echo "<script>window.location.href='placesdetail.php?Iplace_ID=".$id ."'</script>";  
    }

  else{
     echo "<head><script>alert('City Added Failed');</script></head></html>";
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