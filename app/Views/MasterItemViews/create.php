<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
  <div class="content">
    <form action="<?= ('/MasterItemController/store'); ?>" method="post">
      <div class="card-body">
        <h3>FORM TAMBAH DATA</h3>
        <hr>
        <div class="form-group">
          <label for="judul">CODE ITEM</label>
          <input type="text" class="form-control" id="codeItem" name="codeItem" placeholder="Masukkan code item" required="">
        </div>
        <div class="form-group">
          <label for="penulis">NAME ITEM</label>
          <input type="text" class="form-control" id="nameItem" name="nameItem" placeholder="Masukkan name item" required="">
        </div>
        <div class="form-group">
          <label for="penulis">DESCRIPTION</label>
          <input type="text" class="form-control" id="description" name="description" placeholder="Masukkan description" required="">
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        <a href="<?= ('/MasterItemController/index'); ?>" class="btn btn-dark">Batal</a>
      </div>
    </form>
  </div>
</div>
<?= $this->endSection(); ?>