<?php
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}

	// Prefer Railway/host environment variables, fall back to local dev defaults
	$host = getenv('DB_HOST') ?: 'localhost';
	$dbName = getenv('DB_NAME') ?: 'ruta';
	$dbUser = getenv('DB_USER') ?: 'root';
	$dbPass = getenv('DB_PASSWORD');
	$dbPort = getenv('DB_PORT') ? intval(getenv('DB_PORT')) : 3306;

	// On some local setups, empty password is used; normalize null for mysqli
	if ($dbPass === false) { $dbPass = null; }

	// Establish connection; suppress warnings but log errors for debugging
	$conn = @mysqli_connect($host, $dbUser, $dbPass, $dbName, $dbPort);
	if (!$conn) {
		error_log('Database connection failed: ' . mysqli_connect_error());
	}
?>