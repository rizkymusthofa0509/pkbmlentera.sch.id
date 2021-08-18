<div class="row">
    <div class="col-12">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Siswa</h4>
                <p class="card-subtitle mb-4">
                    <!-- Database Siswa -->
                </p>

                <table id="basic-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Paket</th>
                            <th>Jenis Kelamin</th>
                            <th>TTL</th>
                            <th>Agama</th>
                            <th>Kewarganegaraan</th>
                            <th>Akta</th>
                            <th>Nik</th>
                            <th>NIS</th>
                            <th>NISN</th>
                            <th>SKHUN</th>
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
                                    <td><?= $list->first_name ?> <?= $list->last_name ?></td>
                                    <td><?= $list->paket_name ?></td>
                                    <td><?= $list->gender ?></td>
                                    <td><?= $list->pob ?>, <?= date_idn($list->dob) ?></td>
                                    <td><?= $list->religion ?></td>
                                    <td><?= $list->kewarganegaraan ?></td>
                                    <td><?= $list->akta ?></td>
                                    <td><?= $list->nik ?></td>
                                    <td><?= $list->nis ?></td>
                                    <td><?= $list->nisn ?></td>
                                    <td><?= $list->skhun ?></td>
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