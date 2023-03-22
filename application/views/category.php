<div align="center">
	<div class="col-12 col-md-6 no-pad-side">

		<div class="container pad-top-nav">
			<div class="row justify-content-center">
				<div class="col-md-8 ">
					<h6 class="text-center mt-2"><?= $category ?></h6>
				</div>
			</div>
			<hr class="mt-1">
			<div class="row" id="series-list">
				<?php foreach (array_slice($dataFilm,0,12) as $dataFilm) { ?>
					<div class="col-md-3 col-4 mb-3">
						<a href="<?php echo base_url('home/detail/'.$dataFilm['id_video'].'/'.$dataFilm['nama_kategori']); ?>" class="text-dark" style="text-decoration: none;">
							<div class="card poster">
								<img src="http://192.168.122.45/rest_film/assets/gambar/thumbnail/<?= $dataFilm['gambar'] ?>" class="card-img-top poster" alt="Poster Film">
								<div class="fs-9 pin-poster-1" style="background-color:cadetblue;">
									<b><?= $dataFilm['resolusi'] ?></b> 
								</div>
								<?php if ($dataFilm['nama_kategori'] === 'Korean Series') { ?>
									<div class="fs-9 fot-poster-1" style="background-image: linear-gradient(transparent,cadetblue);">
										<b><?= $dataFilm['nama_kategori'] ?> | <?= $dataFilm['jumlah_episode'] ?> Episode</b> 
									</div>
								<?php } else { ?>
									<div class="fs-9 fot-poster-1" style="background-image: linear-gradient(transparent,cadetblue);">
										<b><?= $dataFilm['nama_kategori'] ?></b> 
									</div>
								<?php } ?>
							</div>
							<div class="text-center">
								<h6 class="card-title mt-2 fs-12"><?= $dataFilm['judul_video'] ?></h6>
								<h6 class="card-subtitle fs-12 text-orange"><?= $dataFilm['tahun'] ?></h6>
							</div>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>

	</div>
</div>