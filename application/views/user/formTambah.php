<div class="card bg-light mb-3" style="max-width: 100%;">
	<div
     class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-danger">Tambah User</h6>
       <div class="dropdown no-arrow">
         </div>
           </div>
		<form action="<?= base_url("UserController/insertData"); ?>" method="post">
<!-- 			<div class="form-group">
             <label for="sel1">Id User</label>
             <select name="user" class="form-control" id="sel1">
                <?php foreach ($id_user as $agt ) { ?>
                  <option value="<?= $agt['id_user']; ?>"><?= $agt['id_user']; ?></option> 
                <?php
                } ?>
           
            </select>
        </div> -->
			<div class="form-group">
				<label for="Username">Username</label>
				<input type="text" class="form-control" id="Username" name="Username" placeholder="Username">
			</div>
			<div class="form-group">
				<label for="Password">Password</label>
				<input type="text" class="form-control" id="Password" name="Password" placeholder="Password">
			</div>
      <div class="form-group">
             <label for="sel1">Level</label>
             <select name="Level" class="form-control" id="sel1">
                <?php foreach ($level as $kab ) { ?>
                  <option value="<?= $kab['username']; ?>"><?= $kab['username']; ?></option> 
                <?php
                } ?>
           
            </select>
        </div>
      <!-- <div class="form-group">
        <label for="Level">Level</label>
        <input type="number" class="form-control" id="Level" name="Level" placeholder="Level">
      </div> -->
			<div class="form-group">
				<input type="submit" class="form-control btn-success" value="Simpan">
			</div>
		</form>
	</div>
