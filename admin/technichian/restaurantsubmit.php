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
  

   if(!empty($_POST['restaurant_name']) && !empty($_POST['opening_hour'])){

       
    $id=$_POST["restaurant_id"];
    $name=$_POST["restaurant_name"];
    $type=$_POST["type"];
    $city=$_POST["city"];
    $hour=$_POST["opening_hour"];
    $close=$_POST["closing_hour"];
    $email=$_POST["res_email"];
    $phone=$_POST["res_phoneNo"];
    $detail=$_POST["rest_detail"];
    $latitude=$_POST["locationLatitude"];
    $longitude=$_POST["locationLongitude"];

        if(!empty($_FILES["res_photo"]["name"])) { 
            // Get file info 
            $imgName = basename($_FILES["res_photo"]["name"]); 
            $fileType = pathinfo($imgName, PATHINFO_EXTENSION); 
             
            // Allow certain file formats 
            $allowTypes = array('jpg','png','jpeg'); 
            if(in_array($fileType, $allowTypes)){ 
                $img = $_FILES['res_photo']['tmp_name']; 
                $imgContent = addslashes(file_get_contents($img)); 
             
                // Insert image content into database 
                $q1 = "INSERT INTO restaurant (restaurant_id,city_id,restaurant_name,res_photo,opening_hour,rest_detail,rest_type,closing_hour,res_email,res_phoneNo,locationLatitude,locationLongitude) 
                VALUES ('$id', '$city', '$name', '$imgContent', '$hour', '$detail','$type','$close','$email','$phone',$latitude,$longitude)";
                $q2 = mysqli_query($con, $q1); 
                 
                if($q2){ 
                    $statusMsg = "Restaurant uploaded successfully.";
                    echo '<script language="javascript">';
                    echo 'alert("'.$statusMsg.'");';
                    echo 'window.location.href="restaurantadd.php"';
                    echo '</script>';
                }else{ 
                    $statusMsg = "Restaurant fail to upload.";
                    echo '<script language="javascript">';
                    echo 'alert("'.$statusMsg.'");';
                    echo 'window.location.href="restaurantadd.php"';
                    echo '</script>';
                }  
            }else{ 
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, files are allowed to upload.';
                echo '<script language="javascript">';
                echo 'alert("'.$statusMsg.'");';
                echo 'window.location.href="restaurantadd.php"';
                echo '</script>';
            } 
        }else{ 
            $statusMsg = 'Please select an image file to upload.';
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="restaurant.php"';
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