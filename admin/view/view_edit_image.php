<?php


if (isset($_GET['status'])) {
     if ($_GET['status'] == 'edit_img') {
         $id = $_GET['id'];
     }
}

if (isset($_POST['change_img_btn'])) {
    $msg =  $obj->editimage($_POST);
}



?>



<div class="shadow m-5 p-5">
<div class="card-body">                 
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="edit_data" value="<?php echo $id ?>">
        <?php if(isset($msg)){echo $msg;} ?>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Change Image</label><br>
            <input id="inputEmailAddress" name="change_img" type="file" placeholder="Change Image" />
        </div>

        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
            <input type="submit" name="change_img_btn" value="Change Image" class="btn btn-primary">
        </div>
    </form>
</div>
</div>