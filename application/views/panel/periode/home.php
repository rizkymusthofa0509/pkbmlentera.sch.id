 
<!-- Content -->

<div class="row"> 
        
          <div class="box box-primary box-solid ">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-bank"></i> Data Periode</h3>
              <!-- Left -->
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <b><i class="fa fa-angle-down"></i></b></button>
                <button type="button" class="btn btn-box-tool" data-widget="Reload" data-toggle="tooltip" title="Reload">
                  <i class="fa fa-refresh"></i></button>
              </div>
              <!-- End Left --> 
            </div>
            <div class="box-body">
              <div class="col-md-12">
                <a onclick="window.history.back();" class="btn btn-sm bg-navy" style="border-radius: 0px;"><i class="fa fa-angle-left"></i> Back</a>
                <a href="<?= base_url() ?>panel/periode/pages/create" class="btn btn-sm btn-info" style="border-radius: 0px;"><i class="fa fa-plus"></i> Add New</a>
                <!-- <div class="pull-right">
                  <a href="" class="btn btn-sm btn-primary" style="border-radius: 0px;" ><i class="fa fa-print"></i> Print</a>
                  <a href="" class="btn btn-sm btn-primary" style="border-radius: 0px; background-color: green;"><i class="fa fa-file-excel-o"></i> Export Excel</a>
                  <a href="" class="btn btn-sm btn-primary" style="border-radius: 0px; background-color: green;"><i class="fa fa-file-excel-o"></i> Import Excel</a>
                </div> -->
              </div>

              <div class="col-md-12" style="margin-top: 20px;">
                <table class="dataTables table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="10px;">No</th>
                  <th>Nama </th>
                  <th>Periode Awal</th>
                  <th>Periode Akhir</th>
                  <th>Status</th> 
                  <th width="50px;">Actions</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($list->result() as $data): ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $data->nama ?></td>
                      <td><?= date_idn($data->start) ?></td>
                      <td><?= date_idn($data->finish) ?></td> 
                      <td><?= label($data->status) ?></td> 
                      <td>
                        <label class="label label-success"><a href="<?= base_url() ?>panel/periode/pages/edit/<?= $data->ID ?>" title="Test"><i class="fa fa-pencil" style="color: white;"></i></a></label>
                       <!--  <label class="label label-warning"><a href="<?= base_url() ?>apps/" title="Test"><i class="fa fa-eye" style="color: white;"></i></a></label> -->
                        <label class="label label-danger"><a onclick="return confirm('Are You Sure ? ');" href="<?= base_url() ?>panel/periode/pages/destroy/<?= $data->ID ?>" title="Test"><i class="fa fa-trash" style="color: white;"></i></a></label> 
                      </td>
                    </tr> 
                  <?php endforeach ?>
                </tbody>
                 
              </table>
              </div>
            </div> 
          </div> 

</div>

<!-- End Content -->