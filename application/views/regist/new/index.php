<div class="container mt-4 trans">
  <div class="row p-3" >
    <div class="card card-body">
        <div class="row mb-3">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2>Registration Form</h2>
                    <?= $this->session->flashdata('message') ?>
                </div>
            </div>
        </div>
      <!-- FORM -->
      <div class="col-md-12" >
        <?= form_open_multipart('regist/testRegist') ?>
        <div id="accordion">
        
            <!-- data siswa -->
            <?php $this->load->view('regist/new/f-siswa') ?>

            <!-- data orang tua -->
            <?php $this->load->view('regist/new/f-parents') ?>

            <!-- lampiran -->
            <?php $this->load->view('regist/new/f-lampiran') ?>
            
            <br />
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="pull-right">
                    <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> Register</button>
                </div>
            </div>
        </div>
        <?= form_close() ?>
      </div>
    </div>
  </div>
</div>