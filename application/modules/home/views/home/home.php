<!--Banner Start-->
<div class="banner-area position-relative">
    <!--Banner Item Start-->
    <div class="banner-item banner-bg overlay">
    <div class="container">
        <div class="banner-title text-center">
        <h2>Learn with Eskul</h2>
        </div>
        <div class="description">
        <p class="text-light text-center">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna <br />
            aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
            viverra maecenas accumsan lacus vel facilisis.
        </p>
        </div>
        <div class="banner-btn text-center">
        <a href="about.html" class="btn btn-primary">Learn More</a>
        <a href="courses.html" class="btn btn-light">Our Courses</a>
        </div>
    </div>
    </div>
    <!--Banner Item End-->

    <!--Search Box Start-->
    <div class="search-box">
    <div class="container">
        <form action="#" class="search-form p-4">
        <div class="search-title">
            <h4>Search Here</h4>
            <hr />
        </div>
        <div class="row">
            <div class="col-md-3">
            <div class="form-group">
                <label for="category">Category</label>
                <select class="custom-select" id="category">
                <option selected="selected">Select Category</option>
                <option value="Web Design">Web Design</option>
                <option value="Web Development">Web Development</option>
                <option value="Graphics Design">Graphics Design</option>
                </select>
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group">
                <label for="language">Language</label>
                <select class="custom-select" id="language">
                <option selected="selected">Select Language</option>
                <option value="English">English</option>
                <option value="Bangla">Bangla</option>
                <option value="Arabic">Arabic</option>
                </select>
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group">
                <label for="topic">Topic</label>
                <input
                type="text"
                id="topic"
                class="form-control"
                placeholder="Write Topic"
                />
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group submit-btn">
                <input
                type="submit"
                value="Search Now"
                class="btn btn-secondary flat"
                />
            </div>
            </div>
        </div>
        </form>
    </div>
    </div>
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
                        <img src="<?= base_url() ?>assets/blog/<?= $blog->file ?>" alt="Image" /> 
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