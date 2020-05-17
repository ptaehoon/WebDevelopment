<!DOCTYPE html>
<html>
<head>

	<title>My First PHP Script</title>

</head>
<body>

	<?php
	echo "\t<p>Hello World!</p>\n";
	?>

	<div class = "login">
		<h3> Login for File Sharing </h3>
		<form id = "login_id" method = "post" name = "myLoginForm">
			<label> Username : </label>
			<input type = "text" name = "username" id = "username"/>
			<label> Password : </label>
			<input type = "text" name = "password" id = "password"/>
			<input type = "button" value = "Login" id = "submit" onclick = "validate()"/>
		</form>
	</div>

</body>
</html>
