<div class="main-content">
	<section class="section">
		<h1 class="section-header d-flex justify-content-between">
            <div>Profile</div>
			<div class="text-center"><a href="<?= BASEURL; ?>/profile/edit" class="btn btn-primary btn-round">Edit Profile</a></div>
        </h1>
	</section>


		<section>
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
		</section>

