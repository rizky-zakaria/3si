<div class="card bg-light mb-3" style="max-width: 100%;">
	<div
     class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-danger">Tambah User</h6>
       <div class="dropdown no-arrow">
         </div>
           </div>
		<form action="<?= base_url("UserController/insertData"); ?>" method="post">
			<div class="form-group">
				<label for="Username">Username</label>
				<input type="text" class="form-control" id="Username" name="Username" placeholder="Username" value="<?= $user['username']; ?>">
			</div>
			<div class="form-group">
				<label for="Password">Password</label>
				<input type="number" class="form-control" id="Password" name="Password" placeholder="Password" value="<?= $user['password']; ?>">
			</div>
      <div class="form-group">
        <label for="Level">Level</label>
        <input type="number" class="form-control" id="Level" name="Level" placeholder="Level" value="<?= $user['level']; ?>">
      </div>
      <!-- <div class="form-group">
        <label for="Level">Level</label>
        <input type="number" class="form-control" id="Level" name="Level" placeholder="Level">
      </div>
			<div class="form-group"> -->
				<input type="submit" class="form-control btn-success" value="Simpan">
			</div>
		</form>
	</div>
