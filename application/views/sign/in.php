<div align="center">
	<div class="col-12 col-md-6 no-pad-side">
		<div class="container no-pad-side" style="padding-top: 85px;">
			<div class="col text-center">
				<h3 class="text-cadetblue">
					MY FILM
				</h3>	
			</div>
			<hr>
			<div class="col" align="center">
				<form action="<?= site_url('sign/in') ?>" method="post">
					<div class="col col-md-8 input-group mb-3">
						<input type="email" class="form-control bo-rad-12" name="email" placeholder="Email...">
					</div>
					<div class="col col-md-8 input-group mb-3">
						<input type="password" class="form-control bo-rad-12 password" name="password" id="password" placeholder="Password...">
						<div class="input-group-append">
							<div class="input-group-text bo-rad-12">
								<i class="fas fa-eye-slash" id="togglePassword"></i>
								<!-- <span class="fas fa-eye-slash" id=""></span> -->
							</div>
						</div>
					</div>

					<div class="col col-md-8 mb-3">
						<button type="submit" class="btn noborder bg-cadetblue text-light" style="width:100%;">Sign In 
						</button>
					</div>
					<div class="col col-md-8 mb-3">
						<p align="center" class="mb-3 mt-0">
							Don't have an account ? <a href="<?php echo base_url('login_user/registrasi')?>" style="text-decoration:none;" class="text-blue">Sign Up here !</a>
						</p>
					</div>
					
				</form>	
			</div>

		</div>
	</div>
</div>