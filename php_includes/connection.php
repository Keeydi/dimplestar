<?php
<<<<<<< HEAD
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
=======
	session_start();
>>>>>>> e63577ad1850ee4ca650b958b2563d1de9f40366
	$conn = mysqli_connect("localhost", "root", null, "ruta");
?>