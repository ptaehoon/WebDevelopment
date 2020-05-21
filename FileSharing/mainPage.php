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
		<h3>  
			<?php 
			$username = $_SESSION["username"];
				printf("Welcome %s",$username); 
			?>
		</h3>
	</div>

	<div class = "fileDirectory">
		
		<form enctype = "multipart/form-data" action = "uploader.php" method = "post"> <!-- Sproll Code -->
			<p> 
				<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
		<label for="uploadfile_input">Choose a file to upload:</label> <input name="uploadedfile" type="file" id="uploadfile_input" />
	</p>
			<p>
				<input type = "submit" value = "Upload File" />
			</p>
		</form>


		<p> User File Directory </p>
		<form name = "input" action = "sendFileAction.php" method = "post">

		<?php
		
		$userDirectory = sprintf('/home/petrobang/srv/uploads/%s/', $username);
        if (is_dir($userDirectory)) {
        	$myfiles = scandir($userDirectory);
            foreach ($myfiles as $file => $value) {
            	if($value != "." && $value != ".."){
	                $eachFileName = trim($file, $userDirectory); //List only the file name, not the entire directory: Referenced from student's code.

	                //The reason why I have . and .. is because of current (.) and parent (..) directories. They are present in all directories and are used to refer to the dictionary itself and its direct parent.
		            echo '<input type="radio" name="eachFile" value= "' . $value . '">' . $value . ' <br>' . "\n";
	    		}
            }
        }
        
    	?>
    		<br>
			<input type = "submit" value = "viewFile" name = "fileUsage"/>
			<input type = "submit" value = "deleteFile" name = "fileUsage"/>
		</form>
	</div>
	<br>
	<div class = "logout">
		<form name = "logout" action = "logout.php" method = "post">
			<input type = "submit" value = "Log Out this User"/>
		</form>
	</div>


</body>
</html>

<!--
	If I need to keep track of information associated with a user between page loads, you should use session. Sessions are excellent for keeping track of the currently logged in user. Whenever you need to use session variables, call session_start(). 
	
	Formats:
	%u: Unsigned decimal number (equal to or greater than zero)
	%s: String



	-->