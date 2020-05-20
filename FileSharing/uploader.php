<?php
session_start();
$username = $_SESSION['username'];
$returnBack = "mainPage.php?name=" . $username;
//echo $username;

//Get the filename and make sure it is 
//echo $_FILES['uploadedfile']['name'];
$filename = basename($_FILES['uploadedfile']['name']);
if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
	echo "Invalid filename"; 
	exit;
}

//Get the username and make sure it is valid
if( !preg_match('/^[\w_\-]+$/', $username) ){
	echo "Invalid username";
	exit;
}

$lol = realpath($filename);
echo $lol;

$full_path = sprintf('/srv/uploads/%s/%s', $username, $filename);

echo $username;
$username2 = htmlentities($_SESSION['username']);
echo $username2;
echo $_FILES['uploadedfile']['tmp_name'];
if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $full_path) ){
	echo htmlentities("file upload success");
	/*echo "<script type='text/javascript'>
                alert('Upload Complete!');
            </script>";
	
	*///("Location:" . $returnBack);
	//exit;
}else{
	echo htmlentities("file upload failed");
	//header("Location:" . $returnBack);
	//exit;
}

?>

<!-- 



-->