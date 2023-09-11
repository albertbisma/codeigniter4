<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
  <div class="content">
    <form action="<?= ('/MasterItemController/update/' . $masterItems['id']); ?>" method="post">
      <div class="card-body">
        <h3>Form edit master item</h3>
        <hr>
        <div class="form-group">
          <label for="codeitem">CODE ITEM</label>
          <input type="text" class="form-control" id="codeitem" name="codeitem" value="<?= $posts['codeItem']; ?>" required="">
        </div>
        <div class="form-group">
          <label for="nameitem">NAME ITEM</label>
          <input type="text" class="form-control" id="nameitem" name="nameitem" value="<?= $posts['nameItem']; ?>" required="">
        </div>
        <div class="form-group">
          <label for="description">DESCRIPTION</label>
          <input type="text" class="form-control" id="description" name="description" value="<?= $posts['description']; ?>" required="">
        </div>
      </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="<?= ('/MasterItemController/index'); ?>" class="btn btn-dark">BATAL</a>
  </div>
  </form>
</div>
</div>
<?= $this->endSection(); ?>