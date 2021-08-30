<?php
require '../../include/db_conn.php';
require_once "forgetpasswordaction.php";
$errors=[];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="../../css/iofrm-theme18.css">
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/graphic3.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Password Reset</h3>
                        <p>To reset your password, enter the email address you use to sign in to iofrm</p>
                        <form method="post" action="forgetpassword.php">
                            <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                            <div class="form-button full-width">
                                <button id="submit" type="submit" name="reset-password" class="ibtn btn-forget">Send Reset Link</button>
                            </div>
                            <a href="login18.php">Back To Login</a>
                        </form>
                    </div>
                    <div class="form-sent">
                        <div class="tick-holder">
                            <div class="tick-icon"></div>
                        </div>
                        <h3>Password link sent</h3>
                        <p>Please check your inbox iofrm@iofrmtemplate.io</p>
                        <div class="info-holder">
                            <span>Unsure if that email address was correct?</span> <a href="#">We can help</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>

<?php
if (isset($_POST['reset-password'])) {
  $email = mysqli_real_escape_string($con, $_POST['email']);
  // ensure that the student exists on our system
  $query = "SELECT admin_email FROM admin WHERE admin_email='$email'";
  $results = mysqli_query($con, $query);

  if (empty($email)) {
    array_push($errors, "Your email is required");
  }else if(mysqli_num_rows($results) <= 0) {
    array_push($errors, "Sorry, no student exists on our system with that email");
  }
  // generate a unique random token of length 100
  $token = bin2hex(random_bytes(50));
  if (count($errors) == 0) {
    // store token in the password-reset database table against the student's email
    $sql = "INSERT INTO password_resets(token, email) VALUES ('$token', '$email')";

    $results = mysqli_query($con, $sql);

    if($results){
        sendResetPasswordEmail($email, $token);
        // echo '<script>window.location.href="pending.php?email='.$email.'";</script>';
      }

  }
  
}

?>