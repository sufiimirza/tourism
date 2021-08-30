
<?php
require '../../include/db_conn.php';
page_protect();
    

if(isset($_POST['update'])){

 
       $id=$_POST["article_id"];
       $aid=$_SESSION['user_data'];
       $name=$_POST["article_name"];
       $date = date('Y-m-d');
       $content=$_POST['articlec'];


   if(!empty($_FILES["article"]["name"])) { 
        // Get file info 
        $imgName = basename($_FILES["article"]["name"]); 
        $fileType = pathinfo($imgName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','PNG','jpeg','GIF'); 
        if(in_array($fileType, $allowTypes)){ 
            $img = $_FILES['article']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($img)); 
         
            // Insert image content into database 
            $updatearticle = mysqli_query($con, "UPDATE article SET article_name='$name', article_content='$content', article_link='$imgContent' WHERE article_id='$id'");
     

            if($updatearticle){ 
                $statusMsg = "Article updated successfully.";
                echo '<script language="javascript">';
                echo 'alert("'.$statusMsg.'");';
                 echo 'window.location.href="articledisplay.php"';
                echo '</script>';
            }else{ 
                $statusMsg = "Article update failed, please try again.";
                echo '<script language="javascript">';
                echo 'alert("'.$statusMsg.'");';
                echo 'window.location.href="articledisplay.php"';
                echo '</script>';
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="articledisplay.php"';
            echo '</script>';
        } 
    }else{
        $updatearticle = mysqli_query($con, "UPDATE article SET article_name='$name', article_content='$content' WHERE article_id='$id'");
         if($updatearticle){ 
            $statusMsg = "Article updated successfully.";
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="articledisplay.php"';
            echo '</script>';
        }else{ 
            $statusMsg = "Article update failed, please try again with correct data.";
            echo '<script language="javascript">';
            echo 'alert("'.$statusMsg.'");';
            echo 'window.location.href="articledisplay.php"';
            echo '</script>';
        }  

    }
  }

?>
