<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="styles/main.css" rel="stylesheet"/>
	<script src="js/eggScript.js"></script>
	<title>Form</title>
</head>
<body id="page">
	<img id="papi" width="80" height= "60">

	<p id="demo"></p>

	<form action="process.php" method="post">
		<h3>
			<?php

			if($_GET["error"] == "Nolambo"){

				echo "Come back in 30 mins from last claim";
			}

			 ?>
			 	
			 </h3>
		<div class="title">
			
			<p>EGGDRA FAUCET</p>
		</div>
    <div class="faucet">
    	<input type="text" name="address" id="input">
    	<br>
    	<input type="submit" value="Claim" id="button" onClick="displayConfirmationPapi">
		</div>

	</form>
</body>
</html>
