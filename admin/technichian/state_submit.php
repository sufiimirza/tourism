<?php
  require '../../include/db_conn.php';
  page_protect();


   if(!empty($_POST['state_name'])){

       
 
    $name=$_POST["state_name"];


        if(!empty($_FILES["state_photo"]["name"])) { 
            // Get file info 
            $imgName = basename($_FILES["state_photo"]["name"]); 
            $fileType = pathinfo($imgName, PATHINFO_EXTENSION); 
             
            // Allow certain file formats 
            $allowTypes = array('jpg','png','jpeg'); 
            if(in_array($fileType, $allowTypes)){ 
                $img = $_FILES['state_photo']['tmp_name']; 
                $imgContent = addslashes(file_get_contents($img)); 
             
                // Insert image content into database 
                $q1 = "INSERT INTO state (state_name, state_photo) 
                VALUES ( '$name', '$imgContent')";
                $q2 = mysqli_query($con, $q1); 
                 
                if($q2){ 
                    $statusMsg = "State uploaded successfully.";
                    echo '<script language="javascript">';
                    echo 'alert("'.$statusMsg.'");';
                    echo 'window.location.href="stateadd.php"';
                    echo '</script>';
                }else{ 
                    $statusMsg = "State fail to upload.";
                    echo '<script language="javascript">';
                    echo 'alert("'.$statusMsg.'");';
                    echo 'window.location.href="stateadd.php"';
                    echo '</script>';
                }  
            }else{ 
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, files are allowed to upload.';
                echo '<script language="javascript">';
                echo 'alert("'.$statusMsg.'");';
                echo 'window.location.href="stateadd.php"';
                echo '</script>';
            } 
        }else{ 
            $statusMsg = 'Please select an image file to upload.';
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="stateadd.php"';
            echo '</script>';
        }

    }
    else {
        $statusMsg = 'ERROR';
        echo '<script language="javascript">';
        echo 'alert("'.$statusMsg.'");';
        echo 'window.location.href="stateadd.php"';
        echo '</script>';
    }
// }
  
?>