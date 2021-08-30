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
if(isset($_POST['submit'])){

  $id=$_POST['restaurant_id'];
   $name=$_POST['restaurant_name'];
   $hour=$_POST['opening_hour'];
   $detail=$_POST['rest_detail'];
   $city=$_POST['city'];
   $type=$_POST['type'];
   $close=$_POST["closing_hour"];
    $email=$_POST["res_email"];
    $phone=$_POST["res_phoneNo"];


   if(!empty($_FILES["res_photo"]["name"])) { 
        // Get file info 
        $imgName = basename($_FILES["res_photo"]["name"]); 
        $fileType = pathinfo($imgName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','PNG','jpeg','GIF'); 
        if(in_array($fileType, $allowTypes)){ 
            $img = $_FILES['res_photo']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($img)); 
         
            // Insert image content into database 
            $updaterestaurant = mysqli_query($con, "UPDATE restaurant SET restaurant_name='$name', opening_hour='$hour', res_photo='$imgContent', rest_detail='$detail', city_ID='$city',rest_type='$type',closing_hour='$close',res_email='$email', res_phoneNo='$phone' WHERE restaurant_id='$id' ");

            if($updaterestaurant){ 
                $statusMsg = "Restaurant updated successfully.";
                echo '<script language="javascript">';
                echo 'alert("'.$statusMsg.'");';
                 echo 'window.location.href="restaurantdisplay.php"';
                echo '</script>';
            }else{ 
                $statusMsg = "Restaurant update failed, please try again.";
                echo '<script language="javascript">';
                echo 'alert("'.$statusMsg.'");';
                // echo 'window.location.href="viewtrainer.php"';
                echo '</script>';
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            // echo 'window.location.href="restaurantdisplay.php"';
            echo '</script>';
        } 
    }else{
        $updaterestaurant = mysqli_query($con, "UPDATE restaurant SET restaurant_name='$name', opening_hour='$hour', rest_detail='$detail', city_ID='$city', rest_type='$type',closing_hour='$close',res_email='$email', res_phoneNo='$phone' WHERE restaurant_id='$id'");
        
         if($updaterestaurant){ 
            $statusMsg = "Restaurant updated successfully.";
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="restaurantdisplay.php"';
            echo '</script>';
        }else{ 
            $statusMsg = "Restaurant update failed, please try again with correct data.";
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            var_dump($updaterestaurant);
             echo 'window.location.href="restaurantdisplay.php"';
            echo '</script>';
        }  

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
