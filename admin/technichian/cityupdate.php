<?php
require '../../include/db_conn.php';
page_protect();
    
    
   // $id=$_POST['trainer_id'];
   // $name=$_POST['name'];
   // $mobileno=$_POST['mobileno'];
    
   //  $query1="update trainer set name='".$name."',mobileno='".$mobileno."'where trainer_id='".$id."'";

   // if(mysqli_query($con,$query1)){
     
   //          echo "<html><head><script>alert('Trainer Updated Successfully');</script></head></html>";
   //          echo "<meta http-equiv='refresh' content='0; url=viewtrainer.php'>";  
   // }
   // else{
   //  echo "<html><head><script>alert('ERROR! Update Operation Unsucessfull');</script></head></html>";
   //  echo "error".mysqli_error($con);
   // }

  $id=$_POST['city_id'];
   $name=$_POST['city_name'];
   $postcode=$_POST['postcode'];
   $state=$_POST['state'];

    if(!empty($_POST['city_name']) && !empty($_POST['postcode'])){ 

       $updatecity = mysqli_query($con, "UPDATE city SET city_name='$name', postcode='$postcode', state_id='$state'
        WHERE city_id='$id'");
         if($updatecity){ 
            $statusMsg = "City updated successfully.";
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="citydisplay.php"';
            echo '</script>';
                  
        }else{ 
            $statusMsg = "City update failed, please try again.";
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="citydisplay.php"';
            echo '</script>';
        }  
    
  }

    // if (isset($_GET['del'])) {
    //   $id = $_GET['del'];
    //   $deletetrainer = mysqli_query($con, "DELETE FROM city WHERE city_id='$id'");
    //   if($deletetrainer){
    //   $statusMsg = 'Post deleted successfully.';
    //   echo '<script language="javascript">';
    //     echo 'alert("'.$statusMsg.'");';
    //     echo 'window.location.href="viewtrainer.php"';
    //     echo '</script>';
    //   } 
    // }else {
    //     var_dump( "DELETE FROM trainer WHERE trainer_id='$id'");
    //   echo '<script language="javascript">';
    //     echo 'alert("'.$statusMsg.'");';
    //     //echo 'window.location.href="viewtrainer.php"';
    //     echo '</script>';
    //   }
?>
