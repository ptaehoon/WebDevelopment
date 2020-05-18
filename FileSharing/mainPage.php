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
		$temp = $_SESSION["userLoggedIn"];
			printf("Welcome %s",$temp); 
		?>
	</div>

	<div class = "fileDirectory">
		<p> User File Directory </p>
		<form name = "input" action = "sendFile.php" method = "post">
			
			<?php
				//printf('/home/users/%s/files', $_SESSION['username']);
				$userDirectory = sprintf('/home/users/%s/files', $_SESSION['username']);
			?>

			<input type = "submit" value = "viewFile" name = fileUsage/>
			<input type = "submit" value = "deleteFile" name = fileUsage/>
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