<div class="container mt-3 mb-3">
  <div class="row">
    <!-- <div class="col-lg-6">
         <?php //Flasher::flash() 
          ?>
      </div> -->
  </div>
  <div class="row">
    <div class="col-lg-6">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary tombolTambahVoucher" data-bs-toggle="modal" data-bs-target="#formModal2">
        Tambah Voucher
      </button>
      <br></br>
      <h3>Daftar Poin Pemuda</h3>
      <ul class="list-group">
        <?php foreach ($data['poin'] as $poin) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-start">
            <?= $poin['username']; ?>
            <p class="badge bg-primary"><?= $poin['poin']; ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
      <br />
      <div class="card-group">
        <?php foreach ($data['voucher'] as $voucher) : ?>
          <div class="card">
            <img src=" <?= BASEURL; ?>/img/activity/<?= $voucher['gambar']; ?>" class="card-img-top" alt="<?= $voucher['gambar']; ?> ">
            <div class="card-body">
              <h5 class="card-title"><?= $voucher['nama']; ?></h5>
              <p class="card-text"><?= $voucher['deskripsi']; ?></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Poin : <?= $voucher['poin']; ?> </small>
              <a href="<?= BASEURL; ?>/poin/edit/<?= $voucher['id']; ?>" class="badge bg-warning tampilModalEdit2" data-bs-toggle="modal" data-bs-target="#formModal2" data-id="<?= $voucher['id']; ?>">Edit</a>
              <a href="<?= BASEURL; ?>/poin/hapus/<?= $voucher['id']; ?>" class="badge bg-danger" onclick="return confirm('Yakin Ingin Dihapus?');">Hapus</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>