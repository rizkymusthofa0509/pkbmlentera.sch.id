<div class="row">
    <div class="col-12">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Siswa</h4>
                <p class="card-subtitle mb-4">
                    Database E-mail seluruh siswa.
                </p>

                <table id="basic-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Detail Transaction</th>
                            <th>Nama Lengkap</th>
                            <th>Paket</th> 
                            <th>E-mail</th> 
                            <th>Alamat Lengkap</th>
                        </tr>
                    </thead>
                
                
                    <tbody>
                        <?php
                        $no = 1;
                            foreach ($siswa->result() as $list) {
                                ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><a href="<?= base_url() ?>apps/finance/detail/<?= $list->id ?>"><span class="badge badge-success">Open detail</span></a></td>
                                    <td><?= $list->first_name ?> <?= $list->last_name ?></td>
                                    <td><?= $list->paket_name ?></td>
                                    <td><?= $list->email ?></td> 
                                    <td><?= $list->address ?></td> 
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