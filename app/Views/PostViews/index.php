<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DATA POST</h3><br>
            <a href="<?= ('/PostController/create'); ?>" class="btn btn-success">TAMBAH DATA</a>
            <div class="row">
              <div class="col">

              </div>
              <div class="row">
                <div class="col">
                  <form action="" method="post" class="d-inline">
                    <div class="card-tools">
                      <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Cari judul buku" name="keyword">
                        <div class="input-group-append">
                          <button class="btn btn-default" type="submit">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

            </div>
            <br>
          </div>
          <!-- /.card-header -->

          <div class="container">
            <?php
            if (!empty(session()->getFlashdata('success'))) { ?>

              <div class="alert alert-success">
                <?php echo session()->getFlashdata('success'); ?>
              </div>

            <?php } ?>
            <?php if (!empty(session()->getFlashdata('info'))) { ?>

              <div class="alert alert-info">
                <?php echo session()->getFlashdata('info'); ?>
              </div>

            <?php } ?>

            <?php if (!empty(session()->getFlashdata('warning'))) { ?>

              <div class="alert alert-warning">
                <?php echo session()->getFlashdata('warning'); ?>
              </div>

            <?php } ?>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Title</th>
                  <th>Content</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php $i = 1; ?>
                  <?php foreach ($posts as $id => $data) : ?>
                    <td><?= $i; ?></td>
                    <td><?= $data['title']; ?></td>
                    <td><?= $data['content']; ?></td>
                    <td>
                      <div class="btn-group">
                        <a href="<?= ('/PostController/edit/' . $data['id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="/PostController/delete/<?= $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data post title <?= $data['title']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
</div>
<?= $this->endSection(); ?>