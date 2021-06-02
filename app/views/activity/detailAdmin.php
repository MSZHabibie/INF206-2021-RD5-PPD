<?php $waktu = round((strtotime($data['aktivitas']['tanggal']) - strtotime(date("Y-m-d"))) / (60 * 60 * 24));
    if ($waktu < 0) {
        $selesai = true;
    } else {
        $selesai = false;
    }
?>

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
            <td>Tempat: <?= $data['aktivitas']['tempat'] ?></td>
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
                    <a href="<?= BASEURL; ?>/activity/admin" class="btn btn-primary btn-round">Kembali</a>
                    <a href="<?= BASEURL; ?>/activity/edit/<?= $data['aktivitas']['id'] ?>" class="btn btn-primary btn-round tampilModalEdit" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $data['aktivitas']['id']; ?>">Edit</a>
                    <a href="<?= BASEURL; ?>/activity/hapus/<?= $data['aktivitas']['id'] ?>" class="btn btn-danger btn-round" onclick="return confirm('hapus aktivitas ini?');">Hapus</a>
                </div>
            </td>
        </tr>
    </table> -->

    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-7">
                        <img src="<?= BASEURL; ?>/img/activity/<?= $data['aktivitas']['gambar'] ?>" class="card-img-top" alt="">
                    </div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <h5 class="card-title"><?= $data['aktivitas']['nama'] ?></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <p class="card-text">Persyaratan: <?= $data['aktivitas']['syarat'] ?></p>
                            <p class="card-text">Peserta: <?= $data['aktivitas']['peserta'] ?>/<?= $data['aktivitas']['maks_peserta'] ?></p>
                            <p class="card-text">Tanggal: <?= $data['aktivitas']['tanggal'] ?></p>
                            <p class="card-text">Jam: <?= $data['aktivitas']['jam'] ?></p>
                            <p class="card-text">Tempat: <?= $data['aktivitas']['tempat'] ?></p>
                            <p class="card-text">Point: <?= $data['aktivitas']['poin'] ?></p>
                        </ul>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <p class="card-text"><?= $data['aktivitas']['deskripsi'] ?></p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                        <div class="card-footer">
                            <a href="<?= BASEURL; ?>/activity/admin" class="btn btn-primary">Kembali</a>
                            <a href="<?= BASEURL; ?>/activity/edit/<?= $data['aktivitas']['id'] ?>" class="btn btn-primary tampilModalEdit" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $data['aktivitas']['id']; ?>">Edit</a>
                            <a href="<?= BASEURL; ?>/activity/hapus/<?= $data['aktivitas']['id'] ?>" class="btn btn-danger" onclick="return confirm('hapus aktivitas ini?');">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="float-right"> <a href="" class="btn btn-primary">Total: <?= count($data['peserta']) ?> peserta</a> </div>
                    <h4>Participants</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama/Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No HP</th>
                                    <?php if($selesai) : ?>
                                        <th scope="col"></th>
                                    <?php endif ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 1 ?>
                                <?php foreach ($data['peserta'] as $peserta) : ?>
                                    <tr>
                                        <th scope="row"><?= $nomor++; ?></th>
                                        <td><?= $peserta['nama'] ?> / <?= $peserta['username'] ?></td>
                                        <td><?= $peserta['email'] ?></td>
                                        <td><?= $peserta['no_hp'] ?></td>
                                        <?php if($selesai) : ?>
                                            <td>
                                            <?php if ($peserta['confirmed'] == 0) : ?>
                                                <form action="<?= BASEURL; ?>/activity/confirm" method="post">
                                                    <input type="hidden" name="id_warga" value="<?= $peserta['id'] ?>">
                                                    <input type="hidden" name="id_aktivitas" value="<?= $data['aktivitas']['id'] ?>">
                                                    <button type="submit" class="btn btn-outline-primary btn-sm">Confirm</button>
                                                </form>
                                            <?php else : ?>
                                                Confirmed!
                                            <?php endif ?>
                                            </td>
                                        <?php endif ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
