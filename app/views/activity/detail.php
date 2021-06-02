<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Activity</div>
        </h1>
    </section>
    <!-- <table border="1" align="center" width="300">
        <tr>
            <td>
                <img width="300px" height="200px" src="<?= BASEURL; ?>/img/activity/<?= $data['aktivitas']['gambar'] ?>" alt="<?= $data['aktivitas']['nama'] ?>">
            </td>
        </tr>

        <tr align="center">
            <td><b><?= $data['aktivitas']['nama'] ?></b></td>
        </tr>

        <tr>
            <td>Persyaratan: <?= $data['aktivitas']['syarat'] ?></td>
        </tr>

        <tr>
            <td>Peserta: <?= $data['aktivitas']['peserta'] ?>/<?= $data['aktivitas']['maks_peserta'] ?></td>
        </tr>

        <tr>
            <td>Tanggal: <?= $data['aktivitas']['tanggal'] ?></td>
        </tr>

        <tr>
            <td>Jam: <?= $data['aktivitas']['jam'] ?></td>
        </tr>

        <tr>
            <td>Point: <?= $data['aktivitas']['poin'] ?></td>
        </tr>

        <tr>
            <td><b>Deskripsi:</b><br><?= $data['aktivitas']['deskripsi'] ?></br></td>
        </tr>

        <tr>
            <td>
                <div class="text-center">
                    <form action="<?= BASEURL; ?>/activity/daftar/<?= $data['warga']['id']; ?>/<?= $data['aktivitas']['id']; ?>" method="post">
                        <a href="<?= BASEURL; ?>/activity" class="btn btn-primary btn-round">Kembali</a>
                        <button type="submit" class="btn btn-primary btn-round" name="<?= !$data['aktivitas_warga'] ? 'daftar' : 'batal_daftar'; ?>" <?= $data['aktivitas']['peserta'] == $data['aktivitas']['maks_peserta'] ? 'disabled' : ''; ?>><?= !$data['aktivitas_warga'] ? 'Daftar' : 'Batal Daftar'; ?></button>
                    </form>
                </div>
            </td>
        </tr>
    </table> -->

    <div class="row d-flex justify-content-center">
        <div class="col-7">
            <div class="card">
                <img src="<?= BASEURL; ?>/img/activity/<?= $data['aktivitas']['gambar'] ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['aktivitas']['nama'] ?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Persyaratan: <?= $data['aktivitas']['syarat'] ?></li>
                    <li class="list-group-item">Peserta: <?= $data['aktivitas']['peserta'] ?>/<?= $data['aktivitas']['maks_peserta'] ?></li>
                    <li class="list-group-item">Tanggal: <?= $data['aktivitas']['tanggal'] ?></li>
                    <li class="list-group-item">Jam: <?= $data['aktivitas']['jam'] ?></li>
                    <li class="list-group-item">Tempat: <?= $data['aktivitas']['tempat'] ?></li>
                    <li class="list-group-item">Point: <?= $data['aktivitas']['poin'] ?></li>
                    <li class="list-group-item">Deskripsi:
                        <p class="card-text"><?= $data['aktivitas']['deskripsi'] ?></p>
                    </li>
                </ul>
                <div class="card-body d-flex justify-content-center">
                    <form action="<?= BASEURL; ?>/activity/daftar/<?= $data['warga']['id']; ?>/<?= $data['aktivitas']['id']; ?>" method="post">
                        <a href="<?= BASEURL; ?>/activity" class="btn btn-primary btn-round">Kembali</a>
                        <button type="submit" class="btn btn-primary btn-round" name="<?= !$data['aktivitas_warga'] ? 'daftar' : 'batal_daftar'; ?>" <?= $data['aktivitas']['peserta'] == $data['aktivitas']['maks_peserta'] ? 'disabled' : (round((strtotime( $data['aktivitas']['tanggal']) - strtotime(date("Y-m-d"))) / (60 * 60 * 24)) < 0 ? 'disabled':'' );  ?>><?= !$data['aktivitas_warga'] ? 'Daftar' : 'Batal Daftar'; ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>