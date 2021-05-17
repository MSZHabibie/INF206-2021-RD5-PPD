<h1>Poin</h1>
<h3 style="text-align:center"> Poin Ku <br> 55
</h3>
<br><br>
<div class="card" style="width: 18rem;">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <div class="card-group">
    <?php foreach ($data['voucher'] as $voucher) : ?>
      <button type="submit" class="btn btn-primary">
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
      </button>

    <?php endforeach; ?>
  </div>
</div>