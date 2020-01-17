<div class="jumbotron col-12 text-center">
	<h3 class="font-weight-bold">HASIL TEST</h3>
	<hr style="border: 1px solid grey;">
    <br>
	<div>
		<strong class="d-flex text-uppercase">Nama Pelamar : <?= $this->session->userdata('nama_lengkap') ?></strong>
		<br>
		<strong class="d-flex text-uppercase">Bagian Yang di Ambil : <?= $this->session->userdata('bagian') ?></strong>
	</div>
</div>

<?php 
$soal = $this->db->get_where('tbl_soal',['f_kode_soal'=>$this->session->userdata('bagian')])->result_array(); 
$jwb = $this->db->get_where('tbl_jawaban',['f_email'=>$this->session->userdata('email')])->result_array();
$a=-1;
$score = 0;
?>

<?php foreach($soal as $soal): ?>
	<?php $a++; ?>

<div class="container bg-transparent card p-5">
	<div class="row">
		<div class="col-1">
			<span>No. <?= $soal['f_no_soal'] ?></span>
		</div>

		<div class="col-11">
			<span><?= $soal['f_soal'] ?></span>
		</div>


<div class="ml-3 pl-5 mt-4 col-12">
		<!-- Group of default radios - option 1 -->
		<div class="custom-control custom-radio">
		  <span>A. </span><span><?= $soal['f_opt_a'] ?></span>
		</div>

		<!-- Group of default radios - option 2 -->
		<div class="custom-control custom-radio">
		  <span>B. </span><span><?= $soal['f_opt_b'] ?></span>
		</div>

		<!-- Group of default radios - option 3 -->
		<div class="custom-control custom-radio">
		  <span>C. </span><span><?= $soal['f_opt_c'] ?></span>
		</div>

		<!-- Group of default radios - option 2 -->
		<div class="custom-control custom-radio">
		  <span>D. </span><span><?= $soal['f_opt_d'] ?></span>
		</div>

		<!-- Group of default radios - option 3 -->
		<div class="custom-control custom-radio">
		  <span>E. </span><span><?= $soal['f_opt_e'] ?></span>
		</div>
</div>

		<div class="col-4 badge-info text-center mt-4">
			<strong>JAWABAN YANG BENAR :</strong><span> <?= $soal['f_jawaban'] ?></span>
		</div>		

		<div class="col-4 badge-secondary text-center mt-4">
			<strong>JAWABAN ANDA :</strong><span> <?= $jwb[$a]['f_jawaban_pelamar'] ?></span>
		</div>	

		<?php if($jwb[$a]['f_jawaban_pelamar']==$soal['f_jawaban']): ?>
		<div class="col-4 badge-success text-center mt-4">
			<strong>BENAR</strong>
		</div>
		<?php endif; ?>

		<?php if($jwb[$a]['f_jawaban_pelamar']!=$soal['f_jawaban']): ?>
		<div class="col-4 badge-danger text-center mt-4">
			<strong>SALAH</strong>
		</div>
		<?php endif; ?>

		<?php $score += $jwb[$a]['f_hasil']; ?>

	</div>
</div>


<?php endforeach; ?>
<div class="text-center mt-4" style="position: fixed;top: 45vh;right: 0;">
	<a class="btn btn-outline-pink text-success">
		<h5 class="font-weight-bold">SCORE : <?= $score; ?></h5>
	</a>
</div>

<form action="<?= base_url('pelamar/hasil_test'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
	<!-- Group of default radios - option 2 -->
		<div class="custom-control custom-radio">
		  <input type="text" name="score" value="<?= $score; ?>" hidden>
		</div>

<div class="col-12 text-center mt-4" style="">
	<button class="btn-sm btn-primary btn-outline-primary text-success col-2" >
		<h5 class="text-black font-weight-bold"> Next</h5>
	</button>
</div>
</form>
