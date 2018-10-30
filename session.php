
<?php
  session_start();     
    if (isset($_SESSION['type'])) {
    
       include'connection.php';

    	$type = $_SESSION['type'];
    	$get_record = mysqli_query($conn, "SELECT * FROM student_table WHERE id = :id'");
    	$row = mysqli_fetch_assoc($get_record);
    	$db_firstname = $row['first_name'];
        $db_lastname = $row['last_name'];
    }else
    {
    	header('location:index.php');
    }


?>