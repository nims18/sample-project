<?php
	$conn = mysqli_connect("localhost","root","","ecommerce");

	if (mysqli_connect_errno()) {
		echo "Connection Failed".mysqli_connect_errno();
	}
?>