<div class="container mt-3 mb-3 ">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash() ?>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <!-- Button trigger modal -->
      <br></br>
      <div class="text-center">
        <h3>Daftar Poin Pemuda</h3>
        <h1><?= $data['warga']['poin']; ?></h1>
      </div>
      <br />
      <div class="card-group">
        <?php foreach ($data['voucher'] as $voucher) : ?>
          <div class="card">
            <img src=" <?= BASEURL; ?>/img/poin/<?= $voucher['gambar']; ?>" class="card-img-top" alt="<?= $voucher['gambar']; ?> ">
            <div class="card-body">
              <h5 class="card-title"><?= $voucher['nama']; ?></h5>
              <p class="card-text"><?= $voucher['deskripsi']; ?></p>
            </div>
            <div class="card-footer ">
              <small class="text-muted d-flex justify-content-between align-items-start">Poin : <?= $voucher['poin']; ?>
                <a href="<?= BASEURL; ?>/poin/pembelian/<?= $data['warga']['id']; ?>/<?= $voucher['id']; ?>" class="badge bg-success " onclick="return confirm('Apakah Anda Ingin Membeli <?= $voucher['nama'] ?>');">Beli</a></small>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="formModal2" tabindex="-1" aria-labelledby="judulModal2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="judulModal2">Tambah Voucher</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="<?= BASEURL; ?>/poin/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label>
              <input type="text" class="form-control" id="deskripsi" name="deskripsi" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="poin" class="form-label">Poin</label>
              <input type="number" class="form-control" id="poin" name="poin" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="gambar" class="form-label">Gambar</label>
              <input type="text" class="form-control" id="gambar" name="gambar" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
          </form>
        </div>
      </div>
    </div>
  </div>