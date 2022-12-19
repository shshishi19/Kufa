<?php
require_once('./dHeader.php');

?>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">Facts List</h5>
    </div>
    <div class="card-body">
        <div class="example-container">
            <div class="example-content">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Serial</th>
                            <th scope="col">Facts Icon</th>
                            <th scope="col">Facts Count</th>
                            <th scope="col">Facts Title</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $facts_list_query = "SELECT * FROM facts ";
                        $facts_list_query_db = mysqli_query($db_connect, $facts_list_query);
                        $serial = 1;
                        foreach ($facts_list_query_db as  $fact) : ?>
                            <tr>
                                <th scope="row"><?= $serial++ ?></th>
                                <td class="text-center">
                                    <span class="badge badge-info p-3 ">
                                        <i class="<?= $fact['facts_icon'] ?> fs-5" aria-hidden="true">
                                        </i>
                                    </span>
                                </td>
                                <td><?= $fact['facts_count'] ?></td>
                                <td><?= $fact['facts_title'] ?></td>

                                <td>
                                    <a href="./facts_delete.php?id=<?= $fact['id'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>







<?php
require_once('./dFooter.php');

?>