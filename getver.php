<?php
session_start();

require_once('db.php');

if (isset($_POST['reset_p'])) {
  
 
  $email = $conn->real_escape_string($_POST['email']);


  
  if (empty($email)) {
    echo"Email is required";
  } else {
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     echo "Invalid Email format";
    }
  }
  
  /* first check the database to make sure 
   an entered email is in the Database*/
  
    $result ="SELECT count(*) FROM user WHERE Email=?";
$stmt = $conn->prepare($result);
$stmt->bind_param('s',$email);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
  if ($count==0) { // if user exists
   
     echo "No account with the Email provided";
    }

  // create and send a verification code to the email
  else {
    
$vkey= mt_rand(1000000,9999999);

    $query = "UPDATE user SET verification_key=? WHERE Email=? ";
  $stmti = $conn->prepare($query);
$stmti->bind_param('ss',$vkey,$email);
$stmti->execute();
$stmti->close();
    $_SESSION['username'] = $username;
    $_SESSION['pwd'] = $password;
    $_SESSION['em'] = $email;
    $_SESSION['code'] = $otp;
    //$_SESSION['stat'] = $status;
    $to=$email;
      $subject="Email Verification";
    $message="Your confirmation code is ".$vkey;
    $headers="From: derrickkukri@gmail.com";
    $headers .="MIME-Version: 1.0" . "\r\n";
    $headers .="Content-type:text/html;charaset=UTF-8" . "\r\n"; 
    mail($to, $subject, $message, $headers);
  
    header('location: verify.php');
    
  }
}


?>