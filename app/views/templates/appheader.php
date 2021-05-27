<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
    <title>PPD | <?= $data['judul']; ?></title>
    <!--favicon-->
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png" type="image">
    <link rel="stylesheet" href="<?= BASEURL; ?>/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
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
                            <div class="d-sm-none d-lg-inline-block">Hi, <?= $data['user']['username']; ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="<?= BASEURL; ?>/profile" class="dropdown-item has-icon"> <i class="ion ion-android-person"></i> Profile </a>
                            <a href="<?= BASEURL; ?>/profile/ubahPassword" class="dropdown-item has-icon"> <i class="ion ion-android-person"></i> Ubah Password </a>
                            <a href="<?= BASEURL; ?>/logout" class="dropdown-item has-icon"> <i class="ion ion-log-out"></i> Logout </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand"> <a href="index.html">PPD</a> </div>
                    <div class="sidebar-user">
                        <div class="sidebar-user-picture"> <img alt="image" src="<?= BASEURL; ?>/img/profile/<?= $data['user']['profile']; ?>"> </div>
                        <div class="sidebar-user-details">
                            <div class="user-name"><?= $data['user']['username']; ?></div>
                            <div class="user-role"><?= isset($data['admin']) ? 'Admin' : 'Warga'; ?> </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="<?= $data['class'] === 'Dashboard' ? "active" : ""; ?>"> <a href="<?= BASEURL; ?>/dashboard"><i class="ion ion-speedometer"></i><span>Dashboard</span></a> </li>
                        <li class="menu-header">Profile</li>
                        <li class="<?= $data['class'] === 'Profile' ? "active" : ""; ?>"> <a href="<?= BASEURL; ?>/profile"><i class="fas fa-users"></i><span>Profile</span></a></li>
                        <li class="menu-header">Activity</li>
                        <li class="<?= $data['class'] === 'Activity' ? "active" : ""; ?>"> <a href="<?= BASEURL; ?>/activity"><i class="fas fa-american-sign-language-interpreting"></i><span>Activity</span></a></li>
                        <li class="<?= $data['class'] === 'Poin' ? "active" : ""; ?>"> <a href="<?= BASEURL; ?>/poin"><i class="fas fa-burn"></i><span>Points</span></a></li>
                        <li class="<?= $data['class'] === 'Community' ? "active" : ""; ?>"> <a href="<?= BASEURL; ?>/community"><i class="far fa-address-card"></i><span>Community</span></a> </li>

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