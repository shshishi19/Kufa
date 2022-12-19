<?php
require_once('./dHeader.php');
?>

<div class="card">
    <div class="card-header">
        <h4 class="p-3">Add Your Services</h4>
    </div>
    <div class="card-body">
        <div class="example-container">
            <form action="./service_data.php" method="post">

                <?php
                if (isset($_SESSION['success'])) : ?>

                    <h4 class="alert alert-success text-center" role="alert"> <?= $_SESSION['success'] ?> </h4>

                <?php
                endif;
                unset($_SESSION['success']);
                ?>
                <div class="example-content">
                    <label for="service_title" class="form-label">Service Title</label>
                    <input name="service_title" type="text" class="form-control" id="service_title" placeholder="Service Title">
                </div>
                <div class="example-content">
                    <label for="service_icon" class="form-label">Service Icons </label>
                    <input readonly name="service_icon" type="text" class="form-control" id="icon_value">
                </div>
                <div class="example-content">
                    <div class=" card text-white bg-dark">
                        <div class="card-body" style="overflow-y: scroll ; height : 200px;">
                            <?php
                            require_once('./include/icons.php');
                            foreach ($fonts as $font) :   ?>
                                <span class="card-text mx-1 badge m-1 p-2" style="cursor: pointer;"><i class="<?= $font ?> fs-5 icon_click" id="<?= $font ?>" aria-hidden="true"></i></span>
                            <?php
                            endforeach
                            ?>

                        </div>
                    </div>
                </div>
                <div class="example-content">
                    <label for="service_description" class="form-label">Service Description</label>
                    <textarea class="form-control" name="service_description" id="service_description" cols="30" rows="10"></textarea>
                </div>
                <div class="example-content">
                    <label for="service_status" class="form-label">Service Status</label>
                    <select name="service_status" id="service_status" class="form-control">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="example-content">
                    <button class="btn btn-info ">Add Service</button>
                </div>

            </form>
        </div>
    </div>
</div>


<?php
require_once('./dFooter.php');
?>

<script>
    $(document).ready(function(){
       $('.icon_click').click(function(){
        $('#icon_value').val($(this).attr('id'));
        // alert($(this).attr('id'));
       })
    })
</script>

