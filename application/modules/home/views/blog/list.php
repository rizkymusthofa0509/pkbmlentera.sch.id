 
    

    <!--Member Section Start-->
    <div class="blog-page page-space">
      <div class="container">
        <div class="blog-posts">
          <div class="row">
              <?php
                foreach ($blogs->result() as $blog) {
                    ?>
                        <div class="col-lg-4 col-md-6">
                            <!--Blog Post Item Start-->
                            <div class="blog-item">
                                <div class="blog-thumb">
                                <a href="<?= base_url() ?>home/blog/detail/<?= $blog->id ?>"><img src="<?= base_url() ?>assets/blog/<?= $blog->file ?>" alt="Image"/></a>
                                </div>
                                <div class="blog-info p-3 bg-bglight">
                                <div class="blog-title">
                                    <a href="<?= base_url() ?>home/blog/detail/<?= $blog->id ?>"><h4><?= $blog->title ?></h4></a>
                                </div>
                                <div class="more-button mt-3">
                                    <a href="<?= base_url() ?>home/blog/detail/<?= $blog->id ?>" class="btn btn-outline-primary"
                                    >Read More</a
                                    >
                                </div>
                                </div>
                            </div>
                            <!--Blog Post Item End-->
                        </div>
                    <?php
                }
              ?>
            
            
          </div>
        </div>
      </div>
    </div>
    <!--Member Section End-->
 
