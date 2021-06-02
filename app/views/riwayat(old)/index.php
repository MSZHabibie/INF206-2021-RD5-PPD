<h1>Halaman Riwayat</h1>

<div class="container mt-5">

   <div class="row">
      <div class="col-6">
         <ul class="list-group">
            <h3>Aktivitas</h3>
            <?php foreach ($data['riwayat'] as $riwayat) : ?>
               <li class="list-group-item d-flex justify-content-between align-items-start">
<<<<<<< HEAD
                  <a href="<?= BASEURL; ?>/activity/detail/<?= $riwayat['id'] ?>" class="badge bg-primary"><?= $riwayat['nama']; ?></a>
                  <p>| <?= $riwayat['waktu']; ?></p>
               </li>
            <?php endforeach; ?>
            <h3>Voucher</h3>
            <?php foreach ($data['riwayat2'] as $riwayat2) : ?>
               <li class="list-group-item d-flex justify-content-between align-items-start">
<<<<<<< HEAD
                  <a href="<?= BASEURL; ?>/poin" class="badge bg-primary"><?= $riwayat2['nama']; ?></a>
                  <p>| <?= $riwayat2['waktu']; ?></p>
               </li>
            <?php endforeach; ?>
         </ul>
      </div>
   </div>
</div>