<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
  <div class="content">
    <form action="<?= ('/PostController/update/' . $posts['id']); ?>" method="post">
      <div class="card-body">
        <h3>Form edit posts</h3>
        <hr>
        <div class="form-group">
          <label for="title">TITLE</label>
          <input type="text" class="form-control" id="title" name="title" value="<?= $posts['title']; ?>" required="">
        </div>
        <div class="form-group">
          <label for="content">CONTENT</label>
          <input type="text" class="form-control" id="content" name="content" value="<?= $posts['content']; ?>" required="">
        </div>
      </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="<?= ('/PostController/index'); ?>" class="btn btn-dark">BATAL</a>
  </div>
  </form>
</div>
</div>
<?= $this->endSection(); ?>