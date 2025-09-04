<?php
header('Content-Type: text/plain');

echo "PHP OK\n";

// Show env summary (safe subset)
$env = [
	'DB_HOST' => getenv('DB_HOST'),
	'DB_PORT' => getenv('DB_PORT'),
	'DB_NAME' => getenv('DB_NAME'),
	'DB_USER' => getenv('DB_USER'),
];
echo "Env: " . json_encode($env) . "\n";

// Try DB connect
require_once __DIR__ . '/php_includes/connection.php';
if (!isset($conn) || !$conn) {
	echo "DB: FAILED - " . mysqli_connect_error() . "\n";
	exit(1);
}

$res = mysqli_query($conn, 'SELECT 1 as ok');
if ($res) {
	$row = mysqli_fetch_assoc($res);
	echo "DB: OK (" . $row['ok'] . ")\n";
} else {
	echo "DB: QUERY FAILED - " . mysqli_error($conn) . "\n";
}

echo "All good.\n";

