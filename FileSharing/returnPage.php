<?php
session_start();

$username = $_SESSION['username'];
$userFileURL = "mainPage.php?name=" . $username;

header("Location: " .$userFileURL);
exit();

?>