<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Activity</div>
        </h1>
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
                <td>Waktu: <?= $data['aktivitas']['waktu'] ?></td>
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
                        <form action="<?= BASEURL; ?>/activity/daftar/<?= $data['warga']['id']; ?>/<?= $data['aktivitas']['id']; ?>" method="post">
                            <a href="<?= BASEURL; ?>/activity" class="btn btn-primary btn-round">Kembali</a>
                            <button type="submit" class="btn btn-primary btn-round" name="<?= !$data['aktivitas_warga'] ? 'daftar' : 'batal_daftar'; ?>" <?= $data['aktivitas']['peserta'] == $data['aktivitas']['maks_peserta'] ? 'disabled' : ''; ?>><?= !$data['aktivitas_warga'] ? 'Daftar' : 'Batal Daftar'; ?></button>
                        </form>
                    </div>
                </td>
            </tr>
        </table>