  <div class="col-12" style="position: relative;">
      <div class="card mt-4">
          <div class="card-body">



    <a class="btn btn-default" href="<?php echo base_url().'home'; ?>">Kembali
  </a>
  <button id="btnPrintAll" class="btn btn-success">Print All</button>


  
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











<?php $pelamar=$this->db->get_where('tbl_pelamar',['f_email'=>$this->session->userdata('email')])->row_array(); ?>


<?php if($pelamar['f_hasil_test']>=60): ?>
<div class="card p-5">
	<div class="card-header bg-success text-center text-white">Pengumuman</div>
	<div class="card-body p-5">

		<div class="col-12 text-center mb-5">
			<button class="btn btn-success">SCORE : <?= $pelamar['f_hasil_test'] ?></button>
		</div>
		<span class="text-uppercase font-weight-bold">Selamat anda telah lulus tes tahap pertama,
			Untuk tes tahap ke dua akan di laksanakan pada:
		</span>

		<div class="mt-4 ml-5">
			Tanggal :<?= $pelamar['f_tgl_daftar']; ?> 
		</div>
		<div  class="mt-2 ml-5">
			Lokasi : PT. KAWAN LAMA SEJAHTERA
		</div>
		<div class="mt-4 text-uppercase font-weight-bold">
			Kepada para pelamar harap membawa perlengkapan alat tulis dan menggunakan pakaian hitam putih
		</div>
	</div>
</div>
<?php endif; ?>

<?php if($pelamar['f_hasil_test']<60): ?>
<div class="card p-5">
	<div class="card-header bg-danger text-center text-white">Pengumuman</div>
	<div class="card-body p-5">

	<div class="col-12 text-center mb-5">
			<button class="btn btn-danger">SCORE : <?= $pelamar['f_hasil_test'] ?></button>
	</div>

		<span class="text-uppercase font-weight-bold">Mohon maaf hasil tes anda tidak memenuhi kriteria kami
		</span>
	</div>
</div>
<?php endif; ?>