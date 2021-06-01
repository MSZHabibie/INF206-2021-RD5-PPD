<div class="container">
    <div class="form">
        <h2>REGISTER</h2>
        <?php if (isset($_POST['submit'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $data['gagalregister'] ?>
            </div>
        <?php endif; ?>
        <form action="<?= BASEURL; ?>/register/create" method="post">
            <div class="inputBox">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="inputBox">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="inputBox">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="inputBox">
                <input type="password" placeholder="Confirm Password" name="password2" required>
            </div>
            <div class="inputBox">
                <input type="submit" value="Sign Up" name="submit">
            </div>
            <p class="forget">have an account ? <a href="<?= BASEURL; ?>/login">Sign In</a></p>
        </form>
    </div>
</div>