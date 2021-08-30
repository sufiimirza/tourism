<?php 
require '../../include/db_conn.php';
page_protect();
  

if (isset($_GET['del'])) {
      $id = $_GET['del'];
      $deleteres = mysqli_query($con, "DELETE FROM hotel WHERE hotel_id='$id'");
      if($deleteres){
      $statusMsg = 'Hotel deleted successfully.';
      echo '<script language="javascript">';
        echo 'alert("'.$statusMsg.'");';
        echo 'window.location.href="hoteldisplay.php"';
        echo '</script>';
      } else {
        var_dump( "DELETE FROM trainer WHERE trainer_id='$id'");
      echo '<script language="javascript">';
        echo 'alert("'.$statusMsg.'");';
        echo 'window.location.href="hoteldisplay.php"';
        echo '</script>';
      }
    }