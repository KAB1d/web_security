<?php 
session_start();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
 $email=$_POST['email'];
 $psw = $_POST['pwd'];
 $vkey= mt_rand(1000000,9999999);
 $verify= "Not Verified";
  $_SESSION['email']=$email;
$_SESSION['key']=$vkey;
$check=0;
  include "db.php";
         $sql="select email from user where Email=?";
         $stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}

  mysqli_stmt_bind_param($stmt,"s",$email);
  mysqli_stmt_execute($stmt);
  $emi=mysqli_stmt_get_result($stmt);
while ($feti=mysqli_fetch_array($emi)) {
   if ($email==$feti['email']) {
       $check=1;

   }
}

if($check!=1)
{
    $slt="derrickkabanda70".$psw;
    $pass=hash('sha1', $slt);
    if($email!=$pass)
    {

$q="insert into user (FirstName,LastName,Email,Password,verification_key,Verified) values(?,?,?,?,?,?)";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$q)) {
 echo "statement failed";
}
else{

  mysqli_stmt_bind_param($stmt,"ssssss",$fname,$lname,$email,$pass,$vkey,$verify);
  mysqli_stmt_execute($stmt);
}

if ($q) {
    $to= $email;
    
    $subject="Email Verification";
    $message="Your confirmation code is ".$vkey;
    $headers="From: derrickkukri@gmail.com";
    $headers .="MIME-Version: 1.0" . "\r\n";
    $headers .="Content-type:text/html;charaset=UTF-8" . "\r\n"; 
    mail($to, $subject, $message, $headers);
   
	 	
 	include "verify.php";
}
else{
    echo "<script>alert('Failed to create an account!... Try again please!')</script>";
    include "index.php"; 
}
}
}

 ?>
