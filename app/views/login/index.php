<div class="container">
    <div class="form">
        <h2>LOGIN</h2>
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
            <p class="forget">Forgot password ? <a href="#" target="_self">Click Here</a></p>
            <p class="forget">Don't have an account ? <a href="<?= BASEURL; ?>/register" target="_self">Sign Up</a></p>
        </form>
    </div>
</div>