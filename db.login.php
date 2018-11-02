<?php
 session_start();
 include'connection.php';

 if (isset($_POST['loginButton'])) {
 	$username = $_POST['username'];
 	$password = $_POST['password'];

 	if ($username && $password) {
 		$query = mysqli_query($conn, "SELECT * FROM users WHERE username = :$username' and password = :$password'");
 		$query_row = mysqli_num_rows($query);
 			if ($row > 0) {
 				$row = mysqli_fetch_assoc($query);

 				$firstname = $row['first_name'];
 				$lastname = $row['last_name'];
 				$db_password = $row['password'];
 				$type = $row['type'];

 				if (password_verify($password, $db_password)) {
 					$_SESSION['type']  = $type;
 					if ($type == 1) {
 						header('location:admin/index.php');
 					}else{
 						header('location:users/index.php');
 					}
 				}
 			}else{
 				header('location:index.php?error=1');
 			}
 	}
 }


?>