<!-- Modal -->
<div class="modal fade" id="formModal2" tabindex="-1" aria-labelledby="judulModal2" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="judulModal2">Tambah Voucher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form action="<?= BASEURL; ?>/poin/tambah" method="post">
               <input type="hidden" name="id" id="id">
               <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
               </div>
               <div class="mb-3">
                  <label for="deskripsi" class="form-label">Deskripsi</label>
                  <input type="text" class="form-control" id="deskripsi" name="deskripsi" aria-describedby="emailHelp">
               </div>
               <div class="mb-3">
                  <label for="poin" class="form-label">Poin</label>
                  <input type="number" class="form-control" id="poin" name="poin" aria-describedby="emailHelp">
               </div>
               <div class="mb-3">
                  <label for="gambar" class="form-label">Gambar</label>
                  <input type="text" class="form-control" id="gambar" name="gambar" aria-describedby="emailHelp">
               </div>
               <div class="mb-3">
                  <label for="jumlah" class="form-label">Jumlah</label>
                  <input type="text" class="form-control" id="jumlah" name="jumlah" aria-describedby="emailHelp">
               </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
         </div>
      </div>
   </div>
</div>