<?php
    session_start();
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
            <h3 id="profileh3">Deine Profildaten!</h3>
            <hr>
            <form id="output"> 
                <p>
                    <?php
                        $con = mysqli_connect("localhost", "root" , "", "sql_injections");
                        $sql = "SELECT * FROM user WHERE u_Name = '" . $_SESSION['username'] . "'";
                        $result = $con->query($sql);
                        while ($result != false && $row = $result->fetch_assoc())
                    {
                        echo "BenutzerID: " . $row["u_ID"]; 
                        echo "<br/>";
                        echo "<br/>";
                        echo "Benutzername: " . $row["u_Name"]; 
                        echo "<br/>";
                        echo "<br/>";
                        echo "Passwort: " . $row["u_PW"]; 
                        echo "<br/>";
                        echo "<br/>";
                        echo "E-Mail: " . $row["u_Email"]; 
                        echo "<br/>";
                        echo "<br/>";
                        echo "Admin: " . $row["u_Admin"]; 
                        echo "<br/>";
                        echo "<br/>";
                    }

                    //close Connection:
                    mysqli_close($conn);
               
                    ?>
                </p>
            </form>
        </section>
    </body>
</html>