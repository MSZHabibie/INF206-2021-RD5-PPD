<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <img src="<?= BASEURL; ?>/img/<?= $data['aktivitas']['gambar'] ?>" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title"><?= $data['aktivitas']['nama'] ?></h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Persyaratan: <?= $data['aktivitas']['syarat'] ?></li>
            <li class="list-group-item">Peserta: <?= $data['aktivitas']['peserta'] ?>/<?= $data['aktivitas']['maks_peserta'] ?></li>
            <li class="list-group-item">Waktu: <?= $data['aktivitas']['waktu'] ?></li>
            <li class="list-group-item">Tempat: <?= $data['aktivitas']['tempat'] ?></li>
            <li class="list-group-item">Point: <?= $data['aktivitas']['poin'] ?></li>
            <li class="list-group-item">Deskripsi: 
            <p class="card-text"><?= $data['aktivitas']['deskripsi'] ?></p>
            </li>
        </ul>
        <div class="card-body">
            <a href="<?= BASEURL; ?>/activity" class="btn btn-primary">Kembali</a>
            <a href="<?= BASEURL; ?>/activity/daftar/<?= $data['warga']['id']; ?>/<?= $data['aktivitas']['id']; ?>" class="btn btn-primary">Daftar</a>
        </div>
    </div>

</div>