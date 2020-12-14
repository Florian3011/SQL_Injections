<?php

  $servername = "sql7.freesqldatabase.com";
  $db_username = "sql7380944";
  $password = "9GPYVgvBXt";
  $db_name = "sql7380944";

  //connect to DB:
  $conn = new mysqli($servername, $db_username, $password, $db_name);

      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $admin = '0';

  // check Connection: 
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO user (u_Name, u_PW, u_Email, u_admin)  VALUES ('$username', '$password', '$email', '$admin')";

  mysqli_query($conn, $sql);
  header('Location: main.php');
 
   //close Connection:
   mysqli_close($conn);
?>


