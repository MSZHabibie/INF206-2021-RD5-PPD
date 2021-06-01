<div class="container mb-3">
    <h1>Halaman ubah password</h1>
    <form action="<?= BASEURL ?>/profile/updatePassword" method="post">
        <div class="mb-3">
            <label for="passwordLama" class="form-label">Password Lama</label>
            <input type="password" class="form-control" id="passwordLama" name="passwordLama">
        </div>
        <div class="mb-3">
            <label for="passwordBaru" class="form-label">Password Baru</label>
            <input type="password" class="form-control" id="passwordBaru" name="passwordBaru">
        </div>
        <div class="mb-3">
            <label for="confirmPasswordBaru" class="form-label">Konfirmasi Password Baru</label>
            <input type="password" class="form-control" id="confirmPasswordBaru" name="confirmPasswordBaru">
        </div>
        <button type="button" class="btn btn-danger" onclick="location.href='<?= BASEURL; ?>/dashboard'">Batal</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>