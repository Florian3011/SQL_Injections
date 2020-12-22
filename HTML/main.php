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

        <?php

            $con = mysqli_connect("localhost", "root" , "", "sql_injections");

            if(isset($_POST['loginBTN'])){
               
                
                $sql = "SELECT * FROM user where u_Name = '" . $_POST["lgn_username"] . "' AND u_PW = '" . $_POST['lgn_password'] . "'";
        
                    $result = mysqli_query($con, $sql);

                    $count = mysqli_num_rows($result);
                    if($count == 1){
                            header("Location: profil.html");
                    } else {
                        echo "<b> Login not possible, please check Email and password! </b>";
                    }

            
                
            }


        ?>

    </head>
    <body>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="main.php" method="POST" class="sign-in-form">
                        <h2 class="title">Sign in</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Username or Email" name="lgn_username" required/>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="text" placeholder="Password" name="lgn_password" required/>
                        </div>
                        <input type="submit" value="Login" class="btn solid" name="loginBTN" />   

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

