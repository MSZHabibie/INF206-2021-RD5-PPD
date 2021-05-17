			<div class="main-content">
				<section class="section">
					<h1 class="section-header">
						<div>Activity</div>
					</h1>
				</section>

				<table width="300">
					<tr>
						<td>
							<img width="300px" height="200px" src="https://www.denpasarkota.go.id/uploads/berita/Sambut_Bulan_Bakti_Gotong_Royong_306847.jpg" alt="Gotong Royong">
						</td>
						<td>
							<img width="300px" height="200px" src="https://infopublik.id/assets/upload/headline//Senam.JPG" alt="Senam Pagi">
						</td>
						<td>
							<img width="300px" height="200px" src="https://img.gesuri.id/img/content/2019/11/22/54716/cegah-banjir-pemkab-brebes-galakkan-penghijauan-YP2nG8ZmOk.jpg" alt="Penghijauan">
						</td>
					</tr>

					<tr align="center">
						<td><b>Gotong Royong</b></td>
						<td><b>Senam Pagi</b></td>
						<td><b>Penghijauan</b></td>
					</tr>

					<tr>
						<td><b>Gotong royong</b> adalah kegiatan yang dilakukan dengan bekerja sama untuk mencapai hasil yang diinginkan</td>
						<td><b>Senam pagi</b> adalah suatu aktifitas yang dilakukan pada pagi hari untuk menjaga kebugaran jasmani</td>
						<td><b>Penghijauan</b> adalah salah satu bentuk peran dalam menjaga lingkungan dengan melakukan penanaman pepohonan</td>
					</tr>
				</table>

				<div class="row row-cols-1 row-cols-md-3 g-4">
					<?php foreach ($data['aktivitas'] as $aktivitas) : ?>
						<div class="col mb-3">
							<div class="card h-100" style="width: 18rem;">
								<img src="<?= BASEURL; ?>/img/<?= $aktivitas['gambar'] ?>" class="card-img-top" alt="">
								<div class="card-body">
									<h5 class="card-title"><?= $aktivitas['nama'] ?></h5>
									<p class="card-text"><?= $aktivitas['deskripsi'] ?></p>
								</div>
								<div class="card-footer">
									<a href="<?= BASEURL; ?>/activity/detail/<?= $aktivitas['id'] ?>" class="btn btn-primary">Detail</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>