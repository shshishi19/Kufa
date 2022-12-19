<?php 

session_start();
if (!isset($_SESSION['auth_id'])) {
        header('location:./opps.php');
}
require_once('../db_connect.php');

$explode = explode('/', $_SERVER['PHP_SELF']);
$page_name = end($explode);

// print_r($page_name);
// die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="./assets//plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets//plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="./assets/plugins/pace/pace.css" rel="stylesheet">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/af8acfa6da.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Theme Styles -->
    <link href="./assets//css/main.min.css" rel="stylesheet">
    <link href="./assets//css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="./assets//images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets//images/neptune.png" />


</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <?php 
                        $id = $_SESSION['auth_id'];
                        $pro_pic_query= "SELECT profile_pic FROM admins WHERE id='$id'";
                        $pro_query_db= mysqli_query($db_connect,$pro_pic_query);
                        $demo_img_name= mysqli_fetch_assoc($pro_query_db)['profile_pic'];
                        
                        ?>
                        <img src="./upload/profile/<?= $demo_img_name ?>">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text">  <?= $_SESSION['auth_name'] ?> <br> <?= $_SESSION['auth_email'] ?> </span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li class="<?= ($page_name == 'daseboard.php') ? 'active-page' : '' ?>">
                        <a href="./daseboard.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li class="<?= ($page_name == 'profile.php') ? 'active-page' : '' ?>">
                        <a href="./profile.php"><i class="material-icons-two-tone">face</i>Profile</a>
                    </li>
                    <li>
                        <a href="<?= ($page_name == 'service_add.php') ? 'active-page' : '' ?>"><i class="material-icons-two-tone">manage_accounts</i>Services<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="./service_add.php">Add Service</a>
                                <a href="./service_list.php">Service List</a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="<?= ($page_name == 'about_add.php') ? 'active-page' : '' ?>"><i class="material-icons-two-tone">person</i>About<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="./about_add.php">Add About</a>
                                <a href="./about_list.php">About List</a>
                            </li>
                           
                        </ul> 
                    </li>
                    <li>
                        <a href="<?= ($page_name == 'facts_add.php') ? 'active-page' : '' ?>"><i class="material-icons-two-tone">fact_check</i>Fact<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="./facts_add.php">Add Facts</a>
                                <a href="./facts_list.php">Facts List</a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="<?= ($page_name == '') ? 'active-page' : '' ?>"><i class="material-icons-two-tone">comment</i>Testimonial<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="./testimonial_add.php">Add Testimonial</a>
                                <a href="./testimonial_list.php">Testimonial  List</a>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="<?= ($page_name == 'social_links.php') ? 'active-page' : '' ?>">
                        <a href="./social_links.php"><i class="material-icons-two-tone">link</i>Social Link</a>
                    </li>
                  
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                        <li><a class="dropdown-item" href="#">New Workspace</a></li>
                                        <li><a class="dropdown-item" href="#">New Board</a></li>
                                        <li><a class="dropdown-item" href="#">Create Project</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons-outlined">explore</i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-lg large-items-menu" aria-labelledby="exploreDropdownLink">
                                        <li>
                                            <h6 class="dropdown-header">Repositories</h6>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune iOS
                                                    <span class="badge badge-warning">1.0.2</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune Android
                                                    <span class="badge badge-info">dev</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-btn-item d-grid">
                                            <button class="btn btn-primary">Create new repository</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
            
                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">

                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link  btn btn-info text-white" href="../fronend/index.php">Visit Site</a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link  btn btn-info text-white" href="./auth/sign_in.php">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">