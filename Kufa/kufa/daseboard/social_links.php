<?php
require_once('./dHeader.php');
require_once('../db_connect.php');

?>

<div class="card">
    <div class="card-header">
        <h4 class="p-3">Social link </h4>
    </div>
    <div class="card-body">
        

    <?php
                    if (isset($_SESSION['link_success'])) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <h5 class="text-light mt-3"><?= $_SESSION['link_success'] ?></h5>
                        </div>

                    <?php
                    }
                    unset($_SESSION['link_success']);
                    ?>

                    <?php
                    if (isset($_SESSION['link_error'])) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <h5 class="text-light mt-3"><?= $_SESSION['link_error'] ?></h5>
                        </div>

                    <?php
                    }
                    unset($_SESSION['link_error']);
                    ?>
        <div class="example-container">
            <form action="./social_data.php" method="post" enctype="multipart/form-data">

                <?php
                $id = $_SESSION['auth_id'];
                $social_link_query = "SELECT * FROM admins WHERE id = $id";
                $social_link_db = mysqli_query($db_connect, $social_link_query);
                $social_link = mysqli_fetch_assoc($social_link_db);
                ?>
                <div class="row mb-3">
                    <label for="facebook" class="col-form-label">Facebook</label>
                    <div>
                        <input type="url" placeholder="Input Your Facebook Link" class="form-control" id="facebook" name="facebook_link" value="<?= $social_link['facebook'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="twitter" class="col-form-label">Twitter</label>
                    <div>
                        <input type="url" placeholder="Input Your Twitter Link" class="form-control" id="twitter" name="twitter_link" value="<?= $social_link['twitter'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="instagram" class="col-form-label">Instagram</label>
                    <div>
                        <input type="url" placeholder="Input Your Instagram Link" class="form-control" id="instagram" name="instagram_link" value="<?= $social_link['twitter'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="linkedin" class="col-form-label">Linked in</label>
                    <div>
                        <input type="url" placeholder="Input Your Linked in Link" class="form-control" id="linkedin" name="linkedin_link" value="<?= $social_link['linkedin'] ?>">
                    </div>
                </div>
                <div class="example-content">
                    <button type="submit" class="btn btn-primary">Update Links</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
require_once('./dFooter.php');
?>