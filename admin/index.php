<?php include('partials/menu.php'); ?>

<!-- Main Content Section -->
<div class="main-content">
   <div class="wrapper">
      <h1>DASHBOARD</h1>

      <br><br>
      <?php
      if (isset($_SESSION['login'])) {
         echo $_SESSION['login'];
         unset($_SESSION['login']);
      }
      ?>
      <br><br>

      <div class="col-4">
         <h1>5</h1>
         <br />
         Categories
      </div>

      <div class="col-4">
         <h1>5</h1>
         <br />
         Categories
      </div>

      <div class="col-4">
         <h1>5</h1>
         <br />
         Categories
      </div>

      <div class="col-4">
         <h1>5</h1>
         <br />
         Categories
      </div>

      <div class="clearfix"></div>
   </div>
</div>
<!-- Main Content Section ends -->

<?php include('partials/footer.php'); ?>