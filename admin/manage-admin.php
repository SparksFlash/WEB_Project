<?php
session_start();
include('partials/menu.php'); ?>

<!-- Main Content Section -->
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Admin</h1>

        <br />



        <?php
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        if (isset($_SESSION['delete'])) {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }

        if (isset($_SESSION['update'])) {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
        ?>




        <br /><br /><br />


        <!-- Button for add an Admin -->
        <a href="add_Admin.php" class="button-primary">Add Admin</a>

        <br /><br /><br />

        <table class="table-full">
            <tr>
                <th>Sl. No.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>



            <?php

            $sql = "SELECT * FROM table_admin";
            $res = mysqli_query($conn, $sql);
            $sn = 1;

            if ($res == true) {
                $count = mysqli_num_rows($res);
                if ($count > 0) {
                    while ($rows = mysqli_fetch_assoc($res)) {
                        $id = $rows['id'];
                        $full_name = $rows['full_name'];
                        $username = $rows['username'];


            ?>
                        <tr>
                            <td><?php echo $sn++ ?></td>
                            <td><?php echo $full_name ?></td>
                            <td><?php echo $username ?></td>
                            <td>
                                <!-- passing the value with URL using get method -->
                                <a href="" class="button-primary">Change Password</a>
                                <a href="<?php echo SITEURL; ?>admin/update_Admin.php?id=<?php echo $id; ?>" class="button-secondary">Update Admin</a>
                                <a href="<?php echo SITEURL; ?>admin/delete_Admin.php?id=<?php echo $id; ?>" class="button-for-del">Delete Admin</a>
                            </td>
                        </tr>
            <?php

                    }
                } else {
                }
            }


            ?>

        </table>
    </div>
</div>
<!-- Main Content Section ends -->

<?php include('partials/footer.php'); ?>