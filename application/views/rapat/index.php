<div class="card bg-light" style="max-width: 100%;">
    <div class="card-header">
        <a href="<?= base_url("AgendaController"); ?>" class="btn btn-secondary">Agenda</a>
        <a href="<?= base_url("AbsensiController"); ?>" class="btn btn-secondary">Absensi</a>
        <a href="<?= base_url("BahasanRapat"); ?>" class="btn btn-secondary">Notulensi</a>
        <a href="<?= base_url("RapatController"); ?>" class="btn btn-primary">Hasil Rapat</a>
        <?php
        if ($role != 3) {
        ?>
            <a href="<?= base_url(); ?>RapatController/CekVerifikasi" class="btn btn-primary float-right "> Rapat Yang Terverifikasi </a>
            <?php if ($role == 2) { ?>
                <a href="<?= base_url(); ?>RapatController/formTambah" class="btn btn-primary float-right"> Tambah Data </a>

            <?php } ?>
        <?php

        }
        ?>
    </div>
    <div class="card-body">
        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Hasil Rapat</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Tempat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Hasil Rapat</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Tempat</th>
                    <th>Action</th>

                </tr>
            </tfoot>

            <tbody>
                <?php
                $no = 1;
                foreach ($rapat as $rpt) {
                ?>
                    <tr>
                        <td class="text-center"><?= $no++; ?></td>
                        <td>
                            <?= $rpt['hasil_rapat']; ?>
                        </td>
                        <td> <?= $rpt['tgl']; ?></td>
                        <td> <?= $rpt['waktu']; ?></td>
                        <td> <?= $rpt['tempat']; ?></td>
                        <td>
                            <?php
                            if ($role == 2) {
                            ?>
                                <a class="btn btn-success" href="<?= base_url("RapatController/edit/" . $rpt['id_rapat']) ?>">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-danger" href="<?= base_url("RapatController/hapus/" . $rpt['id_rapat']) ?>">
                                    <i class="fas fa-trash"></i>
                                </a>
                            <?php
                            } elseif ($role == 1) {

                            ?>
                                <a class="btn btn-success" href="<?= base_url("RapatController/verifikasi/" . $rpt['id_rapat']) ?>"> <i class="fas fa-check"></i> </a>
                            <?php
                            }

                            ?>


                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Yakin Ingin Menghapus?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-danger" href="<?= base_url(); ?>RapatController/hapus/<?= $agt['id_rapat']; ?>"> Hapus </a>
            </div>
        </div>
    </div>
</div>