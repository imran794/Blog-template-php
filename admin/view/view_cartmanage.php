 <?php

  $catdata = $obj->manage_category();

  if (isset($_GET['status'])) {
  	 if ($_GET['status'] == 'delete') {
  	 	$delid = $_GET['id'];
	  $masg =  $obj->category_delete($delid);
  	 }
  }

  

 ?>

 <div class="container">
     <div class="row">
         <div class="col-lg-12">

             <?php if (isset($masg)) {
 	echo $masg;
 } ?>

             <table class="table">
                 <thead>

                     <tr>
                         <td>ID</td>
                         <td>Category Name</td>
                         <td>Category Description</td>
                         <td>Action</td>
                     </tr>

                     <?php while ($cat= mysqli_fetch_assoc($catdata)) { ?>
                     <tr>
                         <td><?php echo $cat['cat_id']; ?></td>
                         <td><?php echo $cat['category_name']; ?></td>
                         <td><?php echo $cat['Category_des']; ?></td>
                         <td>
                             <a href="" class="btn btn-primary" title="">Edit</a>
                             <a href="?status=delete&&id=<?php echo $cat['cat_id']; ?>" title="" class="btn btn-danger">Delete</a>
                         </td>
                     </tr>
                     <?php } ?>
                 </thead>
             </table>
         </div>
     </div>
 </div>
