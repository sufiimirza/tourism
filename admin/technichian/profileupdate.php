<?php
require '../../include/db_conn.php';
page_protect();
    
    
  if(isset($_POST['update'])){

  $id=$_POST['admin_id'];
   $name=$_POST['username'];
   $email=$_POST['admin_email'];
   $dob=$_POST['dob'];

    if(!empty($_FILES["admin_photo"]["name"])) { 
        // Get file info 
        $imgName = basename($_FILES["admin_photo"]["name"]); 
        $fileType = pathinfo($imgName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','PNG','jpeg','GIF'); 
        if(in_array($fileType, $allowTypes)){ 
            $img = $_FILES['admin_photo']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($img)); 
         
            // Insert image content into database 
            $updateadmin = mysqli_query($con, "UPDATE admin SET username='$name', admin_email='$email', admin_photo='$imgContent' 
            WHERE admin_ID='$id' ");

            if($updateadmin){ 
                $statusMsg = "Admin information updated successfully.";
                echo '<script language="javascript">';
                echo 'alert("'.$statusMsg.'");';
                echo 'window.location.href="profile.php"';
                echo '</script>';
            }else{ 
                $statusMsg = "Admin information update failed, please try again.";
                echo '<script language="javascript">';
                echo 'alert("'.$statusMsg.'");';
                // echo 'window.location.href="viewtrainer.php"';
                echo '</script>';
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="profile.php"';
            echo '</script>';
        } 
    }else{
        $updateadmin = mysqli_query($con, "UPDATE admin SET username='$name', admin_email='$email', admin_photo='$imgContent' 
            WHERE admin_ID='$id' ");
         if($updateadmin){ 
            $statusMsg = "Admin updated successfully.";
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="profile.php"';
            echo '</script>';
        }else{ 
            $statusMsg = "Admin information update failed, please try again.";
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            // echo 'window.location.href="viewtrainer.php"';
            echo '</script>';
        }  
    }
  }
// }
?>
