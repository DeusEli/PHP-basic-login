<?php
$host = 'localhost';
$port = '5432';
$dbname = 'postgres';
$user = 'deus';
$psswd = 'knEj04/10';

try {
	$conn = "pgsql:host=" . $host . ";port=" . $port . ";dbname=$dbname";
	$pdo = new PDO($conn, $user, $psswd, [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);

	if ($pdo) {
		echo "Conexión exitosa";
		$stmt = $pdo->query("SELECT * FROM accounts;");

		while ($row = $stmt->fetch()) {
			echo "<br> ID: $row[0]<br> Username: $row[1]<br> Password: $row[2]";
		}
	}
} catch (PDOException $e) {
	die($e->getMessage());
}

$conn = null;
