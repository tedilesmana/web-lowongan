<div id='timer' class="badge-dark p-3 fixed-top col-3" style="top: 0px;z-index: 99;left: 37vw;"></div>

<div class="jumbotron col-12 text-center">
	<h3 class="font-weight-bold">TEST</h3>
	<hr style="border: 1px solid grey;">
    <br>
	<div>
		<strong class="d-flex text-uppercase">Nama Pelamar : <?= $this->session->userdata('nama_lengkap') ?></strong>
		<br>
		<strong class="d-flex text-uppercase">Bagian Yang di Ambil : <?= $this->session->userdata('bagian') ?></strong>
	</div>
</div>

<form action="<?= base_url('pelamar/test'); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
<?php $soal = $this->db->get_where('tbl_soal',['f_kode_soal'=>$this->session->userdata('bagian')])->result_array(); ?>
<?php foreach($soal as $soal): ?>
<div class="container bg-transparent card p-5">
	<div class="row">
		<div class="col-1">
			<span>No. <?= $soal['f_no_soal'] ?></span>
		</div>

		<div class="col-11">
			<span><?= $soal['f_soal'] ?></span>
		</div>


<div class="ml-5 pl-5 mt-4 col-12">
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

<div class="col-12 text-center mt-4" style="">
	<button class="btn-sm btn-primary btn-outline-primary text-success col-2" >
		<h5 class="text-black font-weight-bold"> Next</h5>
	</button>
</div>
</form>
<script>
     $(document).ready(function() {
        /** Membuat Waktu Mulai Hitung Mundur Dengan
          * var detik = 0,
          * var menit = 1,
          * var jam = 0
        */
        var detik = 00;
        var menit = 20;
        var jam = 1;
        /**
          * Membuat function hitung() sebagai Penghitungan Waktu
        */
        function hitung() {
            /** setTimout(hitung, 1000) digunakan untuk
                * mengulang atau merefresh halaman selama 1000 (1 detik)
            */
            setTimeout(hitung, 1000);
            /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
            if (menit < 5 && jam == 0) {
                var peringatan = 'style="color:red"';
            };
            /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
            $('#timer').html(
                'Sisa waktu anda ' + jam + ' jam : ' + menit + ' menit : ' + detik + ' detik'
            );
            /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
            detik--;
            /** Jika var detik < 0
                * var detik akan dikembalikan ke 59
                * Menit akan Berkurang 1
            */
            if (detik < 0) {
                detik = 59;
                menit--;
                /** Jika menit < 0
                    * Maka menit akan dikembali ke 59
                    * Jam akan Berkurang 1
                */
                if (menit < 0) {
                    menit = 59;
                    jam--;
                    /** Jika var jam < 0
                        * clearInterval() Memberhentikan Interval dan submit secara otomatis
                    */
                    if (jam < 0) {
                        clearInterval();
                    }
                }
            }
        }
        /** Menjalankan Function Hitung Waktu Mundur */
        hitung();
    });
// ]]>
</script>