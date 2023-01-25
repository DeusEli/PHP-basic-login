<?php
include('conn.php');
$obj = new Connection();
$conn = $obj->Conn();

//$query = "SELECT * FROM accounts";
$query = "SELECT * FROM accounts WHERE username=$user AND password=$passwd";
$response = $conn->prepare($query);
$response->execute();
$data = $response->fetchAll();

// var_dump($data);
foreach ($data as $d) {
	echo $d['username'] . "<br>";
}
