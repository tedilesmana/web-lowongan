<div class="jumbotron col-12 text-center">
    <h3 class="font-weight-bold mb-3">INPUT JAWABAN TEST</h3>
    <hr>
    <div>
        <strong class="d-flex text-uppercase">Nama Pelamar : <?= $pelamar['f_nama_lengkap'] ?></strong>
        <br>
        <strong class="d-flex text-uppercase">Bagian Yang di Ambil : <?= $pelamar['f_kode_bag'] ?></strong>
    </div>
</div>

<?php 
$jwb = $this->db->get_where('tbl_jawaban',['f_email'=>$pelamar['f_email']])->result_array();
$c_jwb = count($jwb);
$a=-1;
?>

<form action="<?= base_url('admin/cek_jawaban'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
<?php $soal = $this->db->get_where('tbl_soal',['f_kode_soal'=>$kode])->result_array(); ?>
<?php foreach($soal as $soal): ?>
    <?php $a++; ?>
<div class="container bg-transparent card p-5">
	<div class="row">
		<div class="col-1">
			<span>No. <?= $soal['f_no_soal'] ?></span>
		</div>

<div class="ml-5 pl-5 col-12" style="top: -15px;">
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
        <input type="text" name="email" value="<?= $pelamar['f_email'] ?>" hidden>
        <input type="text" name="kode" value="<?= $pelamar['f_kode_bag'] ?>" hidden>

        <?php if ($c_jwb > 0) { ?>
            <div class="col-4" style="position: absolute;top: -40px;right: 20px;">
                    <div class="badge-info text-center mt-4">
                        <strong>JAWABAN YANG BENAR :</strong><span> <?= $soal['f_jawaban'] ?></span>
                    </div>      

                    <div class="badge-secondary text-center mt-4">
                        <strong>JAWABAN ANDA :</strong><span> <?= $jwb[$a]['f_jawaban_pelamar'] ?></span>
                    </div>  

                    <?php if($jwb[$a]['f_jawaban_pelamar']==$soal['f_jawaban']): ?>
                    <div class="badge-success text-center mt-4">
                        <strong>BENAR</strong>
                    </div>
                    <?php endif; ?>

                    <?php if($jwb[$a]['f_jawaban_pelamar']!=$soal['f_jawaban']): ?>
                    <div class="badge-danger text-center mt-4">
                        <strong>SALAH</strong>
                    </div>
                    <?php endif; ?>
            </div>
        <?php } ?>


</div> 



	</div>
</div>


<?php endforeach; ?>

<div class="col-12 text-center mt-4" style="">
	<button class="btn btn-sm btn-primary" >
		<h5 class="">Submit</h5>
	</button>
</div>
</form>