<div class="container mt-5">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal2">Tambah</button>
  <br><br>
  <h1>Halaman Poin Admin</h1>

  <?php foreach ($data['poin'] as $poin) : ?>
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <?= $poin['username']; ?> : <?= $poin['poin']; ?>
    </li>
  <?php endforeach; ?>

  <div class="card-group">
    <?php foreach ($data['voucher'] as $voucher) : ?>
      <div class="card" style="width: 18rem;">
        <img src="<?= BASEURL; ?>/img/<?= $voucher['gambar'] ?>" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title"><?= $voucher['nama'] ?></h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <p class="card-text"><?= $voucher['deskripsi'] ?></p>
            </li>
            <li class="list-group-item">
              <p class="card-text">Poin: <?= $voucher['poin'] ?></p>
            </li>
          </ul>
        </div>


      </div>

    <?php endforeach; ?>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Voucher</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/poin/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="form-group mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="text" class="form-control" id="gambar" name="gambar">
          </div>
          <div class="form-group mb-3">
            <label for="poin" class="form-label">Poin</label>
            <input type="number" class="form-control" id="poin" name="poin">
          </div>
          <div class="form-group mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>