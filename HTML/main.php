<?php

    $servername = "sql7.freesqldatabase.com";
    $db_username = "sql7380944";
    $password = "9GPYVgvBXt";
    $db_name = "sql7380944";

    // Verbindung erstellen:
    $conn = new mysqli($servername, $db_username, $password, $db_name);

    // Verbindung überprüfen: 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

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
        <title>Sign in & Sign up Form</title>
    </head>
    <body>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="#" class="sign-in-form">
                        <h2 class="title">Sign in</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Username" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" />
                        </div>
                        <input type="submit" value="Login" class="btn solid" />            
                    </form>

                    <form action="insert.php" method="POST" class="sign-up-form">
                        <h2 class="title">Sign up</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Username" name="username" required/>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" placeholder="Email" name="email" required/>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Password" name="password" required/>
                        </div>
                        <input type="submit" class="btn" value="Sign up" />
                    </form>
                </div>
            </div>

            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>New here ?</h3>
                        <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                        </p>
                         <button class="btn transparent" id="sign-up-btn">
                        Sign up
                        </button>
                    </div>
                    <img src="img/log.svg" class="image" alt="" />
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>One of us ?</h3>
                        <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                        </p>
                        <button class="btn transparent" id="sign-in-btn">
                        Sign in
                        </button>
                    </div>
                    <img src="img/log.svg" class="image" alt="" />
                </div>
            </div>
        </div>

    <script src="app.js"></script>
  </body>
</html>
