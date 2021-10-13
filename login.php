<?php
session_start();
$name=$_POST['usern'];
$pwd=$_POST['pass'];
  $slt="derrickkabanda70".$pwd;
  $pass=hash('sha1', $slt);
//$pass =sha1( $_POST['pass']);
$x=0;
$y=0;
include("db.php");
$sql="SELECT* FROM user WHERE Email=? and Password=?";
$stmt= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($stmt,"ss",$name,$pass);
  mysqli_stmt_execute($stmt);
  $select=mysqli_stmt_get_result($stmt);
while($user=mysqli_fetch_array($select))
{
if(($name==$user['Email'])&&($pass==$user['Password']))

{
 $fst=$user['Email'];
  $x=1;
  $_SESSION['name']=$name;
  $_SESSION['pass']=$pass;
}
}
}
if($x)
{

  $query = "SELECT * FROM user WHERE Email='$name' AND Password='$pass' AND Verified='Verified' ";
    $stmt = $conn->prepare($query);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
if($num_rows > 0){


if(!empty($_POST["remember"]))   
   {  $check=$_POST['remember'];
    setcookie ("member_login",$name,time()+ (10 * 365 * 24 * 60 * 60));  
    setcookie ("member_password",$_POST['pass'],time()+ (10 * 365 * 24 * 60 * 60));
    $_SESSION["member_name"] = $email;
   }  
   else  
   {  
    if(isset($_COOKIE["member_login"]))   
    {  
     setcookie ("member_login","");  
    }  
    if(isset($_COOKIE["member_password"]))   
    {  
     setcookie ("member_password","");  
    }  
    
  else  
  {  
   $message = "Invalid Login";  
  } 
 }

header('location:home.php');
}
else{

header('location:loginForm.php');

}}
else {
    echo "<script>alert('Wrong Email or Password ')</script> ";
    include "index.php";
    }
  


?>
