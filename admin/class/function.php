<?php


   class adminblog
   {

    private $conn;

     
     public function __construct()
     {
         #database name , database user , database password, database name


        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'blogproject';


        $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

        if (!$this->conn) {
          die('Database connection Error!!');
        }
     }

        public function admin_login($data)
       {
           $admin_email = $data['admin_email'];
           $admin_pass  = md5($data['admin_pass']);



           $query = "SELECT * FROM admin_info WHERE admin_email='$admin_email' && admin_pass='$admin_pass'";

           if (mysqli_query($this->conn, $query)) {
              $admin_info = mysqli_query($this->conn, $query);

              if ($admin_info) {
                header('location:dashboard.php');

                $admin_data = mysqli_fetch_assoc($admin_info);

                 Session_start();

                $_SESSION['adminID'] = $admin_data['id'];
                $_SESSION['admin_name'] = $admin_data['admin_name'];
              }
           }
       } 


       public function adminlogout()
       {
          unset($_SESSION['adminID']);
          unset($_SESSION['admin_name']);
          header('location: index.php');
       }

       public function addcategory($data)
       {
           $category_name = $data['category_name'];
           $Category_des  = $data['Category_des'];

           $query = "INSERT INTO  category(category_name,Category_des) VALUE('$category_name','$Category_des')";

           if (mysqli_query($this->conn, $query)) {
              return 'Category Added Successfully!';
           }
       }


       public function manage_category()
       {
            $query = "SELECT * FROM category";
            if (mysqli_query($this->conn, $query)) {
               $category = mysqli_query($this->conn, $query);
               return $category;
            }
       }

       public function category_delete($id)
       {
          $query = "DELETE FROM category WHERE cat_id=$id";
          if (mysqli_query($this->conn, $query)) {
             return 'Category Delete Successfully!';
          }
       }

       public function add_post($data)
       {
          $post_title = $data['post_title'];
          $post_content = $data['post_content'];
          $post_image = $_FILES['post_image']['name'];
          $post_img_tmp = $_FILES['post_image']['tmp_name'];
          $post_ctg = $data['post_ctg'];
          $post_summery = $data['post_summery'];
          $post_tags = $data['post_tags'];
          $post_status = $data['post_status'];

          $query = "INSERT INTO post(post_title,post_content,post_image,post_ctg,post_author,post_date,post_comment_count,post_summery,post_tags,post_status) VALUES('$post_title','$post_content','$post_image','$post_ctg','Admin',now(),3,'$post_summery','$post_tags','$post_status')";

          if (mysqli_query($this->conn, $query)) {
              move_uploaded_file($post_img_tmp, '../upload/'.$post_image);
              return 'Post Added Successfully!';
          }
       }

       public function despaly_post()
       {
          $query = "SELECT * FROM post_with_category";
          if (mysqli_query($this->conn ,$query)) {
             $post = mysqli_query($this->conn ,$query);

             return $post;
          }
       } 

       public function despaly_post_public()
       {
          $query = "SELECT * FROM post_with_category WHERE post_status=1";
          if (mysqli_query($this->conn ,$query)) {
             $post = mysqli_query($this->conn ,$query);

             return $post;
          }
       }
   }


?>
