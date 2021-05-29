<h1>Halaman Activity</h1>

<div class="container mt-5">

    <div class="row">
        <div class="col-6">
            <ul class="list-group">
                <?php foreach( $data['aktivitas'] as $activity ) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?= $activity['nama']; ?>
                        <a href="<?= BASEURL; ?>/activity/detail/<?= $activity['id'] ?>" class="badge bg-primary">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>