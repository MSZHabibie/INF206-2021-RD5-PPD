<h1>Halaman Login</h1>
<button type="button" class="btn btn-primary" onclick="location.href='<?= BASEURL; ?>'" >Kembali ke Home</button>

<div class="container mt-5">
    <form action="<?= BASEURL; ?>/login/signin" method="post">
    <div class="mb-3">
        <label for="InputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" name="email" required>
    </div>
    <div class="mb-3">
        <label for="InputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="InputPassword1" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Sign In</button>
    </form>
</div>