<?php
require '../../include/db_conn.php';
page_protect();
    

if(isset($_POST['submit'])){

  $id=$_POST['hotel_id'];
   $name=$_POST['hotel_name'];
   $hotelno=$_POST['hotel_no'];
   $detail=$_POST['hotel_detail'];
   $city=$_POST['city'];
   $email=$_POST["hotel_email"];
   $rate=$_POST["hotel_rate"];


   if(!empty($_FILES["hotel_photo"]["name"])) { 
        // Get file info 
        $imgName = basename($_FILES["hotel_photo"]["name"]); 
        $fileType = pathinfo($imgName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','PNG','jpeg','GIF'); 
        if(in_array($fileType, $allowTypes)){ 
            $img = $_FILES['hotel_photo']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($img)); 
         
            // Insert image content into database 
            $updatehotel = mysqli_query($con, "UPDATE hotel SET hotel_name='$name', hotel_no='$hotelno', hotel_photo='$imgContent', hotel_detail='$detail', city_ID='$city',hotel_email='$email',hotel_rate='$rate' WHERE hotel_id='$id'");

            if($updatehotel){ 
                $statusMsg = "Hotel updated successfully.";
                echo '<script language="javascript">';
                echo 'alert("'.$statusMsg.'");';
                 echo 'window.location.href="hoteldisplay.php"';
                echo '</script>';
            }else{ 
                $statusMsg = "Hotel update failed, please try again.";
                echo '<script language="javascript">';
                echo 'alert("'.$statusMsg.'");';
                echo 'window.location.href="hoteldisplay.php"';
                echo '</script>';
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="hoteldisplay.php"';
            echo '</script>';
        } 
    }else{
        $updatehotel = mysqli_query($con, "UPDATE hotel SET hotel_name='$name', hotel_no='$hotelno', hotel_detail='$detail', city_ID='$city',hotel_email='$email',hotel_rate='$rate' WHERE hotel_id='$id'");
         if($updatehotel){ 
            $statusMsg = "Hotel updated successfully!.";
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
             echo 'window.location.href="hoteldisplay.php"';
            echo '</script>';
        }else{ 
            $statusMsg = "Hotel update failed, please try again with correct data.";
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="hoteldisplay.php"';
            echo '</script>';
        }  

    }
  }

?>
