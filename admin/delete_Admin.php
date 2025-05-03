<?php
include('../config/constants.php');

$id = $_GET['id'];

$sql = "DELETE FROM table_admin WHERE id=$id";
$res = mysqli_real_query($conn, $sql) or die(mysqli_error($conn));
//$res = mysqli_query($conn, $sql);


if ($res == true) {
    $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully</div>";       //session variable not working!!
    header('location:' . SITEURL . 'admin/manage-admin.php');
} else {
    $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin. Try Again Later.</div>";
    header('location:' . SITEURL . 'admin/manage-admin.php');
}
