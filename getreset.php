<?php 
if (isset($_POST['reset_p'])) {
	$taker=$_POST['taker'];
  $d=0;
	
	$pwd=$_POST['pass'];
	$repwd=$_POST['repass'];
	 if ($pwd==$repwd) {
	require "db.php";
$sql="select* from password where Taker=?";
$st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$taker);
  mysqli_stmt_execute($st);
  $result=mysqli_stmt_get_result($st);
  while($row=mysqli_fetch_assoc($result)) {
    if($row['Taker']==$taker)
    {
    $d=$d+1;
    $eml=$row['Email'];
}
  }
  if ($d<1) {
 echo "Submit first your request".$taker;
  }
  else
  {
$sql="select* from password where Email=?";
$st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$eml);
  mysqli_stmt_execute($st);
  $result=mysqli_stmt_get_result($st);
  if (!$row=mysqli_fetch_assoc($result)) {
  	echo "Error found";
  }
  else
  {

  $sql="UPDATE user set Password=? where Email=?";
  $st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement failed";
}
else{
	$slt="derrickkabanda70".$pwd;
  $pass=hash('sha1', $slt);
  mysqli_stmt_bind_param($st,"ss",$pass,$eml);
  mysqli_stmt_execute($st);

  $sql="delete from password where Email=?";
     $st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$eml);
  mysqli_stmt_execute($st);
  header("location:index.php");
}	
  }

  	}
}
}}}
else
{
 echo '<script>alert("Password do not much")</script>';

echo "\n";
  
header("location:reset.php?taker=$taker");
}
}
?>
