<?php


 $posts =  $obj->despaly_post()



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
                         <td>Title</td>
                         <td>Content</td>
                         <td>Image</td>
                         <td>Author</td>
                         <td>Date</td>
                         <td>Category</td>
                         <td>Status</td>
                         <td>Action</td>
                     </tr>

                     <?php while ($post= mysqli_fetch_assoc($posts)) { ?>
                     <tr>
                         <td><?php echo $post['post_id']; ?></td>
                         <td><?php echo $post['post_title']; ?></td>
                         <td><?php echo $post['post_content']; ?></td>
                         <td>
                         	<img width="150" src="../upload/<?php echo $post['post_image'] ?>" alt="">
                         </td>
                         <td><?php echo $post['post_author']; ?></td>
                         <td><?php echo $post['post_date']; ?></td>
                         <td><?php echo $post['category_name']; ?></td>
                         <td><?php echo $post['post_status']; ?></td>
                         <td>
                             <a href="" class="btn btn-primary" title="">Edit</a>
                             <a href="" title="" class="btn btn-danger">Delete</a>
                         </td>
                     </tr>
                     <?php } ?>
                 </thead>
             </table>
         </div>
     </div>
 </div>
