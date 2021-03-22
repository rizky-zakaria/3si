<div class="card bg-light mb-3" style="max-width: 100%;">
	<div
     class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-danger">Data Anggota</h6>
       <div class="dropdown no-arrow">
         </div>
           </div>
		<form action="<?= base_url("AnggotaController/updateData"); ?>" method="post">
			<div class="form-group">
				<label for="anggota">Nama</label>
				<input type="text" class="form-control" id="Nama" name="Nama" placeholder="Nama" value="<?= $anggota['nama']; ?>">
				<input type="hidden" class="form-control" id="Nama" name="id" placeholder="Nama" value="<?= $anggota['id_anggota']; ?>">
			</div>
			<div class="form-group">
				<label for="anggota">Alamat</label>
				<input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Alamat" value="<?= $anggota['alamat']; ?>">
			</div>
			<div class="form-group">
				<label for="anggota">Nik</label>
				<input type="number" class="form-control" id="Nik" name="Nik" placeholder="Nik" value="<?= $anggota['nik']; ?>">
			</div>
			<!-- <div class="form-group">
             <label for="sel1">Id User</label>
             <select name="anggota" class="form-control" id="sel1">
                <?php foreach ($id_user as $agt ) { ?>
                  <option value=""><?= $agt['id_user']; ?></option>  
                <?php
                } ?>
             </select>
        </div> -->
				<input type="submit" class="form-control btn-success" value="Simpan">
			</div>
		</form>
	</div>