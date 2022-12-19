<?php
require_once('../db_connect.php');
$id=$_GET['id'];

$service_query ="DELETE FROM services WHERE id=$id ";
$service_delete_query_db = mysqli_query($db_connect, $service_query);

header('location:./service_list.php');








?>