<div class="right_col" role="main">
          

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Data Siswa </h2>
          
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            
            <table id="datatable" class="table table-striped table-bordered bulk_action">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th> 
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($siswa->result() as $data): ?>
                    <tr> 
                      <td><?= $data->regist_key; ?></td>
                      <td><?= $data->nama; ?></td> 
                      <td align="center">
                        <a href="<?= base_url() ?>administrator/siswa/edit/<?= $data->ID; ?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                        <a href="<?= base_url() ?>administrator/siswa/edit/<?= $data->ID; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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