<?php

	//var_dump($_GET) ;
	//echo "<br>";
	//var_dump($_POST) ;
	
	$signupEmailError = "";
	
	//$_POST["signupEmail"]
	
	//kas on yldse olemas
	if (isset ($_POST["signupEmail"])) {
		
		//oli olemas, ehk keegi vajutas nuppu

		if (empty($_POST["signupEmail"])) {
			
			//oli toesti tyhi 
			$signupEmailError = "See väli on kohustuslik";
		}
	}
	

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sisselogimise leht</title>
	</head>
	<body>

		<h1>Logi sisse</h1>
		
		<form method="POST">
		
			<input placeholder="email" name="loginEmail" type="email">
			
			<br><br>

			<input placeholder="Parool" name="loginPassword" type="password">
			
			<br><br>
			
			<input type ="submit">
			
			
		</form>
		
		<h1>Loo kasutaja</h1>
		
		<form method="POST">
			
			<input placeholder="email" name="signupEmail" type="email"> <?php echo $signupEmailError; ?>
			
			<br><br>

			<input placeholder="Parool" name="signupPassword" type="password">
			
			<br><br>
			
			<input type="submit" value="Loo kasutaja">
			
			
		</form>

	</body>
</html>