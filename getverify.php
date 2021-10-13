<?php
session_start();
require_once('db.php');
if (isset($_POST['Confirm'])) {
    $email=$_SESSION['email'];
    $key=$_POST['verify'];

    
   $sql= "SELECT * FROM user WHERE verification_key=?";
    $st = $conn->prepare($sql);
    $st->bind_param('i',$key);
    if($st->execute()){
    $result = $st->get_result();
    $num_rows = $result->num_rows;
  }
  if($num_rows > 0){
  $sql = "UPDATE user SET Verified='Verified' WHERE Email=? ";
  $sta = $conn->prepare($sql);
$sta->bind_param('s',$email);
$sta->execute();
$sta->close();
header('location:index.php');

    }
  else{
    echo "Something Wrong";
  }

  }

?>