<div class="main-content">
	<section class="section">
		<h1 class="section-header">
            <div>Profile</div>
        </h1>
	</section>

<div class="card border-primary mb-3" style="max-width: 70%;">
	<div class="row d-flex justify-content-start">
		<div class="col-4 mx-3 my-3">
			<img width="120%" src="<?= BASEURL; ?>/img/profile/<?= $data['user']['profile']; ?>" alt="Image Not Found">
		</div>
		<div class="col-6">
			<div class="card-body">
				<h5 class="card-title ml-3"><?= $data['user']['nama']; ?></h5>
				<div class="table table-sm">
					<ul class="list-group list-group-flush">
						<tr>
							<li class="list-group-item">
								<td scope="col">Umur</td>
								<td>: <?= $data['user']['umur']; ?></td>
							</li>
						</tr>
						<tr>
							<li class="list-group-item">
								<td scope="col">TTL</td>
								<td>: <?= $data['user']['tempat_lahir']; ?>/<?= $data['user']['tanggal_lahir']; ?></td>
							</li>
						</tr>
						<tr>
							<li class="list-group-item">
								<td scope="col">No HP</td>
								<td>: <?= $data['user']['no_hp']; ?></td>
							</li>
						</tr>
						<tr>
							<li class="list-group-item">
								<td scope="col">Bio</td>
								<td>: <?= $data['user']['bio']; ?></td>
							</li>
						</tr>
						<tr>
							<li class="list-group-item">
								<td scope="col">Alamat</td>
								<td>: <?= $data['user']['alamat']; ?></td>
							</li>
						</tr>
					</ul>
					
				</div>
				
				<!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
			</div>
		</div>
	</div>
</div>

<div class="col-lg-7 col-md-12 col-12 col-sm-12">
	<div class="card">
		<div class="card-header">
			<div class="float-right"> <a href="#" class="btn btn-primary">View All</a> </div>
			<h4>Latest Posts</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Title</th>
							<th>Author</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> Membuat Kegiatan
								<div class="table-links"> in <a href="#">Kegiatan</a>
									<div class="bullet"></div> <a href="#">View</a>
								</div>
							</td>
							<td>
								<a href="#"><img src="<?= BASEURL; ?>/img/img_yovie/img/avatar/avatar-5.jpeg" alt="avatar" width="30" class="rounded-circle mr-1">Yovie Pramudya Sabri</a>
							</td>
							<td> <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a> <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a> </td>
						</tr>
						<tr>
							<td> Membuat Kegiatan
								<div class="table-links"> in <a href="#">Kegiatan</a>
									<div class="bullet"></div> <a href="#">View</a>
								</div>
							</td>
							<td>
								<a href="#"><img src="<?= BASEURL; ?>/img/img_yovie/img/avatar/avatar-5.jpeg" alt="avatar" width="30" class="rounded-circle mr-1">Yovie Pramudya Sabri</a>
							</td>
							<td> <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a> <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a> </td>
						</tr>
						<tr>
							<td> Membuat Kegiatan
								<div class="table-links"> in <a href="#">Kegiatan</a>
									<div class="bullet"></div> <a href="#">View</a>
								</div>
							</td>
							<td>
								<a href="#"><img src="<?= BASEURL; ?>/img/img_yovie/img/avatar/avatar-5.jpeg" alt="avatar" width="30" class="rounded-circle mr-1">Yovie Pramudya Sabri</a>
							</td>
							<td> <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a> <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a> </td>
						</tr>
						<tr>
							<td> Membuat Kegiatan
								<div class="table-links"> in <a href="#">Kegiatan</a>
									<div class="bullet"></div> <a href="#">View</a>
								</div>
							</td>
							<td>
								<a href="#"><img src="<?= BASEURL; ?>/img/img_yovie/img/avatar/avatar-5.jpeg" alt="avatar" width="30" class="rounded-circle mr-1">Yovie Pramudya Sabri</a>
							</td>
							<td> <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a> <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a> </td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="text-center mt-5"><a href="<?= BASEURL; ?>/profile/edit" class="btn btn-primary btn-round">Edit Profile</a></div>
