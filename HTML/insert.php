<?php

  $servername = "localhost";
  $db_username = "root";
  $password = "";
  $db_name = "sql_injections";

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

  //Passwort Hash
  $key = hash("sha256", $password);
  $password = $key;

  $sql = "INSERT INTO user (u_Name, u_PW, u_Email, u_admin)  VALUES ('$username', '$password', '$email', '$admin')";

  mysqli_query($conn, $sql);
  header('Location: main.php');
 
   //close Connection:
   mysqli_close($conn);
?>


