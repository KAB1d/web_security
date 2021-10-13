<style type="text/css">
	body{
	margin:0;
	color:#6a6f8c;
	background:#c8c8c8;
	font:600 16px/18px 'Open Sans',sans-serif;

}
input{
	width: 500px;
	height: 30px;
	margin-top: 20px;
	border-radius: 5px;

}
button{
	width: 200px;
	height: 30px;
	border-radius: 15px;
	background-color: skyblue;
	color: white;
	font-size: 19px;
	margin-top: 10px;
}

.fr{
	text-align: center;
	margin-top: 40px;
	margin-left: 350px;
	width: 50%;
	background-color: green;
	height: 400px;
	padding-top: 5px;
	border-radius: 10px;

}
h1{
	color: white;
	margin-top: 100px;
	
}
h3{
	color: white;
}
</style>
<?php 
$taker=$_GET['taker'];
						if (empty($taker)) {
						 	echo "Your request is not granted !!!";
						 }
						 else{
						 	
						 ?>

	<form action="getreset.php" method="POST" class="fr">
		
						<div>	<h1>RESET PASSWORD</h1></div>

					<div><input  type="password"  required="" name="pass" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*?]).{10,}" title="Password must contain at least 1 number and 1 uppercase and 1 lowercase letter and at least 10 or more characters"></div>
					<div><input  type="password"  required="" name="repass" placeholder="Re-Type Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*?]).{10,}" title="Password must contain at least 1 number and 1 uppercase and 1 lowercase letter and at least 10 or more characters"></div>
			
			<div>
				<input type="hidden" name="taker" value="<?php echo $taker ?>">
			</div>
				<div class="group">
					<button type="submit" name="reset_p">Reset</button>
				</div>

			</form>
<?php } ?>