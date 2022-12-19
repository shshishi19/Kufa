<?php
session_start();
require_once('./db_connect.php');

$name = $_POST['name'];
$id = $_SESSION['auth_id'];
// $update = $_SESSION['update'];
// $change_password = $_SESSION['change_password'];


$flag = false;

// ***********Change Name**********


if (isset($_POST['update'])) {
    if ($name) {
        $remove_name_space = str_replace(" ", "", $name);
        if (!ctype_alpha($remove_name_space)) {
            $flag = true;
            $_SESSION['$name_error'] = 'Name Number Diso';
        }
    } else {
        $flag = true;
        $_SESSION['$name_error'] = 'Pease Enter Your New Name';
    }
}

// ***********Change Password**********

// update password section 
if (isset($_POST['update_pass'])) {
    $current_password = htmlspecialchars($_POST['current_password']) ;
    $new_password = htmlspecialchars($_POST['new_password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);
    if ($current_password) {
        $current_pass_check_query = "SELECT password FROM admins WHERE id = '$id'";
        $current_pass_check_db = mysqli_query($db_connect, $current_pass_check_query);
        $current_pass_check_result = mysqli_fetch_assoc($current_pass_check_db);
        if (sha1($current_password) === $current_pass_check_result['password']) {
            if ($new_password) {
                if (preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $new_password)) {
                    if ($current_password === $new_password) {
                        $flag = true;
                        $_SESSION['new_pass_error'] = "Old password and new password same";
                    } else {
                        if ($confirm_password) {
                            if ($new_password === $confirm_password) {
                                // password update query started 
                                $password_encode = sha1($new_password);
                                $chage_password_query = "UPDATE admins SET password = '$password_encode' WHERE id = '$id'";
                                $change_password_db = mysqli_query($db_connect, $chage_password_query);
                                $flag = true;
                                $_SESSION['pass_updated'] = "Password  Changed !";
                            } else {
                                $flag = true;
                                $_SESSION['con_pass_error'] = "New password and confirm password doesn't match";
                            }
                        } else {
                            $flag = true;
                            $_SESSION['con_pass_error'] = "Re enter your password";
                        }
                    }
                } else {
                    $flag = true;
                    $_SESSION['new_pass_error'] = "For stronger password you may use letter, number and symbol";
                }
            } else {
                $flag = true;
                $_SESSION['new_pass_error'] = "Please input your new passwod";
            }
        } else {
            $flag = true;
            $_SESSION['current_pass_error'] = "OLd password doesn't match";
        }
    } else {
        $flag = true;
        $_SESSION['current_pass_error'] = 'Please input your old password';
    }
}




// start upload pic section validation 

if (isset($_POST['update_profile'])) {
    if ($_FILES['profile_pic']['name'] != '') {
        $image_name = $_FILES['profile_pic']['name'];
        $explode_img_name = explode('.', $image_name);
        $extension = end($explode_img_name);
        $rand=rand(1,10);
        $new_img_name = $rand . '_' . $id . '.' . $extension;
        $temp_path = $_FILES['profile_pic']['tmp_name'];
        $file_path = './daseboard/upload/profile/' . $new_img_name;
        move_uploaded_file($temp_path, $file_path);

        // Image Update Query Start 

        $chage_profile_query = "UPDATE admins SET profile_pic = '$new_img_name' WHERE id = '$id'";
        $change_profile_db = mysqli_query($db_connect, $chage_profile_query);
        header('location:./daseboard/profile.php');
        $_SESSION['profile_updated'] = "Profile Picture Succesfully Uploaded !";
    } else {
        header('location:./daseboard/profile.php');
        $_SESSION['profile_updated_error'] = "Please Select Your Image!";
    }
}

// number Update Query Start 




if (isset($_POST['update_phone_number'])) {
    $phone_number = htmlspecialchars($_POST['phone_number']);
    if ($phone_number) {
        $update_number_query = "UPDATE admins SET phone_number = '$phone_number' WHERE id = '$id'";
        $update_number_db = mysqli_query($db_connect, $update_number_query);
        header('location:./daseboard/profile.php');
        $_SESSION['number_updated'] = "Phone Number updated successfully !";
    } else {
        $_SESSION['number_error'] = "Please enter your phone number";
        header('location:./daseboard/profile.php');
    }
}







// ***********Query**********

if ($flag) {
    header('location:./daseboard/profile.php');
} elseif (isset($_POST['update'])) {
    $name_update_query = "UPDATE admins SET name='$name' WHERE id='$id' ";
    $name_update_db = mysqli_query($db_connect, $name_update_query);
    $_SESSION['auth_name']  = $name;
    header('location:./daseboard/profile.php');
}
