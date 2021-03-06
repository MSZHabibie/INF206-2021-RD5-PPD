<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PPD | <?= $data['judul']; ?></title>
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png" type="image">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= BASEURL; ?>/">PPD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/activity">Activity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/poin">Poin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>