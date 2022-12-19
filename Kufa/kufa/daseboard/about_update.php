<?php
require_once('./dHeader.php');

$id = $_GET['id'];
$about_query = "SELECT * FROM `about` WHERE id=$id";
$about_connect_db = mysqli_query($db_connect, $about_query);
$about_result = mysqli_fetch_assoc($about_connect_db);
?>


<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Edit About</h5>
            </div>
            <div class="card-body">
                
                <form action="./about_update_data.php" method="post">
                    <div class="example-container">
                        <input type="number" hidden name="id" id="" value="<?=$about_result['id']?>">

                        <div class="example-content">
                            <label for="about_me">About Me</label>

                            <textarea class="form-control form-control-rounded m-b-sm" name="about_me" id="about_me" cols="30" rows="4"><?=$about_result['about_me']?></textarea>
                        </div>

                        <div class="example-content">
                            <label for="skil_icon">Skill Icon</label>

                            <input readonly type="text" class="form-control form-control-rounded m-b-sm " id="skil_icon" name="skil_icon">
                            <?php
                            if (isset($_SESSION['icon_error'])) { ?>
                                <p class="text-danger"><?= $_SESSION['icon_error'] ?></p>
                            <?php
                            }
                            unset($_SESSION['icon_error']);
                            ?>
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
                            <label for="skill_title">Skill Title</label>
                            <input type="text" class="form-control form-control-rounded m-b-sm" id="skill_title" placeholder="Education Title" name="skill_title" value="<?=$about_result['skill_title']?>">
                        </div>
                        <div class="example-content">
                            <label for="skill_persent">Skill Persentage</label>
                            <input type="number" class="form-control form-control-rounded m-b-sm" id="skill_persent" value="<?=$about_result['skill_persent']?>" name="skill_persent" >
                        </div>
                        <div class="example-content ">
                            <button class="btn btn-primary " name="add_skill">Update skills</button>
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
            $('#skil_icon').val($(this).attr('id'));
        })
    })
</script>