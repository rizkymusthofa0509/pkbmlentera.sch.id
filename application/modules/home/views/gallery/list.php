<!--Member Section Start-->
    <div class="teachers ptb-50 bg-bglight">
        <div class="container">
            <div class="sc-title text-center">
                <h4 class="text-primary">Galeri Kegiatan </h4>
                <h2 class="text-secondary">Aktivitas kegiatan <?= webinfo('school_name') ?></h2>
            </div>
            <div class="teacher-slider owl-carousel">
                
                <?php
                    foreach ($galImage->result() as $gal) {
                       ?>
                        <div class="teacher-item">
                            <div class="thumb">
                                <img src="<?= base_url() ?>assets/galeri/<?= $gal->file ?>" alt="Image" style="width:370px;height:250px;">
                            </div>
                            <div class="info text-center">
                                <div class="name">
                                    <h5><?= $gal->title ?></h5>
                                </div>
                                <div class="designation">
                                    <span><?= $gal->description ?></span>
                                </div>
                                <?= social_media('asass'); ?>
                            </div>
                        </div> 
                       <?php
                    }
                ?>
                


            </div>
        </div>
    </div>
    <!--Member Section End-->