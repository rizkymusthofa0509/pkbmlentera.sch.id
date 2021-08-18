<div class="row">
    <div class="col-12">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Siswa</h4>
                <p class="card-subtitle mb-4">
                    Database Lokasi tempat tinggal seluruh siswa.
                </p>

                <table id="basic-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Paket</th> 
                            <th>E-mail</th> 
                            <th>Alamat Lengkap</th>
                            <th>Nomor HP</th>
                        </tr>
                    </thead>
                
                
                    <tbody>
                        <?php
                        $no = 1;
                            foreach ($siswa->result() as $list) {
                                ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $list->first_name ?> <?= $list->last_name ?></td>
                                    <td><?= $list->paket_name ?></td>
                                    <td><?= $list->email ?></td> 
                                    <td><?= $list->address ?></td> 
                                    <td><?= $list->nomor_telp ?></td> 
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