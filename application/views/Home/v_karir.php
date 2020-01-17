<div class="container">
	<div class="row">
		<div class="text-center col-12 mt-5">
			<h4 class="font-weight-bold">INFO LOWONGAN KERJA PT. KAWAN LAMA SEJAHTERA CIKARANG</h4>
		</div>
	</div>
</div>



<?php $loker = $this->db->get('tbl_lowongan')->result_array(); ?>
<?php foreach ($loker as $loker): ?>
<?php $syarat = explode('=>', $loker['f_syarat']);
$bagian = $this->db->get_where('tbl_department',['f_kode_bag'=> $loker['f_kode_bag']])->row_array();
 ?>




<div class="container mt-5 col-md-6">
	<div class="row">
		<div class="card col-12">

			<div class="card-header">
				<div class="row">
					<span class="col-7">
						<h5>Posisi : <?= $bagian['f_nama_bagian']; ?></h5>
					</span>
					<span class="col-5">
						<h5>Post : <?= $loker['f_tgl_post'] ?></h5>
					</span>
				</div>
			</div>
			<div class="card-body text-center">
				<h4 class="font-weight-bold">PERSYARATAN</h4>
				<hr style="border: 0.5px solid grey;">
				<ul class="list-unstyled">

				<?php foreach($syarat as $syarat): ?>
					<li><?= $syarat; ?>.</li>
				<?php endforeach; ?>


				</ul>
				<a href="<?= base_url('home/daftar_karir/');echo($loker['f_kode_bag']); ?>" class="btn btn-success">DAFTAR</a>
			</div>
			<div class="card-footer">
				<div class="row">
					<span class="col-6">
						<h5>Pendaftaran Paling Lambat : <?= $loker['f_tgl_penutupan'] ?></h5>
					</span>
				</div>
			</div>

		</div>
	</div>
</div>




<?php endforeach; ?>