<?php
require_once('./dHeader.php');
?>


<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Profile</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body ">
                    <div class="example-content">

                        <form action="../profile_data.php" method="post" enctype="multipart/form-data">


                            <label for="" class="col-form-label">Name</label>
                            <div class="input-group mb-3">

                                <input type="text" class="form-control" name="name" value=" <?= $_SESSION['auth_name']   ?>">

                            </div>
                            <h5 class="text-center">
                                <?php
                                if (isset($_SESSION['$name_error'])) { ?>
                                    <h5 class="text-danger"><?= $_SESSION['$name_error']; ?></h5>
                                <?php
                                }
                                unset($_SESSION['$name_error'])

                                ?>
                            </h5>
                            <button type="submit" class="btn btn-info" name="update">Change Your Name</button>


                            <hr>

                            <br>
                            
<!-- change password field  -->
<h5 class="text-center bg-info text-white p-2">Change Password</h5>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-form-label">Curennt Password</label>
                            <div>
                                <input type="password" class="form-control" id="inputPassword3" name="current_password">
                            </div>
                            <?php
                            if (isset($_SESSION['current_pass_error'])) { ?>
                                <p class="text-danger"><?= $_SESSION['current_pass_error'] ?></p>
                            <?php
                            }
                            unset($_SESSION['current_pass_error']);
                            ?>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword4" class="col-form-label">New Password</label>
                            <div>
                                <input type="password" class="form-control" id="inputPassword4" name="new_password">
                            </div>
                            <?php
                            if (isset($_SESSION['new_pass_error'])) { ?>
                                <p class="text-danger"><?= $_SESSION['new_pass_error'] ?></p>
                            <?php
                            }
                            unset($_SESSION['new_pass_error']);
                            ?>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword5" class="col-form-label">Confirm Password</label>
                            <div>
                                <input type="password" class="form-control" id="inputPassword5" name="confirm_password">
                            </div>
                            <?php
                            if (isset($_SESSION['con_pass_error'])) { ?>
                                <p class="text-danger"><?= $_SESSION['con_pass_error'] ?></p>
                            <?php
                            }
                            unset($_SESSION['con_pass_error']);
                            ?>
                        </div>
                        <?php
                                if (isset($_SESSION['pass_updated'])) { ?>
                                    <h4 class="text-success text-center mt-3 "><?= $_SESSION['pass_updated'] ?></h4>
                                <?php
                                }
                                unset($_SESSION['pass_updated']);
                                ?>
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary" name="update_pass">Change Password</button>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-6">
                               
                            </div>
                        </div>
                        <hr>

                            <hr>
                            <br>
                    



                            <!-- upload profile part  -->


                            <h5 class="bg-info text-white p-2">Upload Your Profile Picture</h5>
                            <div class="row mb-3">
                                <label for="name" class="col-form-label">Upload Your Profile</label>
                                <div class="col-8">
                                    <div>
                                        <input type="file" class="form-control" id="name" name="profile_pic" value="<?= $_SESSION['auth_name'] ?>">
                                    </div>
                                    <?php
                                    if (isset($_SESSION['profile_updated_error'])) { ?>
                                        <p class="text-danger"><?= $_SESSION['profile_updated_error'] ?></p>
                                    <?php
                                    }
                                    unset($_SESSION['profile_updated_error']);
                                    ?>
                                </div>

                                <div class="col-4 text-center">
                                    <button type="submit" class="btn btn-primary" name="update_profile">Upload Photo</button>
                                </div>
                                <div>
                                    <?php
                                    if (isset($_SESSION['profile_updated'])) { ?>
                                        <h5 class="text-dark mt-3 text-center"><?= $_SESSION['profile_updated'] ?></h5>
                                    <?php
                                    }
                                    unset($_SESSION['profile_updated']);
                                    ?>
                                </div>
                            </div>
                            <hr>
                                                <!-- Phone Number -->


                            <h5 class=" bg-info text-white p-2">Upload Your Phone Number</h5>
                            <div class="row mb-3">
                                <label for="number" class="col-form-label">Input Your Phone Number</label>
                                <div class="col-8">
                                    <div>
                                        <input type="tel" class="form-control" id="number" name="phone_number" value="">
                                    </div>
                                    <?php
                                    if (isset($_SESSION['number_error'])) { ?>
                                        <p class="text-danger"><?= $_SESSION['number_error'] ?></p>
                                    <?php
                                    }
                                    unset($_SESSION['number_error']);
                                    ?>
                                </div>
                                <div class="col-4">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary " name="update_phone_number">Add Number</button>
                                    </div>
                                </div>
                                <?php
                                if (isset($_SESSION['number_updated'])) { ?>
                                    <h5 class="text-dark mt-3 text-center"><?= $_SESSION['number_updated'] ?></h5>
                                <?php
                                }
                                unset($_SESSION['number_updated']);
                                ?>
                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once('./dFooter.php');
    ?>

</div>