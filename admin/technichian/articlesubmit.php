

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
  

   if(!empty($_POST['article_name']) && !empty($_POST['articlec'])){

       
        $id=$_POST["article_id"];
        $aid=$_SESSION['username'];
        $name=$_POST["article_name"];
        $state=$_POST["state"];
        $date = date('Y-m-d');
        $content=$_POST['articlec'];

        if(!empty($_FILES["article"]["name"])) { 
            // Get file info 
            $imgName = basename($_FILES["article"]["name"]); 
            $fileType = pathinfo($imgName, PATHINFO_EXTENSION); 
             
            // Allow certain file formats 
            $allowTypes = array('jpg','png','jpeg'); 
            if(in_array($fileType, $allowTypes)){ 
                $img = $_FILES['article']['tmp_name']; 
                $imgContent = addslashes(file_get_contents($img)); 
             
                // Insert image content into database 
                $q1 ="INSERT INTO article(article_id,admin_name,article_name,release_date,article_link,article_content,state_id) 
                    VALUES( '$id','$aid','$name','$date','$imgContent', '$content', '$state')";
                $q2 = mysqli_query($con, $q1); 
                 
                if($q2){ 
                    $statusMsg = "Article uploaded successfully.";
                    echo '<script language="javascript">';
                    echo 'alert("'.$statusMsg.'");';
                    echo 'window.location.href="articleadd.php"';
                    echo '</script>';
                }else{ 
                    $statusMsg = "Article fail to upload.";
                    echo '<script language="javascript">';
                    echo 'alert("'.$statusMsg.'");';
                    // echo 'window.location.href="placeadd.php"';
                    echo '</script>';
                }  
            }else{ 
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, files are allowed to upload.';
                echo '<script language="javascript">';
                echo 'alert("'.$statusMsg.'");';
                echo 'window.location.href="articleadd.php"';
                echo '</script>';
            } 
        }else{ 
            $statusMsg = 'Please select an image file to upload.';
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="articleadd.php"';
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