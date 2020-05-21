<!DOCTYPE html>
<html>
<head>

	<title>File Sharing Website</title>

</head>
<body>
	<div class = "login">
		<h3> Login for File Sharing </h3>
		<form name = "input" action = "loginAction.php" method = "post">
			Username: <input type = "text" name = "user"/>
			<input type = "submit" value = "Login" />
		</form>
			

		<!-- JavaScript Format
		<form id = "login_id" method = "post" name = "myLoginForm">
			<label> Username : </label>
			<input type = "text" name = "username" id = "username"/>
			<label> Password : </label>
			<input type = "text" name = "password" id = "password"/>
			<input type = "button" value = "Login" id = "submit" onclick = "validate()"/>
		</form> -->
	</div>

	<br><br>
	<div class = "addUser">
		<form name = "addUser" action = "addUser.php" method = "post">
			<input type = "submit" value = "Add User"/>
		</form>
	</div>

</body>
</html>
