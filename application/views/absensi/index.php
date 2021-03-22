<div class="card bg-light" style="max-width: 100%;">
    <div class="card-header">
        <a href="<?= base_url("AgendaController"); ?>" class="btn btn-secondary">Agenda</a>
        <a href="<?= base_url("AbsensiController"); ?>" class="btn btn-primary">Absensi</a>
        <a href="<?= base_url("BahasanRapat"); ?>" class="btn btn-secondary">Notulensi</a>
        <a href="<?= base_url("RapatController"); ?>" class="btn btn-secondary">Hasil Rapat</a>
        <?php
        if ($this->session->userdata('role') != 3) {
        ?>
            <a href="<?= base_url(); ?>AbsensiController/view" class="btn btn-primary float-right"> Absensi </a>
        <?php
        }
        ?>
    </div>
    <div class="card-body">
        <form action="<?= base_url("AbsensiController/insertAbsen"); ?>" method="post">
            <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <?php
                        if ($this->session->userdata('role') != 3) { ?>
                            <th>Action</th>
                        <?php
                        }
                        ?>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <?php
                        if ($this->session->userdata('role') != 3) { ?>
                            <th>Action</th>
                        <?php
                        }
                        ?>
                    </tr>
                </tfoot>
                <?php
                $no = 1;
                foreach ($anggota as $agt) {
                ?>
                    <tbody>
                        <tr>
                            <td class="text-center"> <?= $no++; ?></td>
                            <td>
                                <?= $agt['nama']; ?>
                            </td>
                            <?php
                            if ($this->session->userdata('role') != 3) { ?>
                                <td>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="absen[]" id="flexCheckChecked" value="<?= $agt['id_anggota'] ?>">
        <label class="form-check-label" for="flexCheckChecked">
        </label>
    </div>
    </td>
<?php
                            }
?>
</tr>
</tbody>
<?php
                }
?>
</table>
<?php
if ($this->session->userdata('role') != 3) {

?>
    <div class="form-control mb-3 mt-4">
        <select name="rapat" id="rapat">
            <?php

            foreach ($get as $g) {
            ?>
                <option value="<?= $g['id_rapat'] ?>"><?= $g['hal']; ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <input type="submit" class="form-control btn-success" value="Simpan">
    </div>
<?php

}
?>
</form>
</div>