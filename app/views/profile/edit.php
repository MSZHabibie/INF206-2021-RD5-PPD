<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="icon" href="<?= BASEURL; ?>/img/logo.png" type="image">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/CSS_yovie/Editprofile.css">
</head>

<body>
    <section>
        <div class="container">
            <h2>Edit Profile</h2>
            <form action="<?= BASEURL; ?>/profile/<?= isset($_SESSION['admin']) ? 'updateAdmin' : 'update'; ?>" method="post">
                <input type="hidden" name="id" id="id" value="<?= $data['user']['id'] ?>">
                <div class="row100">
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="nama" required="required" value="<?= $data['user']['nama'] ?>">
                            <span class="text">Nama</span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inputBox">
                            <input type="number" min="0" name="umur" required="required" value="<?= $data['user']['umur'] ?>">
                            <span class="text">Umur</span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>

                <div class="row100">
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="tempat_lahir" required="required" value="<?= $data['user']['tempat_lahir'] ?>">
                            <span class="text">Tempat lahir</span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inputBox">
                            <input type="date" name="tanggal_lahir" value="<?= $data['user']['tanggal_lahir'] ?>">
                            <span class="text">Tanggal lahir</span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inputBox">
                            <input type="tel" name="no_hp" required="required" value="<?= $data['user']['no_hp'] ?>">
                            <span class="text">No HP</span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>

                <div class="row100">
                    <div class="col">
                        <div class="inputBox textarea">
                            <textarea name="bio" required="required"><?= $data['user']['bio'] ?></textarea>
                            <span class="text">Bio</span>
                            <span class="line"></span>
                        </div>
                    </div>

                    <div class="col">
                        <div class="inputBox textarea">
                            <textarea name="alamat" required="required"><?= $data['user']['alamat'] ?></textarea>
                            <span class="text">Alamat</span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>

                <div class="row100">
                    <div class="col">
                        <a href="<?= BASEURL; ?>/profile">Cancel</a>
                    </div>
                    <div class="col">
                        <input type="submit" value="Save">
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>