<?php
session_start();
$username = $_SESSION['username'];
$userFileURL = "mainPage.php?name=" . $username;

//Get the filename and make sure it is 
//echo $_FILES['uploadedfile']['name'];
$filename = basename($_FILES['uploadedfile']['name']);
if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
	header("Location: " . $userFileURL);
	exit;
}

//Get the username and make sure it is valid
// if( !preg_match('/^[\w_\-]+$/', $username) ){
// 	echo "Invalid username";
// 	exit;
// }

?>

<!DOCTYPE html>
<html>
<head>
	<title> Upload Page </title>
</head>
<body>
	<h3> Upload Status </h3>
	<?php
	$full_path = sprintf("/home/petrobang/srv/uploads/%s/%s", $username, $filename);

	if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $full_path) ){

		echo htmlentities("file upload success");
		//exit;
	}else{
		echo htmlentities("file upload failed");
		//header("Location:" . $returnBack);
		//exit;
	}

	?>

	<br><br>
	<form name = "input" action = "returnPage.php" method = "POST">
        <input type="submit" value="Return to files"/>
	</form>



</body>
</html>
