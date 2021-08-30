<?php 
require '../../include/db_conn.php';
page_protect();
  

if (isset($_GET['del'])) {
      $id = $_GET['del'];
      $deletetrainer = mysqli_query($con, "DELETE FROM places WHERE Iplace_id='$id'");
      if($deletetrainer){
      $statusMsg = 'Place deleted successfully.';
      echo '<script language="javascript">';
        echo 'alert("'.$statusMsg.'");';
        echo 'window.location.href="placedisplay.php"';
        echo '</script>';
      } else {
        var_dump( "DELETE FROM trainer WHERE trainer_id='$id'");
      echo '<script language="javascript">';
        echo 'alert("'.$statusMsg.'");';
        echo 'window.location.href="placedisplay.php"';
        echo '</script>';
      }
    }