<div class="card bg-light mb-3" style="max-width: 100%;">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-danger">Pembahasan Rapat</h6>
        <div class="dropdown no-arrow">
        </div>
    </div>
    <form action="<?= base_url("BahasanRapat/insertData"); ?>" method="post">
        <div class="form-group ml-3 mr-3">
            <label for="exampleFormControlSelect1">Undangan</label>
            <select class="form-control" id="exampleFormControlSelect1" name="undangan" required>
                <option selected>Pilih Undangan</option>
                <?php
                foreach ($undangan as $udg) {
                ?>
                    <option value="<?= $udg['id_undangan']; ?>"><?= $udg['hal']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group ml-3 mr-3">
            <label for="exampleFormControlTextarea1">Pembahasan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="bahasan" required></textarea>
        </div>
        <center>
            <input type="submit" class="btn btn-success ml-3 mr-3 mb-3" style="width: 90%;" value="Simpan">
        </center>
    </form>
</div>