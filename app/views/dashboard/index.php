<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
	<title>PPD</title>
	<!--favicon-->
	<link rel="icon" href="<?= BASEURL; ?>/img/img_yovie/img/img_yovie/img/avatar/icones.ico" type="image">
	<link rel="stylesheet" href="<?= BASEURL; ?>/modules/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/modules/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/modules/summernote/summernote-lite.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/modules/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/CSS_yovie/css/demo.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/CSS_yovie/css/style.css">
</head>

<body>
	<div id="app">
		<div class="main-wrapper">
			<div class="navbar-bg"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<form class="form-inline mr-auto">
					<ul class="navbar-nav mr-3">
						<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
						<li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
					</ul>
					<div class="search-element">
						<input class="form-control" type="search" placeholder="Search" aria-label="Search">
						<button class="btn" type="submit"><i class="ion ion-search"></i></button>
					</div>
				</form>
				<ul class="navbar-nav navbar-right">
					<li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="ion ion-ios-bell-outline"></i></a>
						<div class="dropdown-menu dropdown-list dropdown-menu-right">
							<div class="dropdown-header">Notifications
								<div class="float-right"> <a href="#">View All</a> </div>
							</div>
							<div class="dropdown-list-content">
								<a href="#" class="dropdown-item dropdown-item-unread"> <img alt="image" src="<?= BASEURL; ?>/img/img_yovie/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc"> <b>Muhammad Syah Zichrullah Habibie</b> membantu membersihkan sampah <b>dalam kegiatan kerja bakti</b> bekerja sama dengan kelompok 2 <b>Done</b>
										<div class="time">15 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item dropdown-item-unread"> <img alt="image" src="<?= BASEURL; ?>/img/img_yovie/img/avatar/avatar-2.jpeg" class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc"> <b>Siti Mawaddah</b> membantu menyedikan makanan <b>dalam kegiatan maulid</b> bekerja sama dengan kelompok 3 <b>Progress</b>
										<div class="time">12 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item"> <img alt="image" src="<?= BASEURL; ?>/img/img_yovie/img/avatar/avatar-4.jpeg" class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc"> <b>Khairul Barri Faiz</b> membantu menjemput tamu <b>dalam kegiatan maulid</b> bekerjasama dengan kelompok 3 <b>Done</b>
										<div class="time">16 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item"> <img alt="image" src="<?= BASEURL; ?>/img/img_yovie/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc"> <b>Fiya Yufita</b> membantu menyiapkan keperluan maulid <b>dalam kegiatan maulid</b> bekerjasama dengan kelompok 3 <b>Done</b>
										<div class="time">16 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item"> <img alt="image" src="<?= BASEURL; ?>/img/img_yovie/img/avatar/avatar-5.jpeg" class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc"> <b>Yovie Pramudya Sabri</b> membantu menyiapkan keperluan dimesjid <b>dalam kegiatan maulid</b> bekerjasama dengan kelompok 3 <b>Done</b>
										<div class="time">Yesterday</div>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg"> <i class="ion ion-android-person d-lg-none"></i>
							<div class="d-sm-none d-lg-inline-block">Hi, Yovie Pramudya Sabri</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<a href="#" class="dropdown-item has-icon"> <i class="ion ion-android-person"></i> Profile </a>
							<a href="login.html" class="dropdown-item has-icon"> <i class="ion ion-log-out"></i> Logout </a>
						</div>
					</li>
				</ul>
			</nav>
			<div class="main-sidebar">
				<aside id="sidebar-wrapper">
					<div class="sidebar-brand"> <a href="index.html">PPD</a> </div>
					<div class="sidebar-user">
						<div class="sidebar-user-picture"> <img alt="image" src="<?= BASEURL; ?>/img/img_yovie/img/avatar/avatar-5.jpeg"> </div>
						<div class="sidebar-user-details">
							<div class="user-name">Yovie Pramudya Sabri</div>
							<div class="user-role"> Administrator </div>
						</div>
					</div>
					<ul class="sidebar-menu">
						<li class="menu-header">Dashboard</li>
						<li class="active"> <a href="index.html"><i class="ion ion-speedometer"></i><span>Dashboard</span></a> </li>
						<li class="menu-header">Profile</li>
						<li> <a href="#"><i class="fas fa-users"></i><span>Profile</span></a></li>
						<li class="menu-header">Activity</li>
						<li> <a href="#"><i class="fas fa-american-sign-language-interpreting"></i><span>Activity</span></a></li>
						<li> <a href="#"><i class="fas fa-burn"></i><span>Points</span></a></li>
						<li> <a href="table.html"><i class="far fa-address-card"></i><span>Community</span></a> </li>


						<li class="menu-header">More</li>
						<li> <a href="#" class="has-dropdown"><i class="ion ion-ios-nutrition"></i> About as</a>
							<ul class="menu-dropdown">
								<li><a href="#"><i class="ion ion-ios-circle-outline"></i> Menu 1</a></li>
								<li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Menu 2</a>
									<ul class="menu-dropdown">
										<li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
										<li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
										<li><a href="#" class="has-dropdown"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a>
											<ul class="menu-dropdown">
												<li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 1</a></li>
												<li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 2</a></li>
												<li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 3</a></li>
											</ul>
										</li>
										<li><a href="#"><i class="ion ion-ios-circle-outline"></i> Child Menu 4</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li> <a href="#"><i class="ion ion-heart"></i> Contact <div class="badge badge-primary">10</div></a> </li>
						<li> <a href="credits.html"><i class="ion ion-ios-information-outline"></i> Alert</a> </li>
					</ul>
				</aside>
			</div>
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
						<div class="col-lg-5 col-md-12 col-12 col-sm-12">
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
					</div>
				</section>
			</div>
			<footer class="main-footer">
				<div class="footer-left"> Copyright &copy; RD 5 2021
					<div class="bullet"></div> Design By <a href="#">RD 5</a>
				</div>
				<div class="footer-right"></div>
			</footer>
		</div>
	</div>
	<script src="<?= BASEURL; ?>/modules/jquery.min.js"></script>
	<script src="<?= BASEURL; ?>/modules/popper.js"></script>
	<script src="<?= BASEURL; ?>/modules/tooltip.js"></script>
	<script src="<?= BASEURL; ?>/modules/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= BASEURL; ?>/modules/nicescroll/jquery.nicescroll.min.js"></script>
	<script src="<?= BASEURL; ?>/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
	<script src="<?= BASEURL; ?>/js/js_yovie/js/sa-functions.js"></script>
	<script src="<?= BASEURL; ?>/modules/chart.min.js"></script>
	<script src="<?= BASEURL; ?>/modules/summernote/summernote-lite.js"></script>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
				datasets: [{
					label: 'Statistics',
					data: [460, 458, 330, 502, 430, 610, 488],
					borderWidth: 2,
					backgroundColor: 'rgb(87,75,144)',
					borderColor: 'rgb(87,75,144)',
					borderWidth: 2.5,
					pointBackgroundColor: '#ffffff',
					pointRadius: 4
				}]
			},
			options: {
				legend: {
					display: false
				},
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true,
							stepSize: 150
						}
					}],
					xAxes: [{
						gridLines: {
							display: false
						}
					}]
				},
			}
		});
	</script>
	<script src="https://kit.fontawesome.com/9672737e03.js" crossorigin="anonymous"></script>
	<script src="<?= BASEURL; ?>/js/js_yovie/js/scripts.js"></script>
	<script src="<?= BASEURL; ?>/js/js_yovie/js/custom.js"></script>
	<script src="<?= BASEURL; ?>/js/js_yovie/js/demo.js"></script>
</body>

</html>