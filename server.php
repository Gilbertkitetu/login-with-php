<?php

session_start();

$username = "";
$email = "";

$errors = array();

//Connect to database
$db = mysqli_connect('localhost', 'root', '', 'phpmysql') or die("could not connect to database");

//Register users

$username = mysqli_real_escape_string($db, $_POST['username']);
$email =  mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 =  mysqli_real_escape_string($db, $_POST['password_2']);

//Form validation

if (empty($username)) {array_push($errors, "Username is required")};
if (empty($email)) {array_push($errors, "Email is required")};
if (empty($password_1)) {array_push($errors, "Password is required")};
if ($password_1 != $password_2){array_push($errors, "Passwords do not match")};

//Check db for existing user with same username
$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if(user) {
    if($user['username'] === $username){array_push($errors, "Username already exists");}
    if($user['email'] === $email){array_push($errors, "Email has already been used");}
}

//register user if not errors
if(count($errors) == 0){
    $password = md5($password_1); //this will encrypt the password
    $query = "INSERT INTO user (username, email, pass) VALUES ('$username', '$email', '$password')";

    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";

    header('location: index.php');
} 

?>
