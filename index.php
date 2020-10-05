<?php

session_start();

if(isset($_SESSION['username'])){
    $_SESSION['msg'] = "You must log in first to view this page";
    header("Location : login.php");
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['usename']);
    header("location : login.php");


}

?>

<!DOCTYPE <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <h1?>This is the homepage</h1>

        <?php
        if(isset($_SESSION['success'])) : ?>

            <div>
            <h3>
            <?php

            echo $_SESSION['success'];
            unset($_SESSION['success']);

            ?>
            </h3>

            </div>
            <?php endif ?>

            //if the user logs in print inforrmstion about him

            <?php if(isset($_SESSION['username'])) : ?>
            <h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>

            <button><a href = "index.php?logout='1'"></a></button>

            <?php endif ?>
        
        
        <script src="" async defer></script>
    </body>
</html>