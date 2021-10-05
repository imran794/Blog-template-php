


  <div class="all-blog-posts">
              <div class="row">
                <?php while($post= mysqli_fetch_assoc($getpost)) { ?>
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img  src="upload/<?php echo $post['post_image'] ?>" alt="">
                    </div>
                    <div class="down-content">
                      <span><?php echo $post['category_name']; ?></span>
                      <a href="singlepost.php?view=singlepost&&id=<?php echo $post['post_id'] ?>"><h4><?php echo $post['post_title']; ?></h4></a>
                      <ul class="post-info">
                        <li><a href="#"><?php echo $post['post_author'] ?></a></li>
                        <li><a href="#"><?php echo $post['post_date']; ?></a></li>
                        <li><a href="#"><?php echo $post['post_comment_count']; ?></a></li>
                      </ul>
                      <p><?php echo $post['post_summery']; ?></p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <?php echo $post['post_tags']; ?>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
        
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="blog.html">View All Posts</a>
                  </div>
                </div>
              </div>
            </div>