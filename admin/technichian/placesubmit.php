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
  

   if(!empty($_POST['place_name']) && !empty($_POST['opening_hour'])){

       
    $id=$_POST["Iplace_id"];
    $name=$_POST["place_name"];
    $city=$_POST["city"];
    $hour=$_POST["opening_hour"];
    $detail=$_POST["place_details"];
    $price=$_POST["ticket_price"];
    $child=$_POST["child_price"];
    $close=$_POST["closing_hour"];
    $email=$_POST["place_email"];

        if(!empty($_FILES["place_photo"]["name"])) { 
            // Get file info 
            $imgName = basename($_FILES["place_photo"]["name"]); 
            $fileType = pathinfo($imgName, PATHINFO_EXTENSION); 
             
            // Allow certain file formats 
            $allowTypes = array('jpg','png','jpeg'); 
            if(in_array($fileType, $allowTypes)){ 
                $img = $_FILES['place_photo']['tmp_name']; 
                $imgContent = addslashes(file_get_contents($img)); 
             
                // Insert image content into database 
                $q1 = "INSERT INTO places (Iplace_id,city_id,place_name,place_photo,opening_hour,place_details,ticket_price,child_price,closing_hour,place_email)
                VALUES ('$id', '$city', '$name', '$imgContent', '$hour', '$detail', '$price','$child','$close','$email')";
                $q2 = mysqli_query($con, $q1); 
                 
                if($q2){ 
                    $statusMsg = "Place uploaded successfully.";
                    echo '<script language="javascript">';
                    echo 'alert("'.$statusMsg.'");';
                    echo 'window.location.href="placeadd.php"';
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
                echo 'window.location.href="placeadd.php"';
                echo '</script>';
            } 
        }else{ 
            $statusMsg = 'Please select an image file to upload.';
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="placeadd.php"';
            echo '</script>';
        }

    }
    else {
        $statusMsg = 'ERROR';
        echo '<script language="javascript">';
        echo 'alert("'.$statusMsg.'");';
        echo 'window.location.href="../staff/diet.php"';
        echo '</script>';
    }
// }
  
?>