<?php

include('admin/class/function.php');

$obj= new adminblog();

 $getcat = $obj->manage_category();
 $getpost = $obj->despaly_post_public();

?>



<?php include_once('include/head.php'); ?>

<?php include_once('include/preloader.php'); ?>

    

    <!-- Header -->
    <?php include_once('include/header.php'); ?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
      <?php include_once('include/banner.php') ?>
    <!-- Banner Ends Here -->

   <?php include_once('include/app.php'); ?>


    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
                 <?php include_once('include/blog.php'); ?>
          </div>
          <div class="col-lg-4">
            <?php include_once('include/sidebar.php'); ?>
          </div>
        </div>
      </div>
    </section>

    
 <?php include_once('include/footer.php'); ?>