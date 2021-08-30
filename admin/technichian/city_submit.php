<?php
  require '../../include/db_conn.php';
  page_protect();
    
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
  

  

       
    $id=$_POST["city_id"];
    $name=$_POST["city_name"];
    $postcode=$_POST["postcode"];
    $state=$_POST["state"];

    $sql="insert into city(city_id,city_name,postcode,state_id) values('$id','$name','$postcode','$state')";
  
    $result=mysqli_query($con,$sql);
    if($result){ 
    
     echo "<head><script>alert('city Added');</script></head></html>";
     echo "<meta http-equiv='refresh' content='0; url=cityadd.php'>";
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