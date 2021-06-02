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
									<div class="card-body"> 10 </div>
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
										<h4>Online Users</h4>
									</div>
									<div class="card-body"> 47 </div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8 col-md-12 col-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<div class="float-right">
										<div class="btn-group"> <a href="#" class="btn active">Week</a> <a href="#" class="btn">Month</a> <a href="#" class="btn">Year</a> </div>
									</div>
									<h4>Statistics</h4>
								</div>
								<div class="card-body">
									<canvas id="myChart" height="158"></canvas>
									<div class="statistic-details mt-sm-4">
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
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-12 col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4>Recent Activities</h4>
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
						<div class="col-lg-12 col-md-12 col-12 col-sm-12">
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
					</div>
				</section>
			</div>
