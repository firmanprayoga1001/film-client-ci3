<div align="center">
	<div class="col-12 col-md-6 no-pad-side" align="left">
		<div class="container bg-cadetblue player no-pad-side">
			<div class="videoWrapper bg-dark">
				<iframe src="<?= $detailFilm['link_trailer']; ?>?loop=1&controls=6" allow="fullscreen"></iframe>
			</div>

			
			<div class="col pad-bot-1 text-right">
				<a href="whatsapp://send?text=<?= $detailFilm['judul_video']; ?> (<?= $detailFilm['tahun']; ?>) | Sub - Indo | Watch On : <?php echo base_url() ?>home/detail/<?= $detailFilm['id_video']; ?>/<?= $detailFilm['nama_kategori']; ?>" class="btn btn-xs fs-12 text-light">
					<i class="fa-solid fa-up-right-from-square"></i>  Share
				</a>
			</div>
			
		</div>
		<div class="container pad-top-2">
			<div class="row">
				<div class="col-12 col-md-8">
					<div class="row mb-3">
						<div class="col">
							<h6 class="card-title text-muted">Episodes</h6>
							<div class="row">
								<div class="col-1 col-md-1 pad-1">
									<?php if($active_page > 1 ) : ?>
										<div class="bot-eps">                                
											<a href="?page=<?= $active_page - 1; ?>"  class="a-eps">
												<h5 class="fs-12 text-center text-cadetblue">
													<i class="fa-sharp fa-solid fa-chevron-left"></i>
												</h5>
											</a>
										</div> 
									<?php else : ?> 
										<div class="bot-eps">                                
											<a class="a-eps">
												<h5 class="fs-12 text-center text-muted">
													<i class="fa-sharp fa-solid fa-chevron-left"></i>
												</h5>
											</a>
										</div> 
									<?php endif ; ?>
								</div>
								<div class="col-10 col-md-10">
									<div class="row">
										<?php foreach($getEpisodes as $getEpisodes) { ?>
											<?php if($getEpisodes['status'] == 'Hiden') : ?>
												<div class="col-md-2 col-2 pad-1">
													<div class="bot-eps">                       
														<a href=""  class="a-eps">
															<h5 class="fs-12 text-center text-cadetblue">OFF</h5>
															<div class="bot-eps-mask"  style="background-color:grey;" ></div>
														</a>
													</div> 
												</div>         
											<?php else : ?>
												<div class="col-md-2 col-2 pad-1">
													<div class="bot-eps">                        
														<a href="<?php echo base_url('home/detail_eps/'.$getEpisodes['id_episode'].'/'.$getEpisodes['nama_kategori'].'?page='.$active_page) ?>"  class="a-eps">
															<h5 class="fs-12 text-center text-cadetblue"><?= $getEpisodes['urutan'] ;?></h5>
															<div class="bot-eps-mask"  style="background-color:grey;" ></div>
														</a>
													</div> 
												</div>  
											<?php endif ; ?>
										<?php } ?>
									</div>
								</div>
								<div class="col-1 col-md-1 pad-1">
									<?php if($active_page < $count_page ) : ?>
										<div class="bot-eps">                                
											<a href="?page=<?= $active_page + 1; ?>"  class="a-eps">
												<h5 class="fs-12 text-center text-cadetblue">
													<i class="fa-sharp fa-solid fa-chevron-right"></i>
												</h5>
											</a>
										</div>
									<?php else : ?> 
										<div class="bot-eps">                                
											<a class="a-eps">
												<h5 class="fs-12 text-center text-muted">
													<i class="fa-sharp fa-solid fa-chevron-right"></i>
												</h5>
											</a>
										</div>
									<?php endif ; ?>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-3 col-md-3 mb-2">
							<img src="http://192.168.122.45/rest_film/assets/gambar/thumbnail/<?= $detailFilm['gambar'] ?>" class="card-img-top poster" alt="Poster Film">
						</div>
						<div class="col-9 col-md-9 mb-2">
							<h4 class="card-subtitle mt-1 fs-16"><?= $detailFilm['judul_video'] ?> | Trailer</h4>
							<p class="card-title text-orange fs-10"><?= $detailFilm['tahun'] ?> | <?= $detailFilm['nama_kategori'] ?> | <?= $detailFilm['resolusi'] ?> | <?= $detailFilm['jumlah_episode'] ?> Eps | <?= $detailFilm['keterangan'] ?></p>
							<h6 class="card-title text-muted">Genre</h6>
							<p class="card-subtitle text-muted fs-12"><?= $detailFilm['genre'] ?></p>
						</div>
						<div class="col-12 col-md-12 mb-2 mt-2">
							<h6 class="card-title text-muted">Actor</h6>
							<div class="row mb-2">
								<?php foreach ($getActor as $getActor) {?>
									<div class="col-3 col-md-3">
										<?php if ($getActor['link_foto'] == 'Belum Ada') { ?>
											<img src="<?php echo base_url() ?>assets/gambar/profil.png" class="img-circle" width="100%">
										<?php } else { ?>
											<img src="<?= $getActor['link_foto']; ?>" class="img-circle" width="100%">
										<?php } ?>
										<h6 class="card-subtitle fs-9 mt-1 text-muted text-center"><?= $getActor['nama_aktor']; ?></h6>
									</div>
								<?php } ?>
							</div>
							<hr>
							<h6 class="card-title text-muted">Synopsis</h6>
							<p class="card-subtitle text-muted fs-12"><?= $detailFilm['sinopsis'] ?></p>
							<hr>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="row mb-3">
						<div class="col">
							<h6 class="card-subtitle text-muted">Other <?= $detailFilm['nama_kategori'] ?></h6>
						</div>
					</div>
					<div class="row" id="series-list">
						<?php foreach (array_slice($dataSeries,0,12) as $dataSeries) { ?>
							<div class="col-md-6 col-4 mb-3">
								<a href="<?php echo base_url('home/detail/'.$dataSeries['id_video'].'/'.$dataSeries['nama_kategori']); ?>" class="text-dark" style="text-decoration: none;">
									<div class="card poster">
										<img src="http://192.168.122.45/rest_film/assets/gambar/thumbnail/<?= $dataSeries['gambar'] ?>" class="card-img-top poster" alt="Poster Film">
										<div class="fs-9 pin-poster-1" style="background-color:cadetblue;">
											<b><?= $dataSeries['resolusi'] ?></b> 
										</div>
										<div class="fs-9 fot-poster-1" style="background-image: linear-gradient(transparent,cadetblue);">
											<b><?= $dataSeries['jumlah_episode'] ?> Episode</b> 
										</div>
									</div>
									<div class="text-center">
										<h6 class="card-title mt-2 fs-12"><?= $dataSeries['judul_video'] ?></h6>
										<h6 class="card-subtitle fs-12 text-warning"><?= $dataSeries['tahun'] ?></h6>
									</div>
								</a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<!-- <nav class="w-100">
	<div class="nav nav-tabs" id="product-tab" role="tablist">
		<a class="nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Pilih Episode</a>
		<a class="nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Synopsis</a>
	</div>
</nav>
<div class="tab-content p-3" id="nav-tabContent">
	<div class="tab-panel fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
		<div class="row">
			<?php foreach($getEpisodes as $getEpisodes) { ?>
				<?php if($getEpisodes['status'] == 'Hiden') : ?>
					<div class="col-md-2 col-2 mb-2 pad-1">
						<div class="bot-eps">                                
							<a href=""  class="a-eps">
								<h5 align="center" class="fs-12" style="color:cadetblue;">OFF</h5>
								<div class="bot-eps-mask"  style="background-color:grey;" ></div>
							</a>
						</div> 
					</div>         

				<?php else : ?>
					<div class="col-md-2 col-2 mb-2 pad-1">
						<div class="bot-eps">                                
							<a href="<?php echo base_url('dasbor/detail_episode/'.$getEpisodes['id_episode']) ?>"  class="a-eps">
								<h5 align="center" class="fs-12" style="color:cadetblue;"><?= $getEpisodes['urutan'] ;?></h5>
								<div class="bot-eps-mask"  style="background-color:grey;" ></div>
							</a>
						</div> 
					</div>  
				<?php endif ; ?>
			<?php } ?>
		</div>
	</div>
</div>
<div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
	<?= $detailFilm['sinopsis']; ?>
</div> -->