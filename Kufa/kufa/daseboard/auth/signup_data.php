<?php
session_start();
// require_once('../../db_connect.php');
require_once('../../db_connect.php');
$name = htmlspecialchars($_POST['user_name']);
$email = htmlspecialchars($_POST['user_email']);
$password = htmlspecialchars($_POST['user_password']);
$confirm_password = htmlspecialchars($_POST['user_confirm_password']);

// ********Query Code***********

$email_check_query = "SELECT * FROM admins WHERE email = '$email' ";
$email_check_db = mysqli_query($db_connect, $email_check_query);
$email_check_result = mysqli_fetch_assoc($email_check_db);

$flag = false;

 // **************Name****************

if ($name) {
    $remove_name_space = str_replace(" ", "", $name);
    if (ctype_alpha($remove_name_space)) {
        $_SESSION["old_name"] = $name;
    } else {
        $flag = true;
        $_SESSION['$name_error'] = 'Pease Enter Your Name';
    }
} else {
    $flag = true;
    $_SESSION['$name_error'] = 'name error';
}

// *************Email**********

if ($email) { 
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if ($email_check_result == 1) {
            (!$_SESSION['$email_error'] = 'email already exists ');
        $flag = true;
        }
        $_SESSION['old_email'] = $email;
    } else {
        $flag = true;
       ( !$_SESSION['$email_error'] = ' Pease Enter Your Email');
    }
} else {
    $flag = true;
    (!$_SESSION['$email_error'] = 'Email not valid');
}

// *********** Password**********

if ($password) {
    if (!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password)) {
        $flag = true;
        $_SESSION['$password_error'] = 'password not match';
    }
} else {
    $flag = true;
    $_SESSION['$password_error'] = 'Pease Enter Your Password';
}

// ***********Confirm Password**********

if ($confirm_password) {
    if (!($password === $confirm_password)) {
        $flag = true;
        $_SESSION['$confirm_password_error'] = 'confirm password not match';
    }
} else {
    $flag = true;
    $_SESSION['$confirm_password_error'] = 'Pease Enter Your Confirm Password';
}
if ($flag) {
    header('location:./sign.php');
// ********Query Code***********
} else { 
    $password_encode = sha1($password);
    $admin_query =  " INSERT INTO admins ( name, email, password) VALUES ('$name', '$email', '$password_encode')";
    mysqli_query($db_connect, $admin_query);
    $_SESSION['signin_status'] = "Hello $name";
    header('location: ./sign_in.php');
}
