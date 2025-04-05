<?php include('partials/menu.php'); ?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>


        <br><br>

        <form action="" method="POST">
            <table class="table-30">

                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                </tr>

                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="Your Username"></td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Your Password"></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="button-secondary">
                    </td>
                </tr>

            </table>
        </form>



    </div>
</div>




<?php include('partials/footer.php'); ?>













<?php
if (isset($_POST['submit'])) {  // 1. $_POST contains an array of variables received via the HTTP POST method.
    //echo "Button Clicked";
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //2
    $sql = "INSERT INTO table_admin SET
    full_name = '$full_name',
    username =  '$username',
    password = '$password'
    ";

    //echo $sql;



    //3
    $res = mysqli_real_query($conn, $sql) or die(mysqli_error($conn));


    //4 check
    if ($res == true) {
        echo "Data Inserted";
        // Create a session variable to display message
        $_SESSION['add'] = "Admin Added Successfully";
        //redirect to manage admin
        header("location" . SITEURL . 'admin/manage-admin.php');
    } else {
        echo "Failed To Insert Data";
        // Create a session variable to display message
        $_SESSION['add'] = "Failed to Add Admin";
        //redirect to manage admin
        header("location" . SITEURL . 'admin/add_admin.php');
    }
}
?>