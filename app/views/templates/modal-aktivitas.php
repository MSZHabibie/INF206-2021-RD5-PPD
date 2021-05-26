<!-- Modal -->
<div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Aktivitas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/activity/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="text" class="form-control" id="gambar" name="gambar">
                    </div>
                    <div class="form-group mb-3">
                        <label for="syarat" class="form-label">Syarat</label>
                        <input type="text" class="form-control" id="syarat" name="syarat">
                    </div>
                    <div class="form-group mb-3">
                        <label for="maks_peserta" class="form-label">Maksimal Peserta</label>
                        <input type="number" class="form-control" id="maks_peserta" name="maks_peserta">
                    </div>
                    <div class="form-group mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="form-group mb-3">
                        <label for="jam" class="form-label">Jam</label>
                        <input type="time" class="form-control" id="jam" name="jam">
                    </div>
                    <div class="form-group mb-3">
                        <label for="tempat" class="form-label">Tempat</label>
                        <input type="text" class="form-control" id="tempat" name="tempat">
                    </div>
                    <div class="form-group mb-3">
                        <label for="poin" class="form-label">Poin</label>
                        <input type="number" class="form-control" id="poin" name="poin">
                    </div>
                    <div class="form-group mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>