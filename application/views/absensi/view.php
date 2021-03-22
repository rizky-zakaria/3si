<div class="card bg-light" style="max-width: 100%;">
    <div class="card-header">Data Absensi Anggota
        <!-- <a href="<?= base_url(); ?>AnggotaController/formTambah" class="btn btn-primary float-right"> Tambah Data </a> -->
    </div>
    <div class="card-body">

        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                     <?php
                        if ($this->session->userdata('role') != 3) { ?>
                    <th>Hasil Rapat</th>
                    <th>Tanggal</th>
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
                    <th>Hasil Rapat</th>
                    <th>Tanggal</th>
                    <?php
                        }
                    ?>
                </tr>
            </tfoot>
            <?php
            $no = 1;
            foreach ($kehadiran as $agt) {
            ?>
                <tbody>
                    <tr>
                        <td class="text-center"> <?= $no++; ?></td>
                        <td>
                            <?= $agt['nama']; ?>
                        </td>
                        <td><?= $agt['hasil_rapat']; ?></td>
                        <td><?= $agt['tgl']; ?></td>
                         <?php
                        if ($this->session->userdata('role') == 2) { ?>
                         <?php
                        }
                    ?>
                    </tr>
                </tbody>
            <?php
            }
            ?>
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
                <a class="btn btn-danger" href="<?= base_url(); ?>AnggotaController/hapus/<?= $agt['id_anggota']; ?>"> Hapus </a>
            </div>
        </div>
    </div>
</div>