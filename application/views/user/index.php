<div class="card bg-light" style="max-width: 100%;">
    <div class="card-header">User
        <a href="<?= base_url(); ?>UserController/formTambah" class="btn btn-primary float-right"> Tambah Data </a>
    </div>
<div class="card-body">
    <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                 <?php
                        if ($this->session->userdata('role') == 2) { ?>
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
                        if ($this->session->userdata('role') == 2) { ?>
                    <th>Action</th>
                    <?php
                        }
                    ?>
            </tr>
        </tfoot>

            <tbody>
                <?php
               $no = 1;
                foreach ($user as $rpt) {
                 ?>
                <tr>
                    <td class="text-center"><?= $no++; ?></td>
                    <td>
                        <?= $rpt['username']; ?>
                    </td>
                    <?php
                        if ($this->session->userdata('role') == 2) { ?>
                    <td>
                        <a class="btn btn-success" href="<?= base_url("UserController/edit/" . $rpt['id_user']) ?>"> <i class="fas fa-edit"></i> </a>
                        <a class="btn btn-danger" href="<?= base_url("UserController/hapus/" . $rpt['id_user']) ?>"> <i class="fas fa-trash"></i> </a>
                    </td>
                    <?php
                        }
                    ?>
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