<?php include ('server.php') ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <title>Regestration</title>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class = "container">

        <div class = "header">
        <h2>Login</h2>

        </div>
        
        <form action = "login.php" method = "post">
        <div>
        <label for = "username">Username</label>
        <input type = "text" name = "username" required>

        </div>

        <div>
        <label for = "email">Email</label>
        <input type = "email" name = "email" required>

        </div>

        <div>
        <label for = "password">Password</label>
        <input type = "password" name = "password_1" required>

        </div>
        <!--

        <div>
        <label for = "password">Password</label>
        <input type = "password" name = "passwword_2">

        </div>
        -->


        <button type= "submit" name = "login_user">Log in</button>

        <p>Not a user?<a href = "regestration.php"><b>Register Here</b></a></p>

        </form>



        </div>
        
        <script src="" async defer></script>
    </body>
</html>