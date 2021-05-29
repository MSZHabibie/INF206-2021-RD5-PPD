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
                                <div class="text-right">
                                    <?php $waktu = round((strtotime($aktivitas['tanggal']) - strtotime(date("Y-m-d"))) / (60 * 60 * 24)); ?>
                                    <?php if ($waktu >= 0) : ?>
                                        <small><?= $waktu ?> Hari Lagi</small>
                                    <?php else : ?>
                                        <small>Selesai</small>
                                    <?php endif; ?>
                                </div>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                </table>