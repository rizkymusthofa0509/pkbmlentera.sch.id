<div class="right_col" role="main">
          

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Data Account </h2>
          <div class="pull-right">
            <a href="<?= base_url() ?>administrator/users/add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah User</a>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <?php echo $this->session->flashdata('message'); ?>
            <table id="datatable" class="table table-striped table-bordered bulk_action">
              <thead>
                <tr>
                  <th>No</th>
                  <!-- <th>Email</th>  -->
                  <th>Username</th>
                  <th>password</th>
                  <th>Nama Lengkap</th>
                  <th>Jabatan</th>
                  <th>Nomor HP</th>
                  <th>Create At</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; ?>
                <?php foreach ($users->result() as $data): ?>
                    <tr> 
                      <td><?= $no++; ?></td>
                      <!-- <td><?= $data->email; ?></td> -->
                      <td><?= $data->username; ?></td> 
                      <td><?= '*****'; ?></td> 
                      <td><?= $data->nama; ?></td> 
                      <td><?= $data->level; ?></td> 
                      <td>+62 <?= $data->nomor_hp; ?></td> 
                      <td><?= $data->join_date; ?></td> 
                      <td align="center">
                        <a href="<?= base_url() ?>administrator/users/edit/<?= $data->id; ?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                        <a onclick="return confirm('Hapus data user secara permanen ? ')" href="<?= base_url() ?>administrator/users/delete/<?= $data->id; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>                  
                <?php endforeach ?>
              </tbody>
            </table>

        </div>
      </div>
    </div>


  </div>
</div>