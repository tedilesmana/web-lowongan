<script type="text/javascript" src="<?= base_url('assets/'); ?>printThis.js"></script>
<button id="btnPrintArea" class="btn btn-success">Print All</button>
<div id="printArea">
	

<div class="jumbotron col-12 text-center">
	<h3 class="font-weight-bold mb-3">SOAL TEST</h3>
	<div>
		<strong class="d-flex text-uppercase">Nama Pelamar : <?= $this->session->userdata('nama_lengkap') ?></strong>
		<br>
		<strong class="d-flex text-uppercase">Bagian Yang di Ambil : <?= $this->session->userdata('bagian') ?></strong>
	</div>
</div>

<form action="<?= base_url('pelamar/test'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
<?php $soal = $this->db->get_where('tbl_soal',['f_kode_soal'=>$kode])->result_array(); ?>
<?php foreach($soal as $soal): ?>
<div class="container bg-transparent card p-5">
	<div class="row">
		<div class="col-1">
			<span>No. <?= $soal['f_no_soal'] ?></span>
		</div>

		<div class="col-11">
			<span><?= $soal['f_soal'] ?></span>
		</div>


<div class="ml-5 pl-5 col-12" style="left: 40px;">
		<!-- Group of default radios - option 1 -->
		<div class="custom-control custom-radio">
		  <input type="radio" class="custom-control-input" id="1<?= $soal['f_no_soal'] ?>" name="opt[<?= $soal['f_no_soal'] ?>]" value="A">
		  <label class="custom-control-label" for="1<?= $soal['f_no_soal'] ?>"><?= $soal['f_opt_a'] ?></label>
		</div>

		<!-- Group of default radios - option 2 -->
		<div class="custom-control custom-radio">
		  <input type="radio" class="custom-control-input" id="2<?= $soal['f_no_soal'] ?>" name="opt[<?= $soal['f_no_soal'] ?>]" value="B">
		  <label class="custom-control-label" for="2<?= $soal['f_no_soal'] ?>"><?= $soal['f_opt_b'] ?></label>
		</div>

		<!-- Group of default radios - option 3 -->
		<div class="custom-control custom-radio">
		  <input type="radio" class="custom-control-input" id="3<?= $soal['f_no_soal'] ?>" name="opt[<?= $soal['f_no_soal'] ?>]" value="C">
		  <label class="custom-control-label" for="3<?= $soal['f_no_soal'] ?>"><?= $soal['f_opt_c'] ?></label>
		</div>

		<!-- Group of default radios - option 2 -->
		<div class="custom-control custom-radio">
		  <input type="radio" class="custom-control-input" id="4<?= $soal['f_no_soal'] ?>" name="opt[<?= $soal['f_no_soal'] ?>]" value="D">
		  <label class="custom-control-label" for="4<?= $soal['f_no_soal'] ?>"><?= $soal['f_opt_d'] ?></label>
		</div>

		<!-- Group of default radios - option 3 -->
		<div class="custom-control custom-radio">
		  <input type="radio" class="custom-control-input" id="5<?= $soal['f_no_soal'] ?>" name="opt[<?= $soal['f_no_soal'] ?>]" value="E">
		  <label class="custom-control-label" for="5<?= $soal['f_no_soal'] ?>"><?= $soal['f_opt_e'] ?></label>
		</div>
</div>



	</div>
</div>


<?php endforeach; ?>

</form>
</div>

 <script>
 $(document).ready(function(){
 $("#btnPrintArea").click(function(){
 $('#printArea').printThis(); //Untuk Print Area tertentu bisa menggunakan code ini
 });
 
 $("#btnPrintAll").click(function(){
 window.print(); //Untuk print semua area menggunakan perintah ini
 });
 });
 </script>