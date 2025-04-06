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


            <tr>
                <td>1.</td>
                <td>Sourav</td>
                <td>SparksFlash</td>
                <td>
                    <a href="#" class="button-secondary">Update Admin</a>
                    <a href="#" class="button-for-del">Delete Admin</a>
                </td>
            </tr>

            <tr>
                <td>2.</td>
                <td>Sourav</td>
                <td>SparksFlash</td>
                <td>
                    <a href="#" class="button-secondary">Update Admin</a>
                    <a href="#" class="button-for-del">Delete Admin</a>
                </td>
            </tr>

            <tr>
                <td>3.</td>
                <td>Sourav</td>
                <td>SparksFlash</td>
                <td>
                    <a href="#" class="button-secondary">Update Admin</a>
                    <a href="#" class="button-for-del">Delete Admin</a>
                </td>
            </tr>
        </table>
    </div>
</div>
<!-- Main Content Section ends -->

<?php include('partials/footer.php'); ?>