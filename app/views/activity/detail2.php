<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <img src="<?= BASEURL; ?>/img/activity/<?= $data['aktivitas']['gambar'] ?>" class="card-img-top" alt="">
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
            <form action="<?= BASEURL; ?>/activity/daftar/<?= $data['warga']['id']; ?>/<?= $data['aktivitas']['id']; ?>" method="post">
                <a href="<?= BASEURL; ?>/activity" class="btn btn-primary">Kembali</a>
                <button type="submit" class="btn btn-primary" name="<?= !$data['aktivitas_warga'] ? 'daftar' : 'batal_daftar'; ?>" <?= $data['aktivitas']['peserta'] == $data['aktivitas']['maks_peserta'] ? 'disabled' : ''; ?>><?= !$data['aktivitas_warga'] ? 'Daftar' : 'Batal Daftar'; ?></button>

            </form>

        </div>
    </div>

</div>