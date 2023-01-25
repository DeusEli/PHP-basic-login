<?php
session_start();
$user = $_POST["username"];
$passwd = $_POST["password"];
// if ($user == "Kathe" && $passwd == "quesito") {
// 	$_SESSION["session"] = true;
// 	$_SESSION["user"] = $user;
// 	header('location: ./logged_user.php');
// } else {
// 	header('location: ./login.php');
// }
include('./connDB/conn.php');
$obj = new Connection();
$conn = $obj->Conn();

$query = "SELECT * FROM accounts WHERE username='$user' AND password='$passwd'";
$response = $conn->prepare($query);
$response->execute();
$data = $response->fetchAll();
if (sizeof($data) > 0) {
	$_SESSION["session"] = true;
	$_SESSION["user"] = $user;
	header('location: ./logged_user.php');
} else {
	$_SESSION["incorrectData"] = true;
	header('location: ./login.php');
}
