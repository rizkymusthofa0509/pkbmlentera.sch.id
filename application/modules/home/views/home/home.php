<!--Banner Start-->
<div class="banner-area position-relative">
    <!--Banner Item Start-->
    <div class="banner-item banner-bg overlay">
    <div class="container">
        <div class="banner-title text-center">
        <h2><?= webinfo('school_name') ?></h2>
        </div>
        <div class="description">
        <p class="text-light text-center">
            <?= webinfo('description') ?>
        </p>
        </div>
        <div class="banner-btn text-center">
        <a href="<?= base_url() ?>register" class="btn btn-primary"><i class="fa fa-desktop"></i> Registrasi</a> 
        </div>
    </div>
    </div>
    <!--Banner Item End-->

    <!--Search Box Start-->
     
    <!--Search Box End-->
</div>
<!--Banner End--> 
<!--Popular Courses Start-->
<div class="popular-courses bg-bglight pb-50 pt-125">
    <div class="shapes">
    <div></div>
    <div></div>
    </div>
    <div class="container">
    <div class="sc-title text-center">
        <h4 class="text-primary">Artikel</h4>
        <div class="line bg-secondary mt-3 mb-3 ml-auto mr-auto"></div>
        <h2 class="text-secondary">Blogs</h2>
    </div>
    <div class="courses">
        <div class="row">
            <?php
            $no=1;
            foreach ($blogs->result() as $blog) {
                if ($no<=3){

                
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!--Course Item Start-->
                    <div class="course-item">
                        <div class="thumb">
                        <img src="<?= base_url() ?>assets/blog/<?= $blog->file ?>" alt="Image" style="width:100%;height:300px;" /> 
                        </div>
                        <div class="course-info bg-light p-3">
                        <div class="meta">
                            <span class="author"
                            ><i class="fas fa-chalkboard-teacher"></i> <?= $blog->created_by ?></span
                            >
                            <span class="enrolled"
                            ><i class="fas fa-calendar"></i> <?= date_indo($blog->created_at) ?></span
                            >
                        </div>
                        <div class="title">
                            <a href="<?= base_url() ?>home/blog/detail/<?= $blog->id ?>"><h4><?= $blog->title ?></h4></a>
                        </div>
                        <div class="description">
                            <p>
                            <?= substr($blog->description,0,100); ?>
                            </p>
                        </div>
                        <div class="course-btn">
                            <a href="<?= base_url() ?>home/blog/detail/<?= $blog->id ?>" class="btn btn-secondary">Read more</a>
                        </div>
                        </div>
                    </div>
                    <!--Course Item End-->
                </div>
                <?php
                }
                $no++;
            }
            ?>
        
        
            
        
        </div>
    </div>
    </div>
</div>
<!--Popular Courses End--> 
<!--Facilities Section Start-->
<div class="facilities">
    <div class="fac-content-wrap">
    <div class="fac-content mt-5 mb-5">
        <div class="sc-title">
        <h2 class="text-white"><?= webinfo('school_name') ?></h2>
        <div class="line bg-light mt-3 mb-3"></div>
        <p class="description text-white">
            <?= webinfo('description') ?> 
        </p>
        </div>
        <div class="facility-list light">
            <div class="row">
            <h3 class="text-light">Visi</h3>
            <p class="text-light"><?= webinfo('visi') ?></p>
            <br>
            <h3 class="text-light">Misi</h3>
            <p class="text-light"><?= webinfo('misi') ?></p>
            </div>
        
        </div>
    </div>
    </div>
</div>
<!--Facilities Section End--> 
<!--Gallery Section Start-->
<div class="gallery ptb-50">
    <div class="container">
    <div class="sc-title">
        <h4 class="text-primary">Our Gallery</h4>
        <h2 class="text-secondary">Galleries</h2>
    </div>
    </div>
    <div class="container-fluid">
    <div class="row">
        <?php
        foreach ($galImage->result() as $img) {
            ?>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="gallery-item">
                <a href="<?= base_url() ?>assets/galeri/<?= $img->file ?>" data-lightbox="roadtrip"
                    ><img src="<?= base_url() ?>assets/galeri/<?= $img->file ?>" alt="Image"
                /></a>
                </div>
            </div>
            <?php
        }
        ?> 
    </div>
    <div class="seemore text-center mt-50">
        <a href="#" class="btn btn-outline-secondary flat"
        >See More <i class="fas fa-long-arrow-alt-right"></i
        ></a>
    </div>
    </div>
</div>
<!--Gallery Section End-->