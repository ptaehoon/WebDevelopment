<?php
session_start();
$_SESSION['username']= $_GET['name'];
?>

<!DOCTYPE html>
<html>
<head>

	<title>File Sharing Website</title>

</head>

<body>

	<div class = "welcomePage">
		<h3> Hello </h3>
		<?php 
		$temp = $_SESSION["username"];
			printf("Welcome %s",$temp); 
		?>
	</div>

	<div class = "fileDirectory">
		<p> Upload this File </p>
		<form enctype = "multipart/form-data" action = "uploader.php" method = "post"> <!-- Sproll Code -->
			<p> 
				<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
		<label for="uploadfile_input">Choose a file to upload:</label> <input name="uploadedfile" type="file" id="uploadfile_input" />
	</p>
			<p>
				<input type = "submit" value = "Upload File" />
			</p>
		</form>
<!--
		<p> User File Directory </p>
		<form name = "input" action = "sendFileAction.php" method = "post">




			<?php
			/*
			$userDirectory = sprintf('/home/users/%s/files', $_SESSION['username']);
            if (is_dir($userDirectory)) {
	            foreach (glob($userDirectory . '/*.*') as $file) {
                    $name = trim($file, $userDirectory);
		            echo '<input type="radio" name="thefile" ';
		            echo 'value= "' . $file . '">' . $name . ' <br>' . "\n";
	            }
            }
            */
        	?>

			<input type = "submit" value = "viewFile" name = fileUsage/>
			<input type = "submit" value = "deleteFile" name = fileUsage/>
		</form>
	-->
	</div>


</body>
</html>

<!--
	If I need to keep track of information associated with a user between page loads, you should use session. Sessions are excellent for keeping track of the currently logged in user. Whenever you need to use session variables, call session_start(). 
	
	Formats:
	%u: Unsigned decimal number (equal to or greater than zero)
	%s: String



	-->