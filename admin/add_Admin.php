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
if (isset($_POST['submit'])) {  // $_POST contains an array of variables received via the HTTP POST method.
    //echo "Button Clicked";
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);


    $sql = "INSERT INTO table_admin SET
    full_name = '$full_name',
    username =  '$username',
    password = '$password'
    ";

    //echo $sql;




    $res = mysqli_real_query($conn, $sql) or die(mysqli_error($conn));
    if ($res == true) {
        echo "Data Inserted";
    } else {
        echo "Failed To Insert Data";
    }
}
?>