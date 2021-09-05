
<?php
include './include/db_conn.php';

$user_id_auth = ltrim($_POST['username']);
$user_id_auth = rtrim($user_id_auth);

$pass_key = ltrim($_POST['password']);
$pass_key = rtrim($_POST['password']);

$user_id_auth = stripslashes($user_id_auth);
$pass_key     = stripslashes($pass_key);



if($pass_key=="" &&  $user_id_auth==""){
   echo "<head><script>alert('Username and Password can be empty');</script></head></html>";
               echo "<meta http-equiv='refresh' content='0; url=login18.php'>";
  
}
else if($pass_key=="" ){
   echo "<head><script>alert('Password can be empty');</script></head></html>";
               echo "<meta http-equiv='refresh' content='0; url=login18.php'>";
  
}
else if($user_id_auth=="" ){
   echo "<head><script>alert('Username can be empty');</script></head></html>";
               echo "<meta http-equiv='refresh' content='0; url=login18.php'>";
  
}

else{

$user_id_auth = mysqli_real_escape_string($con, $user_id_auth);
$pass_key     = mysqli_real_escape_string($con, $pass_key);
$sql          = "SELECT * FROM admin  WHERE username='$user_id_auth' and password='$pass_key'";
$result       = mysqli_query($con, $sql);
$count        = mysqli_num_rows($result);
if ($count == 1) {
    $row = mysqli_fetch_assoc($result);
    session_start();
    // store session data
    $_SESSION['user_data']  = $user_id_auth;
    $_SESSION['logged']     = "start";
    $_SESSION['auth_level']         = $row['position'];
    $_SESSION['username']  = $user_id_auth;
    $_SESSION['username']   =$row['username'];
    $_SESSION['id']   =$row['admin_ID'];
    $auth_l_x               = $_SESSION['auth_level'];
    if ($auth_l_x == 'author') {
        header("location: admin/author/");
    } else if ($auth_l_x == 'technichian') {
        header("location: admin/technichian/index.php");
    }
     // else if ($auth_l_x == 3) {
    //     header("location: ../dashboard/member/");        
     
    else {
        header("location: ../login/");
    }
      
} else {
    include 'index.php';
    echo "<html><head><script>alert('Username OR Password is Invalid');</script></head></html>";
}
}
?>
