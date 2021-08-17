

<!--Banner Start-->
<div class="banner-area">
    <!--Banner Item Start-->
    <div class="banner-item page-banner page-banner-bg overlay">
        <div class="container">
            <div class="banner-title text-center">
                <h2><?= $blog['title'] ?></h2>
            </div>
            <div class="site-breadcrumb">
                <ul>
                    <li><a href="<?= base_url() ?>">Blog</a></li>
                    <li><?= $blog['title'] ?></li>
                </ul>
            </div>
        </div>
    </div>
    <!--Banner Item End-->
</div>
<!--Banner End-->

<!--Member Section Start-->
<div class="blog-page page-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-single">
                    <!--Blog Post Item Start-->
                    <div class="blog-item single-post">
                        <div class="blog-thumb">
                            <img src="<?= base_url() ?>temp/home/img/courses/1.jpg" style="width:100%;" alt="Image">
                        </div>
                        <div class="blog-info mtb-15">
                            <div class="blog-meta">
                                <span><i class="fas fa-folder"></i> <?= $blog['created_by'] ?></span>
                                <span><i class="fas fa-calendar-alt"></i> <?= date_indo($blog['created_at']) ?></span>
                            </div>
                            <div class="blog-title">
                                <h4><?= $blog['title'] ?></h4>
                            </div>
                            <div class="blog-content">
                                <?= $blog['description'] ?>
                            </div>
                            <!-- <div class="post-tags">
                                <h4>Tags:</h4>
                                <ul class="tags">
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Website</a></li>
                                    <li><a href="#">Article</a></li>
                                    <li><a href="#">Development</a></li>
                                </ul>
                            </div> -->
                            
                        </div>
                    </div>
                    <!--Blog Post Item End-->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <!--Sidebar Widget Start-->
                    <div class="sidebar-widget widget">
                        <div class="search">
                            <form action="<?= base_url() ?>" method="POST">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari berita">
                                    <div class="input-group-append">
                                        <button class="btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>                                      
                            </form>
                        </div>
                    </div>
                    <!--Sidebar Widget End-->
                    <!--Sidebar Widget Start-->
                    <div class="sidebar-widget widget p-4 border">
                        <h4 class="widget-title">Latest Posts</h4>
                        <div class="recent-posts">
                            <ul>
                                <?php
                                $no=1;
                                foreach ($blogs->result() as $list) {
                                    if (($list->id!=$blog['id']) AND ($no<=10)){ 
                                    ?>
                                    <li class="post-item">
                                        <div class="post-thumb">
                                            <a href="<?= base_url() ?>home/blog/detail/<?= $list->id ?>"><img src="<?= base_url() ?>assets/blog/<?= $list->file ?>" alt="Image"></a>
                                        </div>
                                        <div class="post-info">
                                            <div class="post-title">
                                                <a href="<?= base_url() ?>home/blog/detail/<?= $list->id ?>">
                                                    <h4><?= $list->title ?></h4>
                                                </a>
                                            </div>
                                            <div class="post-meta">
                                                <span><i class="fas fa-calendar-alt"></i> <?= date_indo($list->created_at) ?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                    }
                                    $no++;
                                }
                                ?>
                                 
                            </ul>
                        </div>
                    </div>
                    <!--Sidebar Widget End-->
                     
                </div>
            </div>
        </div>
    </div>
</div>
<!--Member Section End-->
