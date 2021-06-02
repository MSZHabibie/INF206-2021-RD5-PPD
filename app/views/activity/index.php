<div class="main-content">
				<section class="section">
					<h1 class="section-header">
						<div>Activity</div>
					</h1>
				</section>

				<!-- <table width="300">
					<tr>
						<?php foreach ($data['aktivitas'] as $aktivitas) : ?>
							<td>
								<img width="300px" height="200px" src="<?= BASEURL; ?>/img/activity/<?= $aktivitas['gambar'] ?>" alt="<?= $aktivitas['nama'] ?>">
							</td>
						<?php endforeach; ?>
					</tr>

					<tr align="center">
						<?php foreach ($data['aktivitas'] as $aktivitas) : ?>
							<td><b><?= $aktivitas['nama'] ?></b></td>
						<?php endforeach; ?>
					</tr>

					<tr>
						<?php foreach ($data['aktivitas'] as $aktivitas) : ?>
							<td><?= $aktivitas['deskripsi'] ?></td>
						<?php endforeach; ?>
					</tr>

					<tr>
						<?php foreach ($data['aktivitas'] as $aktivitas) : ?>
							<td>
								<div class="text-center">
									<a href="<?= BASEURL; ?>/activity/detail/<?= $aktivitas['id'] ?>" class="btn btn-primary btn-round">Detail</a>
								</div>
								<div class="text-right">
									<?php $waktu = round((strtotime($aktivitas['tanggal']) - strtotime(date("Y-m-d"))) / (60 * 60 * 24)); ?>
									<?php if ($waktu >= 0) : ?>
										<small><?= $waktu ?> Hari Lagi</small>
									<?php else : ?>
										<small>Selesai</small>
									<?php endif; ?>
								</div>
							</td>
						<?php endforeach; ?>
					</tr>
				</table> -->

				<div class="row row-cols-1 row-cols-md-3 g-4">
					<?php foreach ($data['aktivitas'] as $aktivitas) : ?>
						<div class="col mb-3">
							<div class="card h-100" style="width: 18rem;">
								<img src="<?= BASEURL; ?>/img/activity/<?= $aktivitas['gambar'] ?>" class="card-img-top" alt="">
								<div class="card-body">
									<h5 class="card-title"><?= $aktivitas['nama'] ?></h5>
									<p class="card-text"><?= $aktivitas['deskripsi'] ?></p>
								</div>
								<div class="card-footer">
									<a href="<?= BASEURL; ?>/activity/detail/<?= $aktivitas['id'] ?>" class="btn btn-primary">Detail</a>
									<div class="text-right text-secondary">
										<?php $waktu = round((strtotime($aktivitas['tanggal']) - strtotime(date("Y-m-d"))) / (60 * 60 * 24)); ?>
										<?php if ($waktu >= 0) : ?>
											<small><?= $waktu ?> Hari Lagi</small>
										<?php else : ?>
											<small>Selesai</small>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>