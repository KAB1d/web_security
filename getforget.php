<?php 
if (isset($_POST['submit'])) {
  $email=$_POST['email'];
  $d=0;
  include("db.php");
  $sql="select* from user where Email=?";
$st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "alter('statement failed')";
}
else{
  mysqli_stmt_bind_param($st,"s",$email);
  mysqli_stmt_execute($st);
  $result=mysqli_stmt_get_result($st);
  while($row=mysqli_fetch_assoc($result)) {
    if($row['Email']==$email)
    {
    $d=$d+1;
    $eml=$row['Email'];
}
  }
}
  if($d>=1){
  $taker=bin2hex(random_bytes(16));
  $giver=random_bytes(32);
  $link="http://localhost:8081/websec/reset.php?taker=$taker";
  
     $sql="delete from password where Email=?";
     $st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "alter('statement failed')";
}
else{
  mysqli_stmt_bind_param($st,"s",$email);
  mysqli_stmt_execute($st);
}
$q="insert into password(Email,Taker) values(?,?)";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$q)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($st,"ss",$email,$taker);
  mysqli_stmt_execute($st);
}

$from = 'derrickkukri@gmail.com';
$mail_to = $email;
$subject = 'Please Try To Reset Password';
$message = 'Click on the following link to reset your password';
$message .= '<a href="'.$link.'>';
$headers = 'From: ' . $from;
$headers .= 'Reply-To: ' . $from;
$headers .= 'Content-type:text/html';
mail($mail_to, $subject, $message, $headers);
echo "<script>alert('Email sent please check on your email')</script>";
include "forget.php";
}
else{
  
  echo "<script>alert('Email not found')</script>";
  
}
}
?>