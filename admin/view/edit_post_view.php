<?php

  $category = $obj->manage_category();

 if (isset($_GET['status'])) {
     if ($_GET['status'] == 'editpost') {
        $id = $_GET['id'];
       $postdata = $obj->geteditvalue($id);
     }
 }

 if (isset($_POST['edit_post'])) {
   $msg =   $obj->poststore($_POST);
     
 }



?>

<div class="card-header">
    <h3 class="text-center font-weight-light my-4">Update Post</h3>
</div>


<div class="card-body">
      <form action="" method="POST">
        <input type="hidden" name="post_edit_id" value="<?php echo $postdata['post_id'] ?>">
        <?php if(isset($msg)){echo $msg;} ?>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Post Title</label>
            <input class="form-control py-4" value="<?php echo $postdata['post_title']; ?>" id="inputEmailAddress" name="post_title" type="text" placeholder="Post Title" />
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputPassword">Post Content</label>
            <textarea rows="5" class="form-control" name="post_content" placeholder="Post Content"><?php echo $postdata['post_content'] ?></textarea>
        </div>
              <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Select Category Name </label>
           <select name="post_ctg" class="form-control">
                <?php while($cat= mysqli_fetch_assoc($category)){ ?>
                <option value="<?php echo $cat['cat_id'] ?>" <?php $postdata->$cat['cat_id'] == 'id' ? 'selecetd' : '' ?> ><?php echo $cat['category_name'] ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Post Summery</label>
            <input class="form-control py-4" value="<?php echo $postdata['post_summery'] ?>" id="inputEmailAddress" name="post_summery" type="text" placeholder="Post Summery" />
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Post Tags</label>
            <input class="form-control py-4" value="<?php echo $postdata['post_tags'] ?>" id="inputEmailAddress" name="post_tags" type="text" placeholder="Post Tags" />
        </div>
         <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Select Post Status </label>
            <select name="post_status" class="form-control"> <?php ($postdata->post_status == 1 ) ? 'selecetd' : '' ?>>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
            </select>
        </div>

        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
            <input type="submit" name="edit_post" value="Update Post" class="btn btn-primary">
        </div>
    </form>
</div>
