<div class="main-content">
	<section class="section">
		<h1 class="section-header">
			<div>Community</div>
		</h1>
		<div class="section-body">
			<div class="row mt-5">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4>PPD VILLAGERS</h4> </div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table">
								<table class="table table-striped">
									<tr>
										<th>No</th>
										<th>Username</th>
										<th>Created At</th>
										<th>Status</th>
									</tr>
									<?php $no = 1 ?>
									<?php foreach ($data['allwargalimit'] as $warga) : ?>
									<tr>
										<td width="5%"><?= $no++ ?></td>
										<td width="30%"><?= $warga['username'] ?></td>
										<td width="35%"><?= $warga['created_at'] ?></td>
										<td width="15%">
											<?php if ( in_array($warga['id'], $data['warga_aktif'])) : ?>
												<div class="badge badge-success">Active</div>
											<?php else : ?>
												<div class="badge badge-danger">Not Active</div>
											<?php endif; ?>
										</td>
									</tr>
									<?php endforeach; ?>
								</table>
							</table>
							</div>
						</div>
						
						<div class="card-footer text-right">
							<nav class="d-inline-block">
								<ul class="pagination mb-0">
									<li class="page-item<?= $data['halaman_aktif'] == 1 ? ' disabled':'' ?>"> <a class="page-link" href="<?= BASEURL; ?>/community/admin/<?= ($data['halaman_aktif'] - 1) ?>" tabindex="-1"><i class="ion ion-chevron-left"></i></a> </li>
									<?php for ($i=1; $i <= $data['jumlahPagination']; $i++) : ?>
										<li class="page-item<?= $data['halaman_aktif'] == $i ? ' active' : ''; ?>"><a class="page-link" href="<?= BASEURL; ?>/community/admin/<?= $i ?>"><?= $i ?></a></li>
									<?php endfor; ?>
									<li class="page-item<?= $data['halaman_aktif'] == $data['jumlahPagination'] ? ' disabled':'' ?>"> <a class="page-link" href="<?= BASEURL; ?>/community/admin/<?= ($data['halaman_aktif'] + 1) ?>"><i class="ion ion-chevron-right"></i></a> </li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<div class="float-right">
                                <button type="button" class="btn btn-primary mb-4 tampilTambahKomunitas" data-bs-toggle="modal" data-bs-target="#modalKomunitas">Tambah</button>
							</div>
							<h4>PPD COMMUNITIES</h4> </div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped">
									<tr>
										<th>No</th>
										<th>Community</th>
										<th>Activities</th>
										<th>Member</th>
										<th style="text-align:center">Action</th>
									</tr>
									<?php $no = 1 ?>
									<?php foreach ($data['communities'] as $community) : ?>
									<tr>
										<td width="5%"><?= $no++ ?></td>
										<td width="30%"><?= $community['nama'] ?></td>
										<td width="25%"><?= $community['kegiatan'] ?></td>
										<td>
											<?php foreach ($data['warga_komunitas'] as $join) : ?>
												<?php if($community['id'] == $join['id_komunitas']) : ?>
													<img alt="image" src="<?= BASEURL;?>/img/profile/<?= $join['profile'] ?>" class="rounded-circle" width="35" data-toggle="title" title="<?= $join['username'] ?>">
												<?php endif; ?>
											<?php endforeach; ?>
										</td>
										<td width="13%">
                                            <div class="d-flex justify-content-between">
                                                <a href="<?= BASEURL; ?>/community/edit/<?= $community['id'] ?>" class="btn btn-action btn-success tampilEditKomunitas" data-bs-toggle="modal" data-bs-target="#modalKomunitas" data-id="<?= $community['id']; ?>">Edit</a>
                                                <a href="<?= BASEURL; ?>/community/hapus/<?= $community['id'] ?>" class="btn btn-action btn-danger" onclick="return confirm('hapus komunitas ini?');">Hapus</a>
                                            </div>
                                        </td>
									</tr>
									<?php endforeach; ?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- Modal -->
<div class="modal fade" id="modalKomunitas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModalKomunitas">Tambah Komunitas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/community/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="kegiatan" class="form-label">Kegiatan</label>
                        <textarea class="form-control" id="kegiatan" name="kegiatan" rows="3"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="linkjoin" class="form-label">Link Grup WhatsApp/Telegram</label>
                        <input type="text" class="form-control" id="linkjoin" name="linkjoin" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>