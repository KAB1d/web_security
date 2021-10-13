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
h2{
	color: white;
	
	
}
h3{
	color: white;
}
</style>


	<form action="getverify.php" method="POST" class="fr">
		
						<div>	<h1>Confirm Your Account</h1></div>
						<div> <h2>Please insert your confirmation code here </h2></div>
					<div><input type="text" class="input" required="" name="verify" placeholder="confirmation code"></div>
			
			<div>
				<h3>  </h3>
			</div>
				<div class="group">
					<button type="submit" name="Confirm">Verify</button>
				</div>
				

			</form>
