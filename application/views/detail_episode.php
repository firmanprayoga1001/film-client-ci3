<div align="center">
	<div class="col-12 col-md-6 no-pad-side" align="left">
		<div class="container bg-cadetblue player no-pad-side">
			<div class="videoWrapper">
				<?php if ($detailEps['nama_player'] == 'Vdocipher') { ?>
					<iframe src="https://player.vdocipher.com/v2/?<?= $responses; ?>" allowFullScreen="true" allow="encrypted-media"></iframe>
				<?php } else { ?>
					<iframe src="<?= $detailEps['link_nonton']; ?>" allowFullScreen="true" allow="encrypted-media"></iframe>
				<?php } ?>

			</div>
			<div class="col pad-bot-1 text-right">
				<a href="<?= $detailEps['link_download'];?>" target="_blank" class="btn btn-xs fs-12 text-light">
					<i class="fa-solid fa-arrow-down"></i>  Download
				</a>
				<a href="whatsapp://send?text=<?= $detailEps['judul_video']; ?> (<?= $detailEps['tahun']; ?>) - Episode <?= $detailEps['urutan']; ?> | Sub - Indo | Watch On : <?php echo base_url() ?>home/detail_eps/<?= $detailEps['id_episode']; ?>/<?= $detailEps['nama_kategori']; ?>?page=<?= $active_page; ?>" class="btn btn-xs fs-12 text-light">
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
												<?php if( $getEpisodes['id_episode'] == $detailEps['id_episode']) : ?>

													<div class="col-md-2 col-2 pad-1">
														<div class="bot-eps">                        
															<a  class="a-eps">
																<h5 class="fs-12 text-center text-orange"><?= $getEpisodes['urutan'] ;?></h5>
																<div class="bot-eps-mask bg-cadetblue" style="opacity: 100%"><h5 class="fs-12 text-center text-light"><?= $getEpisodes['urutan'] ;?></h5></div>
																
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
							<img src="http://192.168.122.45/rest_film/assets/gambar/thumbnail/<?= $detailEps['gambar'] ?>" class="card-img-top poster" alt="Poster Film">
						</div>
						<div class="col-9 col-md-9 mb-2">
							<h4 class="card-subtitle fs-16 mt-1"><?= $detailEps['judul_video'] ?> | Episode <?= $detailEps['urutan'];?></h4>
							<p class="card-title text-orange fs-12"><?= $detailEps['tahun'] ?> | <?= $detailEps['nama_kategori'] ?> | <?= $detailEps['resolusi'] ?> | <?= $detailEps['jumlah_episode'] ?> Eps | <?= $detailEps['keterangan'] ?></p>
							<h6 class="card-title text-muted">Genre</h6>
							<p class="card-subtitle text-muted fs-12"><?= $detailEps['genre'] ?></p>
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
							<p class="card-subtitle text-muted fs-12"><?= $detailEps['sinopsis'] ?></p>
							<hr>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="row mb-3">
						<div class="col">
							<h6 class="card-subtitle text-muted">Other <?= $detailEps['nama_kategori'] ?></h6>
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