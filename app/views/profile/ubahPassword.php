<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/CSS_yovie/ubahpass.css ">
</head>

<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0" ;></div>
            <div class="square" style="--i:1" ;></div>
            <div class="square" style="--i:2" ;></div>
            <div class="square" style="--i:3" ;></div>
            <div class="square" style="--i:4" ;></div>
            <div class="container">
                <div class="form">
                    <h2 style="font-size: calc(1.250rem + 1.5vw);font-weight: 300;line-height: 0.7;">Ubah Password</h2>
                    <?php if (isset($_POST['submit'])) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $data['gagalubahpassword'] ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= BASEURL ?>/profile/updatePassword" method="post">
                        <div class="inputBox">
                            <input type="password" placeholder="Password Lama" name="passwordLama" required>
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Password Baru" name="passwordBaru" required>
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Konfirmasi Password Baru" name="confirmPasswordBaru" required>
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="OK" name="submit">
                        </div>
                        <div class="inputBox">
                            <button type="button" onclick="location.href='<?= BASEURL; ?>/dashboard'">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>