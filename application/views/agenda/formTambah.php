<div class="card bg-light mb-3" style="max-width: 100%;">
	<div
     class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-danger">Agenda Rapat</h6>
       <div class="dropdown no-arrow">
         </div>
           </div>
		<form action="<?= base_url("AgendaController/insertData"); ?>" method="post">
			<div class="form-group">
				<label for="agenda">Hal</label>
				<input type="text" class="form-control" id="Hal" name="Hal" placeholder="Hal">
			</div>
			<div class="form-group">
				<label for="agenda">Tanggal</label>
				<input type="date" class="form-control" id="Tanggal" name="Tanggal" placeholder="Tanggal">
			</div>
			<div class="form-group">
				<label for="agenda">Waktu</label>
				<input type="time" class="form-control" id="Waktu" name="Waktu" placeholder="Waktu">
			</div>
			<div class="form-group">
				<label for="agenda">Tempat</label>
				<input type="text" class="form-control" id="Tempat" name="Tempat" placeholder="Tempat">
			</div>
			<div class="form-group">
				<input type="submit" class="form-control btn-success" value="Simpan">
			</div>
		</form>
	</div>
