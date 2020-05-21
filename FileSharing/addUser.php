<!DOCTYPE HTML>
<html>
<head>
	<title> File Sharing Website </title>
</head>

<body> 
	<h3> Make your account: </h3>
	<form name = "input" action = "userCreate.php" method = "post">
		Username: <input type = "text" name = "newMember"/>
		<input type = "submit" value = "Submit" />
	</form>

	<br> <br> <br>
	<form name = "input" action = "login.php" method = "post">
        <input type="submit" value="Return to Login Page"/>
	</form>  
</body>
</html>