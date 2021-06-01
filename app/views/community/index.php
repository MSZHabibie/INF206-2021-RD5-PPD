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
							<h4>PPD COMMUNITY</h4> </div>
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
									<?php foreach ($data['allwarga'] as $warga) : ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $warga['username'] ?></td>
										<td><?= $warga['created_at'] ?></td>
										<td>
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
									<li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1"><i class="ion ion-chevron-left"></i></a> </li>
									<li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
									<li class="page-item"> <a class="page-link" href="#">2</a> </li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"> <a class="page-link" href="#"><i class="ion ion-chevron-right"></i></a> </li>
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
								<form>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search">
										<div class="input-group-btn">
											<button class="btn btn-secondary"><i class="ion ion-search"></i></button>
										</div>
									</div>
								</form>
							</div>
							<h4>Kelompok PPD</h4> </div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped">
									<tr>
										<th>No</th>
										<th>Nama Kelompok</th>
										<th>Anggota</th>
										<th>Join</th>
									</tr>
									<?php $no = 1 ?>
									<?php foreach ($data['communities'] as $community) : ?>
									<tr>
										<td width="5%"><?= $no++ ?></td>
										<td width="45%"><?= $community['nama'] ?></td>
										<td>
											<?php foreach ($data['warga_komunitas'] as $join) : ?>
												<?php if($community['id'] == $join['id_komunitas']) : ?>
													<img alt="image" src="<?= BASEURL;?>/img/profile/<?= $join['profile'] ?>" class="rounded-circle" width="35" data-toggle="title" title="<?= $join['username'] ?>">
												<?php endif; ?>
											<?php endforeach; ?>
										</td>
										<td width="10%"><a href="<?= BASEURL; ?>/community/join" class="btn btn-action btn-secondary tombolJoinKomunitas" data-bs-toggle="modal" data-bs-target="#modalJoin" data-link-join="<?= $community['link_join']; ?>">Join</a></td>
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
<div class="modal fade" id="modalJoin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalJoinLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalJoinLabel">Link Komunitas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<h5>Copy this link!</h5>
		<p><a href="#" class="tooltip-test" title="Tooltip"></a></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>