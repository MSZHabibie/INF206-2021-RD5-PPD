<h1>Halaman Activity Admin</h1>

<div class="container mt-5">

    <!-- <button type="button" class="btn btn-primary" onclick="location.href='<?= BASEURL; ?>/activity/tambah'" >Tambah</button> -->
    <div class="row">
        <div class="col-6">
        <button type="button" class="btn btn-primary tombolTambahAktivitas" data-bs-toggle="modal" data-bs-target="#formModal">Tambah</button>
        <br><br>
            <ul class="list-group">
                <?php foreach( $data['aktivitas'] as $activity ) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?= $activity['nama']; ?>
                        <div>
                            <a href="<?= BASEURL; ?>/activity/detailAdmin/<?= $activity['id'] ?>" class="badge bg-primary">detail</a>
                            <a href="<?= BASEURL; ?>/activity/edit/<?= $activity['id'] ?>" class="badge bg-primary tampilModalEdit" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $activity['id']; ?>">edit</a>
                            <a href="<?= BASEURL; ?>/activity/hapus/<?= $activity['id'] ?>" class="badge bg-danger" onclick="return confirm('hapus aktivitas ini?');">hapus</a>
                        </div>                
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>