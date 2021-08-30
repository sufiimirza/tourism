<?php
require '../../include/db_conn.php';
page_protect();
    

if(isset($_POST['submit'])){

  $id=$_POST['Iplace_id'];
   $name=$_POST['place_name'];
   $hour=$_POST['opening_hour'];
   $detail=$_POST['place_details'];
   $city=$_POST['city'];
   $price=$_POST['ticket_price'];


   if(!empty($_FILES["place_photo"]["name"])) { 
        // Get file info 
        $imgName = basename($_FILES["place_photo"]["name"]); 
        $fileType = pathinfo($imgName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','PNG','jpeg','GIF'); 
        if(in_array($fileType, $allowTypes)){ 
            $img = $_FILES['place_photo']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($img)); 
         
            // Insert image content into database 
            $updateplace = mysqli_query($con, "UPDATE places SET place_name='$name', opening_hour='$hour', place_photo='$imgContent', place_details='$detail', city_ID='$city', ticket_price='$price' WHERE Iplace_id='$id' ");

            if($updateplace){ 
                $statusMsg = "Place updated successfully.";
                echo '<script language="javascript">';
                echo 'alert("'.$statusMsg.'");';
                 echo 'window.location.href="placedisplay.php"';
                echo '</script>';
            }else{ 
                $statusMsg = "Restaurant update failed, please try again.";
                echo '<script language="javascript">';
                echo 'alert("'.$statusMsg.'");';
                echo 'window.location.href="placedisplay.php"';
                echo '</script>';
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="placedisplay.php"';
            echo '</script>';
        } 
    }else{
        $updateplace = mysqli_query($con, "UPDATE places SET place_name='$name', opening_hour='$hour', place_details='$detail', city_ID='$city', ticket_price='$price' WHERE Iplace_id='$id' ");
         if($updateplace){ 
            $statusMsg = "Place updated successfully.";
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="placedisplay.php"';
            echo '</script>';
        }else{ 
            $statusMsg = "Place update failed, please try again with correct data.";
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="placedisplay.php"';
            echo '</script>';
        }  

    }
  }

?>
