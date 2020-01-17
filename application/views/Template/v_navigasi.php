<nav class="mb-1 pb-3 pt-3 navbar navbar-expand-lg bg-secondary">
	<a class="navbar-brand text-white ml-5" href="<?= base_url(); ?>">KCBersama</a>
	<span class="domain text-white" style="font-size: 20px;left: -10px;position: relative;top: 3px;">.co.id</span>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
		<ul class="navbar-nav ml-auto">


			<?php if($this->session->userdata('email')): ?>
			<li class="nav-item">
				<a class="nav-link text-white mr-5" href="<?= base_url('pelamar/pengumuman'); ?>">
					<i class="fa fa-info mr-2"></i>Pengumuman
				</a>
			</li>
			<?php endif; ?>


			<?php if(!$this->session->userdata('email')): ?>
			<li class="nav-item">
				<a class="nav-link text-white mr-5" href="<?= base_url('home/login'); ?>">
					<i class="fa fa-user mr-2"></i>Login
				</a>
			</li>
			<?php endif; ?>


			<?php if($this->session->userdata('email')): ?>
			<li class="nav-item">
				<a class="nav-link text-white mr-5" href="<?= base_url('auth/logout'); ?>">
					<i class="fa fa-user mr-2"></i>Logout
				</a>
			</li>
			<?php endif; ?>

			<!-- 
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-user"></i> Profile
				</a>

				<div class="dropdown-menu dropdown-menu-right dropdown-info mt-2" aria-labelledby="navbarDropdownMenuLink-4">
					<a class="dropdown-item" href="#">My account</a>
					<a class="dropdown-item" href="#">Log out</a>
				</div>
			</li> -->
		</ul>
	</div>
</nav>