<?php

$category = $obj->manage_category();

if (isset($_POST['add_post'])) {
	$mag = $obj->add_post($_POST);
}

?>


<div class="card-header">
    <h3 class="text-center font-weight-light my-4">Add Post</h3>
</div>


<div class="card-body">
             <?php if (isset($mag)) {
             	echo $mag;
             } ?>
    <form action="" method="POST" enctype='multipart/form-data'>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Post Title</label>
            <input class="form-control py-4" id="inputEmailAddress" name="post_title" type="text" placeholder="Post Title" />
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputPassword">Post Content</label>
            <textarea class="form-control" name="post_content" placeholder="Post Content"></textarea>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Post Image</label><br>
            <input  id="inputEmailAddress" name="post_image" type="file" />
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Select Category Name </label>
            <select name="post_ctg" class="form-control">
            	<?php while($cat= mysqli_fetch_assoc($category)){ ?>
            	<option value="<?php echo $cat['cat_id'] ?>"><?php echo $cat['category_name'] ?></option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Post Summery</label>
            <input class="form-control py-4" id="inputEmailAddress" name="post_summery" type="text" placeholder="Post Summery" />
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Post Tags</label>
            <input class="form-control py-4" id="inputEmailAddress" name="post_tags" type="text" placeholder="Post Tags" />
        </div>
         <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Select Post Status </label>
            <select name="post_status" class="form-control">
            	<option value="1">Published</option>
            	<option value="0">Unpublished</option>
            </select>
        </div>

        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
            <input type="submit" name="add_post" value="Add Post" class="btn btn-primary">
        </div>
    </form>
</div>