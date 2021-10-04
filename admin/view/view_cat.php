<?php


if (isset($_POST['add_category'])) {

	$retun_msg = $obj->addcategory($_POST);
	
}

?>

<div class="card-header">
    <h3 class="text-center font-weight-light my-4">Add Category</h3>
</div>


<div class="card-body">
                      <?php
                           if (isset($retun_msg)) {
                           	echo $retun_msg;
                           }

                           ?>
    <form action="" method="POST">
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Category Name</label>
            <input class="form-control py-4" id="inputEmailAddress" name="category_name" type="text" placeholder="Category Name" />
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputPassword">Category Description</label>
            <textarea class="form-control" name="Category_des" placeholder="Category Description"></textarea>
        </div>

        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
            <input type="submit" name="add_category" value="Add Category" class="btn btn-primary">
        </div>
    </form>
</div>
