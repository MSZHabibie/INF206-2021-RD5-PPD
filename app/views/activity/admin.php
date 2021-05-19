            <div class="main-content">
                <section class="section">
                    <h1 class="section-header">
                        <div>Activity</div>
                    </h1>
                </section>

                <button type="button" class="btn btn-primary mb-4 tombolTambahAktivitas" data-bs-toggle="modal" data-bs-target="#formModal">Tambah</button>

                <table width="300">
                    <tr>
                        <?php foreach ($data['aktivitas'] as $aktivitas) : ?>
                            <td>
                                <img width="300px" height="200px" src="<?= BASEURL; ?>/img/activity/<?= $aktivitas['gambar'] ?>" alt="<?= $aktivitas['nama'] ?>">
                            </td>
                        <?php endforeach; ?>
                    </tr>

                    <tr align="center">
                        <?php foreach ($data['aktivitas'] as $aktivitas) : ?>
                            <td><b><?= $aktivitas['nama'] ?></b></td>
                        <?php endforeach; ?>
                    </tr>

                    <tr>
                        <?php foreach ($data['aktivitas'] as $aktivitas) : ?>
                            <td><?= $aktivitas['deskripsi'] ?></td>
                        <?php endforeach; ?>
                    </tr>

                    <tr>
                        <?php foreach ($data['aktivitas'] as $aktivitas) : ?>
                            <td>
                                <div class="text-center">
                                    <a href="<?= BASEURL; ?>/activity/detailAdmin/<?= $aktivitas['id'] ?>" class="btn btn-primary btn-round">Detail</a>
                                </div>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                </table>