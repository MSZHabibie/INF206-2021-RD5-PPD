			<div class="main-content">
				<section class="section">
					<h1 class="section-header">
						<div>Dashboard</div>
					</h1>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="card card-sm-3">
								<div class="card-icon bg-primary"> <i class="ion ion-person"></i> </div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Total Admin</h4>
									</div>
									<div class="card-body"> <?= $data['jumlah_admin'] ?> </div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="card card-sm-3">
								<div class="card-icon bg-danger"> <i class="ion ion-ios-paper-outline"></i> </div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>News</h4>
									</div>
									<div class="card-body"> 42 </div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-12">
							<div class="card card-sm-3">
								<div class="card-icon bg-success"> <i class="ion ion-record"></i> </div>
								<div class="card-wrap">
									<div class="card-header">
										<h4>Total Users</h4>
									</div>
									<div class="card-body"> <?= $data['jumlah_warga'] ?> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8 col-md-12 col-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="float-right text-secondary">
										<!-- <div class="btn-group"> <a href="#" class="btn active">Week</a> <a href="#" class="btn">Month</a> <a href="#" class="btn">Year</a> </div> -->
										Our Villagers in last 7-days
									</div>
									<h4>Statistics</h4>
								</div>
								<div class="card-body">
			
									<canvas id="myChart" height="158" data-total-statistic="<?= count($data['data_statistic']) ?>"
										<?php $counter=0; foreach ($data['data_statistic'] as $statistic) : ?>
											data-statistic-<?= $counter ?> = "<?= $statistic["COUNT(created_at)"] ?>"
											data-statistic-label-<?= $counter++ ?> = "<?= $statistic["DATE(created_at)"] ?>"
										<?php endforeach ?>
									></canvas>
									<!-- <div class="statistic-details mt-sm-4">
										<div class="statistic-details-item"> <small class="text-muted"><span class="text-primary"><i class="ion-arrow-up-b"></i></span> 7%</small>
											<div class="detail-value">43 points</div>
											<div class="detail-name">Hari ini</div>
										</div>
										<div class="statistic-details-item"> <small class="text-muted"><span class="text-danger"><i class="ion-arrow-down-b"></i></span> 23%</small>
											<div class="detail-value">243 points</div>
											<div class="detail-name">Minggu ini</div>
										</div>
										<div class="statistic-details-item"> <small class="text-muted"><span class="text-primary"><i class="ion-arrow-up-b"></i></span>9%</small>
											<div class="detail-value">250 points</div>
											<div class="detail-name">Bulan ini</div>
										</div>
										<div class="statistic-details-item"> <small class="text-muted"><span class="text-primary"><i class="ion-arrow-up-b"></i></span> 19%</small>
											<div class="detail-value">320 points</div>
											<div class="detail-name">Tahun</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4>Member Quotes</h4>
								</div>
								<div class="card-body">
									<ul class="list-unstyled list-unstyled-border">
										<li class="media"> <img class="mr-3 rounded-circle" width="50" src="<?= BASEURL; ?>/img/img_yovie/img/avatar/avatar-1.jpeg" alt="avatar">
											<div class="media-body">
												<div class="float-right"><small>10m</small></div>
												<div class="media-title">Muhammad Syah Zichrullah Habibie</div> <small>Cita citaku bersamamu.</small>
											</div>
										</li>
										<li class="media"> <img class="mr-3 rounded-circle" width="50" src="<?= BASEURL; ?>/img/img_yovie/img/avatar/avatar-2.jpeg" alt="avatar">
											<div class="media-body">
												<div class="float-right"><small>10m</small></div>
												<div class="media-title">Siti Mawaddah</div> <small>Cita citaku bersamamu.</small>
											</div>
										</li>
										<li class="media"> <img class="mr-3 rounded-circle" width="50" src="<?= BASEURL; ?>/img/img_yovie/img/avatar/avatar-3.jpeg" alt="avatar">
											<div class="media-body">
												<div class="float-right"><small>10m</small></div>
												<div class="media-title">Fiya yufita</div> <small>Cita citaku bersamamu.</small>
											</div>
										</li>
										<li class="media"> <img class="mr-3 rounded-circle" width="50" src="<?= BASEURL; ?>/img/img_yovie/img/avatar/avatar-4.jpeg" alt="avatar">
											<div class="media-body">
												<div class="float-right"><small>10m</small></div>
												<div class="media-title">Khairul Barri Faiz</div> <small>Cita citaku bersamamu.</small>
											</div>
										</li>
									</ul>
									<div class="text-center"> <a href="#" class="btn btn-primary btn-round">
											View All
										</a> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- <div class="col-lg-5 col-md-12 col-12 col-sm-12">
							<form method="post" class="needs-validation" novalidate="">
								<div class="card">
									<div class="card-header">
										<h4>Quick Draft</h4>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label>Title</label>
											<input type="text" name="title" class="form-control" required>
											<div class="invalid-feedback"> Please fill in the title </div>
										</div>
										<div class="form-group">
											<label>Content</label>
											<textarea class="summernote-simple"></textarea>
										</div>
									</div>
									<div class="card-footer">
										<button class="btn btn-primary">Save Draft</button>
									</div>
								</div>
							</form>
						</div> -->
						<div class="col-lg-12 col-md-12 col-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4>Riwayat Aktivitas</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>Waktu</th>
													<th>Aktivitas</th>
													<th>Poin</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($data['riwayat'] as $riwayat) : ?>
													<tr>
														<td> <?= $riwayat['waktu']; ?>
															<div class="table-links"> in | <a href="<?= BASEURL; ?>/activity/detail/<?= $riwayat['id'] ?>">View</a>
															</div>
														</td>
														<td>
															<a href="#"><img src="<?= BASEURL; ?>/img/activity/<?= $riwayat['gambar'] ?>" alt="avatar" width="30" height="30" class="rounded-circle mr-1"><?= $riwayat['nama']; ?></a>
														</td>
														<td><p class="badge bg-success"> + <?= $riwayat['poin']; ?> </p></td>
													</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-header">
									<h4>Riwayat Voucher</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-striped">
											<thead>
												<tr>
													<th>Waktu</th>
													<th>Voucher</th>
													<th>Poin</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($data['riwayat2'] as $riwayat2) : ?>
													<tr>
														<td> <?= $riwayat2['waktu']; ?>
															<div class="table-links"> in | <a href="<?= BASEURL; ?>/poin">View</a>
															</div>
														</td>
														<td>
															<a href="#"><img src="<?= BASEURL; ?>/img/poin/<?= $riwayat2['gambar'] ?>" alt="avatar" width="30" height="30" class="rounded-circle mr-1"><?= $riwayat2['nama']; ?></a>
														</td>
														<td><p class="badge bg-danger"> - <?= $riwayat2['poin']; ?> </p></td>
													</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
