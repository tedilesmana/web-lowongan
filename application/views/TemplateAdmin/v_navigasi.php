<nav class="mb-1 pb-3 pt-3 navbar navbar-expand-lg bg-secondary">
	<a class="navbar-brand text-white ml-5" href="<?= base_url(); ?>">KCBersama</a>
	<span class="domain text-white" style="font-size: 20px;left: -10px;position: relative;top: 3px;">.co.id</span>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item mr-3 active">
				<a class="nav-link text-white" href="<?= base_url('admin/list_soal') ?>">
					<i class="fa fa-list mr-2"></i>Soal Tes
					<span class="sr-only">(current)</span>
				</a>
			</li>
			<li class="nav-item mr-3">
				<a class="nav-link text-white" href="<?= base_url('admin/daftar_pelamar') ?>">
					<i class="fa fa-user mr-2"></i>Daftar Pelamar
				</a>
			</li>
			<li class="nav-item mr-3">
				<a class="nav-link text-white" href="<?= base_url('admin/tambah_lowongan') ?>">
					<i class="fa fa-plus mr-2"></i>Tambah Lowongan
				</a>
			</li>
			<li class="nav-item mr-3">
				<a class="nav-link text-white" href="<?= base_url('auth/logout') ?>">
					<i class="fa fa-arrow-left mr-2"></i>LogOut
				</a>
			</li>
		</ul>
	</div>
</nav>


