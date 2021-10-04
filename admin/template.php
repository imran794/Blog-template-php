<?php

include('class/function.php');


 Session_start();

 $id =  $_SESSION['adminID'];
 $obj = new adminblog();

 if ($id == null) {
     header('location: index.php');
 }

 if (isset($_GET['adminlogout'])) {
     if ($_GET['adminlogout'] == 'logout') {
         $obj-> adminlogout();
     }
 }

?>

<?php include_once('includes/header.php'); ?>

<body class="sb-nav-fixed">
    <?php include('includes/topnav.php'); ?>
    <div id="layoutSidenav">
        <?php include('includes/sidebar.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="contriner-fluid">
                    <?php

                            if(isset($view)){
                                if ($view == 'dashboard') {
                                    include('view/view_dash.php');
                                }
                                elseif($view == 'AddCategory'){
                                  include('view/view_cat.php');
                                }
                                elseif($view == 'ManageCategory'){
                                  include('view/view_cartmanage.php');
                                }
                                elseif($view == 'Post'){
                                    include('view/view_post.php');
                                }
                                elseif($view == 'ManagePost'){
                                    include('view/view_postmanage.php');

                                }

                            }

                        ?>
                </div>
            </main>
            <?php include('includes/dashfooter.php'); ?>
        </div>
    </div>

    <?php include_once('includes/footer.php') ?>
