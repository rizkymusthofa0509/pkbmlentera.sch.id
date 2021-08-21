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
                            <th>Transaksi</th>
                            <th>Nominal</th> 
                            <th>Deskripsi</th> 
                            <th>Bank Pengirim</th>
                            <th>Bank Penerima</th>
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
                                    <td><?= $list->lampiran ?></td> 
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