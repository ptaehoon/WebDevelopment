<?php


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
				header("Location: mainPage.php");
				exit();
			}
			printf($nameStroage); //"fgets" Returns a line from an open file. 
		}
		fclose($h);
	}else{
		header("Location: login.php");
	}
?>