<?php
include('../config/constants.php');

$id = $_GET['id'];

$sql = "DELETE FROM table_admin WHERE id=$id";
$res = mysqli_query($conn, $sql);

if ($res == true) {
    echo "Admin Deleted";
} else {
    echo "Failed to Delete Admin";
}
