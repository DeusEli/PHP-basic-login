<?php
include('connData.php');
class Connection
{
	function Conn()
	{
		try {
			$conn = new PDO("pgsql:host=" . SERVER . ";port=" . PORT . ";dbname=" . DBNAME, USER, PASSWORD);
			return $conn;
		} catch (Exception $error) {
			die("El error de conexión es: " . $error->getMessage());
		}
	}
}
