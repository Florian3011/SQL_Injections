<?php

    $servername = "sql7.freesqldatabase.com";
    $db_username = "sql7380944";
    $password = "9GPYVgvBXt";
    $db_name = "sql7380944";

    //connect to DB:
    $conn = new mysqli($servername, $db_username, $password, $db_name);

    //check Conncection: 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //login via email or Username:
    $username = $_POST['lgn_username'];
    $password = $_POST['lgn_password'];

    $sql = "SELECT * FROM user where u_Name = '$username' OR u_Email ='$username' and u_PW = '$password' ";

    $r = mysqli_query($conn, $sql);
    $e = mysqli_fetch_array($r);

    if($e['u_Name'] == $username && $e['u_PW'] == $password || $e['u_Email'] == $username && $e['u_PW'] == $password){
        echo "Anmeldung erfolgreich";
    } else {
        echo "Anmeldung fehlgeschlagen";
    }

    //close Connection:
    mysqli_close($conn);

  ?>