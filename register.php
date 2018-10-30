<?php
 include'session.php';
 include'connection.php';
  if(isset($_POST['btnSignup'])){

  	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $now = date('Y-m-d');

        $password = password_hash($password, PASSWORD_DEFAULT);

        
      $query = "INSERT INTO users (contact_info, username, password, email, created_on) VALUES ('$contact','$username','$password','$email','$now')";


      
      mysqli_query($conn, $query); 

      echo "<script>window.location.href='index.php'</script>";
      echo "<script language='javascript'>alert('Successfully Registered!');</script>";
      
  }



?>