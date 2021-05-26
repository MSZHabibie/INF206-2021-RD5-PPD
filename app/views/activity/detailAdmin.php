<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Activity</div>
        </h1>
    </section>
    <table border="1" align="center" width="300">
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
    </table>