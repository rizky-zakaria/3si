<div class="card bg-light" style="max-width: 100%;">
    <div class="card-header">
        <a href="<?= base_url("AgendaController"); ?>" class="btn btn-primary">Agenda</a>
        <a href="<?= base_url("AbsensiController"); ?>" class="btn btn-secondary">Absensi</a>
        <a href="<?= base_url("BahasanRapat"); ?>" class="btn btn-secondary">Notulensi</a>
        <a href="<?= base_url("RapatController"); ?>" class="btn btn-secondary">Hasil Rapat</a>
        <?php
        if ($id == 1) {
            echo ("<a href='" . base_url() . "AgendaController/formTambah' class='btn btn-primary float-right'> Tambah Data </a>");
        }
        ?>

    </div>
    <div class="card-body">
        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Agenda</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Tempat</th>
                    <?php
                    if ($id == 1) { ?>
                        <th>Action</th>
                    <?php } ?>

                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Agenda</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Tempat</th>
                    <?php
                    if ($id == 1) { ?>
                        <th>Action</th>
                    <?php } ?>

                </tr>
            </tfoot>

            <tbody>
                <?php
                $no = 1;
                foreach ($agenda as $agd) {
                ?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td>
                            <?= $agd['hal']; ?>
                        </td>
                        <td><?= $agd['tgl']; ?></td>
                        <td><?= $agd['waktu'] ?></td>
                        <td><?= $agd['tempat']; ?></td>
                        <?php
                        if ($id == 1) { ?>
                            <td>
                                <a class="btn btn-success" href="<?= base_url("AgendaController/edit/" . $agd['id_undangan']) ?>"> <i class="fas fa-edit"></i> </a>
                                <a class="btn btn-danger" href="<?= base_url("AgendaController/hapus/" . $agd['id_undangan']) ?>"> <i class="fas fa-trash"></i> </a>
                                <!-- <a class="btn btn-primary" href=""> <i class="fas fa-eye"></i> </a> -->
                            </td>
                        <?php } ?>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>