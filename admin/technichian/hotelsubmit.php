<?php
  require '../../include/db_conn.php';
  page_protect();

  

   if(!empty($_POST['hotel_name']) && !empty($_POST['hotel_detail'])){

       
    $id=$_POST["hotel_id"];
    $name=$_POST["hotel_name"];
    $city=$_POST["city"];
    $detail=$_POST["hotel_detail"];
    $hotelno=$_POST["hotel_no"];
    $email=$_POST["hotel_email"];
    $rate=$_POST["hotel_rate"];


        if(!empty($_FILES["hotel_photo"]["name"])) { 
            // Get file info 
            $imgName = basename($_FILES["hotel_photo"]["name"]); 
            $fileType = pathinfo($imgName, PATHINFO_EXTENSION); 
             
            // Allow certain file formats 
            $allowTypes = array('jpg','png','jpeg'); 
            if(in_array($fileType, $allowTypes)){ 
                $img = $_FILES['hotel_photo']['tmp_name']; 
                $imgContent = addslashes(file_get_contents($img)); 
             
                // Insert image content into database 
                $q1 = "INSERT INTO hotel (hotel_id,city_id,hotel_name,hotel_photo,hotel_detail,hotel_no,hotel_email,hotel_rate) 
                VALUES ('$id', '$city', '$name', '$imgContent', '$detail','$hotelno','$email','$rate')";
                $q2 = mysqli_query($con, $q1); 
                 
                if($q2){ 
                    $statusMsg = "Hotel uploaded successfully.";
                    echo '<script language="javascript">';
                    echo 'alert("'.$statusMsg.'");';
                    echo 'window.location.href="hoteladd.php"';
                    echo '</script>';
                }else{ 
                    $statusMsg = "Place fail to upload.";
                    echo '<script language="javascript">';
                    echo 'alert("'.$statusMsg.'");';
                    // echo 'window.location.href="placeadd.php"';
                    echo '</script>';
                }  
            }else{ 
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, files are allowed to upload.';
                echo '<script language="javascript">';
                echo 'alert("'.$statusMsg.'");';
                echo 'window.location.href="hoteladd.php"';
                echo '</script>';
            } 
        }else{ 
            $statusMsg = 'Please select an image file to upload.';
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="hoteladd.php"';
            echo '</script>';
        }

    }
    else {
        $statusMsg = 'ERROR';
        echo '<script language="javascript">';
        echo 'alert("'.$statusMsg.'");';
        echo 'window.location.href="hoteladd.php"';
        echo '</script>';
    }
// }
  
?>