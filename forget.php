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
h3{
	color: white;
}
</style>


	<form action="getforget.php" method="POST" class="fr">
		
						<div>	<h1>FORGET PASSWORD</h1></div>
					<div><input id="user" type="email" class="input" required="" name="email" placeholder="Email"></div>
			
			<div>
				<h3>  </h3>
			</div>
				<div class="group">
					<button type="submit" name="submit">Recover Password</button>
				</div>
				
<div>
				<h3>If you want to back Please click <a href="index.php">here!</a>  </h3>
			</div>
			</form>
