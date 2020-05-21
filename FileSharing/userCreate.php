<!DOCTYPE HTML>
<html>
<head>
	<title> File Sharing Website </title>
</head>

<body> 
	<?php
		$userFileURL = "login.php";
		$username = trim($_POST["newMember"]);
		$dir = sprintf("/home/petrobang/srv/uploads/%s", $username);
		$checkTxt = "/home/petrobang/public_html/FileSharing/user.txt";
		
		$userExistance = FALSE;

		// Read line by line
		$h = fopen("user.txt", "r");

		while( !feof($h) ){ //It returns T if end of file has been reached
			//$trimmed = fgets($h); //It returns a line from a file pointer and it stops returning at a specific length
			$nameStroage = fgets($h);
			if($username == trim($nameStroage)){
				$userExistance = TRUE;
			}
		}
		fclose($h);

		if($userExistance == FALSE){
			mkdir($dir, 0777);
			$fileTxt = fopen("user.txt", 'a');
			fwrite($fileTxt, "\n" . $username);
			fclose($fileTxt);
			echo "User Created";
			echo "<a href='login.php'>Return to Homepage</a>";
        } 
        else {
            echo "Username already exists. <br><br>";
            echo "<a href='login.php'>Return to Homepage</a>";
        } 

	?> 
</body>
</html>
