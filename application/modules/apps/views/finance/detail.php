<div class="row">
    <div class="col-12">
            <div class="card">
            <div class="card-header text-right">
            <a href="<?= base_url() ?>apps/finance" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Create New</a>
            <a href="<?= base_url() ?>apps/finance" class="btn btn-sm btn-danger"> Back</a>
            </div>
            <div class="card-body">
                <h4 class="card-title"> History Transaction</h4>
                <p class="card-subtitle mb-4">
                    Detail Transaction.
                </p>

                <table id="" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Transaksi</th>
                            <th>Nominal</th> 
                            <th>Deskripsi</th> 
                            <th>Bank Pengirim</th>
                            <th>Bank Penerima</th>
                            <th>Lampiran</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php
                        $no = 1;
                            foreach ($detail->result() as $list) {
                                ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $list->name ?> </td>
                                    <td><?= $list->nominal ?></td>
                                    <td><?= $list->description ?></td> 
                                    <td><?= $list->from_name_bank ?> / <?= $list->from_number_bank ?></td> 
                                    <td><?= $list->to_name_bank ?> / <?= $list->to_number_bank ?></td> 
                                    <td><a target="_blank" href=""><span class="badge badge-success"><i class="fa fa-file-pdf"></i> Open File</span></a></td> 
                                </tr>
                                <?php
                            }
                        ?> 
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->