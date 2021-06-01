<div class="container">
    <div class="form">
        <a href="<?= BASEURL; ?>/home" style="margin-top: 0 !important; justify-content: flex-end; display: flex;">
            <img src="<?= BASEURL; ?>/img/logo.png" alt="Pensejahteraan Pemuda Desa" width="20%">
        </a>
        <h2 style="font-size: calc(1.375rem + 1.5vw);font-weight: 300;line-height: 1.2;">LOGIN</h2>
        <?php if (isset($_POST['submit'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $data['gagallogin'] ?>
            </div>
        <?php endif; ?>
        <form action="<?= BASEURL; ?>/login/signin" method="post">
            <div class="inputBox">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="inputBox">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="inputBox">
                <input type="submit" value="Sign In" name="submit">
            </div>
            <p class="forget">Don't have an account ? <a href="<?= BASEURL; ?>/register" target="_self">Sign Up</a></p>
        </form>
    </div>
</div>