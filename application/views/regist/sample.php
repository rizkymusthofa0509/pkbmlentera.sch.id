<div class="container">
    <div class="container card mt-5">
        <h2 class="well text-center">Registration Form </h2>
    </div>
    <div class="container card mt-5 mb-5">
        <?php $this->load->view("regist/navbar") ?>
        <!-- <form method="post" class="form-horizontal pb-3" role="form" action="<?= base_url('regist/testRegist') ?>"> -->
        <?= form_open_multipart('regist/testRegist', 'class="form-horizontal pb-3"') ?>
        <div class="tab-content">
            <?php $this->load->view('regist/form/general-form') ?>
            <?php $this->load->view('regist/form/detail-form') ?>
            <?php $this->load->view('regist/form/parent-form') ?>
            <?php $this->load->view('regist/form/attachment-form') ?>
        </div>

            <!-- move to general form -->
            <!-- move to detail form -->
            <!-- move to parent form -->
            
        </form>
    </div> <!-- ./container -->
</div>