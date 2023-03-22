<div align="center">
	<div class="col-12 col-md-6 no-pad-side">
		<div class="container pad-top-cars no-pad-side">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="http://192.168.122.45/film_rest/assets/gambar/banner1.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="http://192.168.122.45/film_rest/assets/gambar/banner2.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="http://192.168.122.45/film_rest/assets/gambar/banner3.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next"> 
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</button>
			</div>
		</div>

		<?php if ($dataMovie) { ?>
			<div class="container pad-top-2">
				<div class="row mb-2">
					<div class="col">
						<h6 class="text-center">New Movie</h6>
					</div>
				</div>
				<div class="row" id="movie-list">
					<?php foreach (array_slice($dataMovie,0,12) as $dataMovie) { ?>
						<div class="col-md-3 col-4 mb-3">
							<a href="<?php echo base_url('home/detail/'.$dataMovie['id_video'].'/'.$dataMovie['nama_kategori']); ?>" class="text-dark" style="text-decoration: none;">
								<div class="card poster">
									<img src="http://192.168.122.45/rest_film/assets/gambar/thumbnail/<?= $dataMovie['gambar'] ?>" class="card-img-top poster" alt="Poster Film">
									<div class="fs-9 pin-poster-1" style="background-color:cadetblue;">
										<b><?= $dataMovie['resolusi'] ?></b> 
									</div>
									<div class="fs-9 fot-poster-1" style="background-image: linear-gradient(transparent,cadetblue);">
										<b><?= $dataMovie['nama_kategori'] ?></b> 
									</div>
								</div>
								<div class="text-center">
									<h6 class="card-title mt-2 fs-12"><?= $dataMovie['judul_video'] ?></h6>
									<h6 class="card-subtitle fs-12 text-orange"><?= $dataMovie['tahun'] ?></h6>
								</div>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		<?php } ?>
		<?php if ($dataSeries) { ?>
			<div class="container pad-top-2 bg-cadetblue">
				<div class="row mb-2">
					<div class="col">
						<h6 class="text-center text-light">New Series</h6>
					</div>
				</div>
				<div class="row" id="series-list">
					<?php foreach (array_slice($dataSeries,0,12) as $dataSeries) { ?>
						<div class="col-md-3 col-4 mb-3">
							<a href="<?php echo base_url('home/detail/'.$dataSeries['id_video'].'/'.$dataSeries['nama_kategori']); ?>" class="text-dark" style="text-decoration: none;">
								<div class="card poster">
									<img src="http://192.168.122.45/rest_film/assets/gambar/thumbnail/<?= $dataSeries['gambar'] ?>" class="card-img-top poster" alt="Poster Film">
									<div class="fs-9 pin-poster-1" style="background-color:cadetblue;">
										<b><?= $dataSeries['resolusi'] ?></b> 
									</div>
									<div class="fs-9 fot-poster-1" style="background-image: linear-gradient(transparent,cadetblue);">
										<b><?= $dataSeries['nama_kategori'] ?> | <?= $dataSeries['jumlah_episode'] ?> Eps</b> 
									</div>
								</div>
								<div class="text-center text-white">
									<h6 class="card-title mt-2 fs-12"><?= $dataSeries['judul_video'] ?></h6>
									<h6 class="card-subtitle fs-12 text-warning"><?= $dataSeries['tahun'] ?></h6>
								</div>
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		<?php } ?>
		<?php if ($dataKorean) { ?>
			<div class="container pad-top-2">
				<div class="row mb-2">
					<div class="col">
						<h6 class="text-center">Korean Film</h6>
					</div>
				</div>
				<div class="row" id="series-list">
					<?php foreach (array_slice($dataKorean,0,12) as $dataKorean) { ?>
						<div class="col-md-3 col-4 mb-3">
							<a href="<?php echo base_url('home/detail/'.$dataKorean['id_video'].'/'.$dataKorean['nama_kategori']); ?>" class="text-dark" style="text-decoration: none;">
								<div class="card poster">
									<img src="http://192.168.122.45/rest_film/assets/gambar/thumbnail/<?= $dataKorean['gambar'] ?>" class="card-img-top poster" alt="Poster Film">
									<div class="fs-9 pin-poster-1" style="background-color:cadetblue;">
										<b><?= $dataKorean['resolusi'] ?></b> 
									</div>
									<?php if ($dataKorean['nama_kategori'] === 'Korean Series') { ?>
										<div class="fs-9 fot-poster-1" style="background-image: linear-gradient(transparent,cadetblue);">
											<b><?= $dataKorean['nama_kategori'] ?> | <?= $dataKorean['jumlah_episode'] ?> Eps</b> 
										</div>
									<?php } else { ?>
										<div class="fs-9 fot-poster-1" style="background-image: linear-gradient(transparent,cadetblue);">
											<b><?= $dataKorean['nama_kategori'] ?></b> 
										</div>
									<?php } ?>
								</div>
								<div class="text-center">
									<h6 class="card-title mt-2 fs-12"><?= $dataKorean['judul_video'] ?></h6>
									<h6 class="card-subtitle fs-12 text-orange"><?= $dataKorean['tahun'] ?></h6>
								</div>
							</a>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>

	</div>
</diV>	
