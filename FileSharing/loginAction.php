<?php
session_start();

	if(!empty($_POST["user"])){
		$userName = $_POST["user"];
		echo "This user is " . $userName;
		$userName = trim($userName);
		
		// Read line by line
		$h = fopen("user.txt", "r");

		while( !feof($h) ){ //It returns T if end of file has been reached
			//$trimmed = fgets($h); //It returns a line from a file pointer and it stops returning at a specific length
			$nameStroage = fgets($h);
			$nameStroage = trim($nameStroage);
			if($userName == $nameStroage){
				$userFileURL = "mainPage.php?name=" . $userName;
				header("Location: " .$userFileURL);
				exit();
			}
		}
		fclose($h);
		header("Location: login.php");
		exit();
	}else{
		header("Location: login.php");
	}
?>