<h1>Halaman register</h1>
<button type="button" class="btn btn-primary" onclick="location.href='<?= BASEURL; ?>'" >Kembali ke Home</button>

<div class="container mt-5">
    <form action="<?= BASEURL; ?>/register/create" method="post">
    <div class="mb-3">
        <label for="InputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" name="email" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="InputUsername" class="form-label">Username</label>
        <input type="text" class="form-control" id="InputUsername" name="username" required>
    </div>
    <div class="mb-3">
        <label for="InputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="InputPassword1" name="password" required>
    </div>
    <div class="mb-3">
        <label for="InputPassword2" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="InputPassword2" name="password2" required>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
    </form>
</div>