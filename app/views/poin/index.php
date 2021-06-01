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