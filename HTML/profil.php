<?php

  $servername = "localhost";
  $db_username = "root";
  $password = "";
  $db_name = "sql_injections";

  //connect to DB:
  $conn = new mysqli($servername, $db_username, $password, $db_name);


  // check Connection: 
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  //close Connection:
  mysqli_close($conn);

  ?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script
            src="https://kit.fontawesome.com/5281e28dd9.js"
            crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="CSS\style.css" />
        <title>profile Form</title>
    </head>
    <body>
        <header>
            <div id="head"> 
                <h2 class="title">Profil</h2>
            </div>
        </header>

        <section class="profile">
            <h3 id="profileh3">Profil von dir!</h3>
            <hr>
            <form id="output"> 
                <p>
                        <label for="u_ID">Benutzer-ID: </label>
                        <br>
                        <br>
                        <label for="u_Name">Benutzername: </label>
                        <br>
                        <br>
                        <label for="u_PW">Passwort: </label>
                        <br>
                        <br>
                        <label for="u_Email">E-Mail Adresse: </label>
                        <br>
                        <br>
                        <label for="u_admin">Admin: </label>
                </p>
            </form>
        </section>
    </body>
</html>