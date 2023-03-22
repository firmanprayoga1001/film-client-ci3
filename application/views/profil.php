<div align="center">
	<div class="col-12 col-md-6 no-pad-side">
		<div class="container no-pad-side" style="padding-top: 85px;">
			<div align="center">
				<div class="col-3 col-md-2">
					<img src="http://192.168.122.45/rest_film/assets/gambar/profil.png" class="img-circle" alt="User Image" width="100%">
				</div>
			</div>

			<div class="col text-center">
				<?php if($this->session->userdata('username')) : ?>
					<a class="nav-link">
						<h6 class="text-cadetblue"><?php echo $this->session->userdata('username'); ?></h6>
					</a>
				<?php else : ?>
					<a href="#modal-login" data-toggle="modal" class="nav-link">
						<h6 class="text-muted">Login / Daftar ?</h6>
					</a>
				<?php endif ; ?>
				
			</div>
			<hr>
		</div>
		<div class="container">
			<div class="row mb-2">
				<div class="col">
					<h6 class="text-left text-muted">History</h6>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row mb-2">
				<div class="col">
					<h6 class="text-left text-muted">My Favourite</h6>
				</div>
			</div>

		</div>
		<hr>
		<div class="container">
			<a href="" style="text-decoration:none;">
				<div class="row mb-2">	
					<div class="col-10 col-md-10">
						<h6 class="text-left text-muted">Privacy Policy</h6>
					</div>
					<div class="col-2 col-md-2">	
						<h6 class="text-right text-muted fa-sharp fa-solid fa-chevron-right"></h6>
					</div>
				</div>
			</a> 
		</div>
		<div class="container">
			<a href="" style="text-decoration:none;">
				<div class="row mb-2">	
					<div class="col-10 col-md-10">
						<h6 class="text-left text-muted">Donation</h6>
					</div>
					<div class="col-2 col-md-2">	
						<h6 class="text-right text-muted fa-sharp fa-solid fa-chevron-right"></h6>
					</div>
				</div>
			</a> 
		</div>
		<div class="container">
			<a href="" style="text-decoration:none;">
				<div class="row mb-2">	
					<div class="col-10 col-md-10">
						<h6 class="text-left text-muted">Copyright Protection</h6>
					</div>
					<div class="col-2 col-md-2">	
						<h6 class="text-right text-muted fa-sharp fa-solid fa-chevron-right"></h6>
					</div>
				</div>
			</a> 
		</div>
		<?php if($this->session->userdata('id_user')) { ?>
			<div class="container">
				<a href="" style="text-decoration:none;">
					<div class="row mb-2">	
						<div class="col-10 col-md-10">
							<h6 class="text-left text-muted">Account</h6>
						</div>
						<div class="col-2 col-md-2">	
							<h6 class="text-right text-muted fa-sharp fa-solid fa-chevron-right"></h6>
						</div>
					</div>
				</a> 
			</div>
			<div class="container">
				<a href="#modal-logout" data-toggle="modal" style="text-decoration:none;">
					<div class="row mb-2">	
						<div class="col-10 col-md-10">
							<h6 class="text-left text-muted">Log out</h6>
						</div>
					</div>
				</a> 
			</div>
		<?php } ?>
	</div>
</div>

<div class="modal fade" id="modal-login" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="col mb-2 mt-2">
				<h1 class="text-cadetblue">MY FILM</h1>
				<hr class="mt-0">

				<div class="col" align="center">
					<form action="<?= site_url('sign/in') ?>" method="post">
						<div class="col input-group mb-3">
							<input type="email" class="form-control bo-rad-12" name="email" placeholder="Email...">
						</div>
						<div class="col input-group mb-3">
							<input type="password" class="form-control bo-rad-12 password" name="password" id="password" placeholder="Password...">
							<div class="input-group-append">
								<div class="input-group-text bo-rad-12">
									<i class="fas fa-eye-slash" id="togglePassword"></i>
									<!-- <span class="fas fa-eye-slash" id=""></span> -->
								</div>
							</div>
						</div>

						<div class="col mb-3">
							<button type="submit" class="btn noborder bg-cadetblue text-light" style="width:100%;">Sign In 
							</button>
						</div>
						<div class="col mb-3">
							<p align="center" class="mb-3 mt-0">
								Don't have an account ? <a href="<?php echo base_url('sign/up')?>" style="text-decoration:none;" class="text-blue">Sign Up here !</a>
							</p>
						</div>
					</form>	
				</div>
			</div>
			
		</div>
	</div>
</div>
<div class="modal fade" id="modal-logout" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="col mb-2 mt-2">
				<h3 class="text-center text-danger">Are you sure to exit ?</h3>
				<hr class="mt-0">
				<div class="col" align="center">
					<div class="col-10 col-md-10 mb-3">
						<a href="<?php echo base_url('sign/out')?>" class="btn btn-sm noborder bg-cadetblue text-light" style="width:100%;">Sign Out 
						</a>
					</div>
					
				</div>
			</div>
			
		</div>
	</div>
</div>