<div class="card bg-light mb-3" style="max-width: 100%;">
	<div
     class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-danger">Hasil Rapat</h6>
       <div class="dropdown no-arrow">
         </div>
           </div>
		<form action="<?= base_url("RapatController/insertData"); ?>" method="post">
    <div class="form-group">
             <label for="sel1">Agenda</label>
             <select name="id_undangan" class="form-control" id="sel1">
                <?php foreach ($id_undangan as $agt ) { ?>
                  <option value="<?= $agt['hal']; ?>"><?= $agt['hal']; ?></option> 
                <?php
                } ?>
           
            </select>
        </div>
			<!-- <div class="form-group">
             <label for="sel1">Perihal Undangan</label>
             <select name="rapat" class="form-control" id="sel1">
                <?php foreach ($hal as $agt ) { ?>
                  <option value="<?= $agt['hal']; ?>"><?= $agt['hal']; ?></option> 
                <?php
                } ?>
           
            </select>
        </div> -->
		
			<div class="form-group">
				<label for="hasil_rapat">Hasil Rapat</label>
				<input type="text" class="form-control" id="hasil_rapat" name="hasil_rapat" placeholder="hasil_rapat">
			</div>

			<div class="form-group">
				<input type="submit" class="form-control btn-success" value="Simpan">
			</div>
		</form>
	</div>
