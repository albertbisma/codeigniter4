<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
  <div class="content">
    <form action="<?= ('/PostController/store'); ?>" method="post">
      <div class="card-body">
        <h3>FORM TAMBAH DATA</h3>
        <hr>
        <div class="form-group">
          <label for="judul">TITLE</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan title" required="">
        </div>
        <div class="form-group">
          <label for="penulis">CONTENT</label>
          <input type="text" class="form-control" id="content" name="content" placeholder="Masukkan content" required="">
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        <a href="<?= ('/PostController/index'); ?>" class="btn btn-dark">Batal</a>
      </div>
    </form>
  </div>
</div>
<?= $this->endSection(); ?>