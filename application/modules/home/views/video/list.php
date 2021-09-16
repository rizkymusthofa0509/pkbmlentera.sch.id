<!--Courses Start-->
    <div class="courses page-space">
      <div class="container">
        <div class="row">
            <?php
                foreach ($galVideo->result() as $gal) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--Course Item Start-->
                        <div class="course-item">
                        <div class="thumb">
                            <video style="width:370px;height:250px;" controls>
                            <source src="<?= base_url() ?>assets/galeri/<?= $gal->file ?>" type="video/mp4">
                            <source src="<?= base_url() ?>assets/galeri/<?= $gal->file ?>" type="video/ogg">
                            Your browser does not support the video tag.
                            </video>
                            <!-- <img src="<?= base_url() ?>assets/galeri/<?= $gal->file ?>" alt="Image" style="width:370px;height:250px;" />  -->
                        </div>
                        <div class="course-info bg-light p-3"> 
                            <div class="title">
                            <a href="#"><h4><?= $gal->title ?></h4></a>
                            </div>
                            <div class="description">
                            <p>
                                <?= $gal->description ?>
                            </p>
                            </div>
                            <div class="course-btn">
                            <a href="<?= base_url() ?>home/video/<?= $gal->id ?>" class="btn btn-secondary">Lihat</a>
                            </div>
                        </div>
                        </div>
                        <!--Course Item End-->
                    </div>
                    <?php
                }
            ?>
           


        </div>
      </div>
    </div>
    <!--Courses End-->