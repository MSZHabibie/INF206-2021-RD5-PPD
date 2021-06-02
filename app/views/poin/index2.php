<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
	<title>PPD</title>
	<!--favicon-->
	<link rel="icon" href="<?= BASEURL; ?>/img/img_yovie/img/avatar/icones.ico" type="image">
	<link rel="stylesheet" href="<?= BASEURL; ?>/modules/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/modules/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/modules/summernote/summernote-lite.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/modules/flag-icon-css/css/flag-icon.min.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/CSS_yovie/css/demo.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/CSS_yovie/css/style.css">
	<link rel="stylesheet" href="<?= BASEURL; ?>/css/CSS_yovie/css/Point.css">
	
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
								<a href="#" class="dropdown-item dropdown-item-unread"> <img alt="image" src="<?= BASEURL; ?>/img/avatar/avatar-1.jpeg" class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc"> <b>Muhammad Syah Zichrullah Habibie</b> membantu membersihkan sampah <b>dalam kegiatan kerja bakti</b> bekerja sama dengan kelompok 2 <b>Done</b>
										<div class="time">15 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item dropdown-item-unread"> <img alt="image" src="<?= BASEURL; ?>/img/avatar/avatar-2.jpeg" class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc"> <b>Siti Mawaddah</b> membantu menyedikan makanan <b>dalam kegiatan maulid</b> bekerja sama dengan kelompok 3 <b>Progress</b>
										<div class="time">12 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item"> <img alt="image" src="<?= BASEURL; ?>/img/avatar/avatar-4.jpeg" class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc"> <b>Khairul Barri Faiz</b> membantu menjemput tamu <b>dalam kegiatan maulid</b> bekerjasama dengan kelompok 3 <b>Done</b>
										<div class="time">16 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item"> <img alt="image" src="<?= BASEURL; ?>/img/avatar/avatar-3.jpeg" class="rounded-circle dropdown-item-img">
									<div class="dropdown-item-desc"> <b>Fiya Yufita</b> membantu menyiapkan keperluan maulid <b>dalam kegiatan maulid</b> bekerjasama dengan kelompok 3 <b>Done</b>
										<div class="time">16 Hours Ago</div>
									</div>
								</a>
								<a href="#" class="dropdown-item"> <img alt="image" src="<?= BASEURL; ?>/img/avatar/avatar-5.jpeg" class="rounded-circle dropdown-item-img">
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
						<div class="sidebar-user-picture"> <img alt="image" src="<?= BASEURL; ?>/img/avatar/avatar-5.jpeg"> </div>
						<div class="sidebar-user-details">
							<div class="user-name">Yovie Pramudya Sabri</div>
							<div class="user-role"> Administrator </div>
						</div>
					</div>
					<ul class="sidebar-menu">
						<li class="menu-header">Dashboard</li>
						<li class="active"> <a href="index.html"><i class="ion ion-speedometer"></i><span>Dashboard</span></a> </li>
						<li class="menu-header">Profile</li>
						<li> <a href="#" ><i class="fas fa-users"></i><span>Profile</span></a></li>
						<li class="menu-header">Activity</li>
						<li> <a href="#" ><i class="fas fa-american-sign-language-interpreting"></i><span>Activity</span></a></li>
						<li> <a href="Point.html" ><i class="fas fa-burn"></i><span>Points</span></a></li>
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
            <div>Point</div>
        </h1>
		<div class="container">
			<div class="card">
				<div class="box">
					<div class="percent">
						<svg>
							<circle cx="70" cy="70" r="70"></circle>
							<circle cx="70" cy="70" r="70"></circle>
						</svg>
						<div class="number">
							<h2>70<span></span></h2>
						</div>
					</div>
					<h2 class="text">Point</h2>
				</div>
			</div>
		
	
		<div class="container">
			<div class="border">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<div class="isian">
				    <img src="<?= BASEURL; ?>/img/img_yovie/belanja.png" >
					<h2>Minuman</h2>
					<h3>Post Title</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Quis, dicta. </p>
					<a href="#" target="_self">Read More</a>
				</div>
			</div>
			<div class="border">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<div class="isian">
					<img src="<?= BASEURL; ?>/img/img_yovie/bie.png" >
					<h2>Makanan</h2>
					<h3>Post Title</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Quis, dicta. !</p>
					<a href="#" target="_self">Read More</a>
				</div>
			</div>
			<div class="border">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<div class="isian">
					<img src="<?= BASEURL; ?>/img/img_yovie/jaringan.png" >
					<h2>Paket</h2>
					<h3>Post Title</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Quis, dicta. </p>
					<a href="#" target="_self">Read More</a>
				</div>
			</div>
			<div class="border">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<div class="isian">
					<img class="gambar" src="Asset/belanja.png" alt="belanja">
					<h2>Minuman</h2>
					<h3>Post Title</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Quis, dicta. </p>
					<a href="#" target="_self">Read More</a>
				</div>
			</div>
			<div class="border">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<div class="isian">
					<img class="gambar" src="Asset/belanja.png" alt="belanja">
					<h2>Minuman</h2>
					<h3>Post Title</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Quis, dicta. </p>
					<a href="#" target="_self">Read More</a>
				</div>
			</div>
			<div class="border">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<div class="isian">
					<img class="gambar" src="Asset/belanja.png" alt="belanja">
					<h2>Minuman</h2>
					<h3>Post Title</h3>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Quis, dicta. </p>
					<a href="#" target="_self">Read More</a>
				</div>
			</div>
	
		</div>
	</div>


					</div>
				</section>
			</div>
		</div>
		</div>
	</div>
	<script src="<?= BASEURL; ?>/modules/jquery.min.js"></script>
	<script src="<?= BASEURL; ?>/modules/popper.js"></script>
	<script src="<?= BASEURL; ?>/modules/tooltip.js"></script>
	<script src="<?= BASEURL; ?>/modules/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= BASEURL; ?>/modules/nicescroll/jquery.nicescroll.min.js"></script>
	<script src="<?= BASEURL; ?>/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
	<script src="<?= BASEURL; ?>/js/sa-functions.js"></script>
	<script src="<?= BASEURL; ?>/js/scripts.js"></script>
	<script src="<?= BASEURL; ?>/js/custom.js"></script>
	<script src="<?= BASEURL; ?>/js/demo.js"></script>
	<script src="https://kit.fontawesome.com/9672737e03.js" crossorigin="anonymous"></script>
</body>

</html>