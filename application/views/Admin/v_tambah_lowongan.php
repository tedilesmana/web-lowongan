 <link rel="stylesheet" href="<?= base_url('assets/jquery-ui/') ?>jquery-ui.css">
  <link rel="stylesheet" href="<?= base_url('assets/jquery-ui/') ?>jquery-ui.theme.css">
  <script src="<?= base_url('assets/jquery-ui/') ?>jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>



<div class="col-12 text-center mt-5">
  <h4 class=" font-weight-bold">TAMBAHKAN LOWONGAN BARU</h4>
</div>

<div class="alert-warning"><?= validation_errors(); ?></div>


<?php if($this->session->flashdata('alert')): ?>
<div class="alert-warning p-5 col-12 text-center">
  <strong><?= $this->session->flashdata('alert'); ?></strong>
</div>
<?php endif; ?>

<form action="<?= base_url('admin/tambah_lowongan'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

<div class="pl-5 pr-5 mt-5">
    <div class="md-form mt-3">
        <input type="text"  id="datepicker" class="form-control" placeholder="Masukan Tanggal Penutupan Lowongan" name="tgl_penutupan">
    </div>
      <div class="form-group">
          <select class="browser-default custom-select mt-1" name="bagian">
              <option>Posisi Yang di Butuhkan</option>
              <option value="ADM">ADMIN</option>
              <option value="IT">STAFF IT</option>
              <option value="OPR">OPERATOR</option>
              <option value="HRD">HRD</option>
              <option value="MRKT">MARKETING</option>
          </select>
      </div>
			<textarea class="mt-3" name="syarat" rows="19" style="height: 210px;width: 100%;" placeholder="Beri tanda => setiap membuat point baru"></textarea>

</div>

<div class="col-12 text-center mt-4">
	<button class="btn btn-primary btn-outline-primary text-success" >
		<h4 class="text-black font-weight-bold"> SUBMIT</h4>
	</button>
</div>
</form>





