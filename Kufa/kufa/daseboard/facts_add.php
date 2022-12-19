<?php
require_once('./dHeader.php');
?>


<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Your Facts</h5>
            </div>
            <div class="card-body">
                <?php
                if (isset($_SESSION['facts_success'])) { ?>
                    <div class="alert alert-success text-center">
                        <strong><?= $_SESSION['facts_success'] ?></strong>
                    </div>
                <?php
                }
                unset($_SESSION['facts_success']);
                ?>
                <?php
                if (isset($_SESSION['facts_error'])) { ?>
                    <div class="alert alert-warning text-center">
                        <strong><?= $_SESSION['facts_error'] ?></strong>
                    </div>
                <?php
                }
                unset($_SESSION['facts_error']);
                ?>
                <form action="./facts_add_data.php" method="post">
                    <div class="example-container">
                    <div class="example-content">
                    <label for="service_icon" class="form-label">Service Icons </label>
                    <input readonly name="facts_icon" type="text" class="form-control" id="icon_value">
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
                            <label for="facts_count">Facts Count</label>
                            <input type="number" class="form-control form-control-rounded m-b-sm" id="facts_count" placeholder="Facts Count" name="facts_count">
                        </div>
                        <div class="example-content">
                            <label for="facts_title">Facts Title</label>
                            <input type="text" class="form-control form-control-rounded m-b-sm" id="facts_title" placeholder="Facts Title" name="facts_title">
                        </div>
                        <div class="example-content ">
                            <button class="btn btn-primary " name="add_facts">Add Facts</button>
                        </div>
                    </div>
                </form>
            </div>
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

