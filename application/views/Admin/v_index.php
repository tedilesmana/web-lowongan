<?php $pelamar=$this->db->get('tbl_pelamar')->result_array(); ?>
<?php $pelamar2=$this->db->get('tbl_pelamar')->result_array(); ?>
<?php 
  foreach ($pelamar as $pelamar){
    if($pelamar['f_hasil_test']<60){
        $tl[]=$pelamar['f_hasil_test'];
      }
    }
    $tdk_lulus=count($tl);
    $lulus=count($pelamar2)-$tdk_lulus;
?>


<!--/.Carousel Wrapper-->
<div class="container mt-4">
  <div class="row">

    <div class="col-12 mb-5 text-center">
      <div class="container">
        <div class="card" style="height: 300px;">
          <div class="">
            <h5 class="font-weight-bold mt-5">TOTAL PELAMAR</h5>
          </div>
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-center p-2" style="height: 190px;">
              <div style="border: 1px solid purple; width: 120px; height: 120px; border-radius: 50%;display: flex;justify-content: center;align-items: center;">
                <span style="font-size: 50px;"><?= count($pelamar2); ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 mb-5 text-center">
      <div class="container">
        <div class="card" style="height: 300px;">
          <div class="">
            <h5 class="font-weight-bold mt-5">DAFTAR YANG GAGAL</h5>
          </div>
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-center p-2" style="height: 190px;">
                <div style="border: 1px solid purple; width: 120px; height: 120px; border-radius: 50%;display: flex;justify-content: center;align-items: center;">
                  <span style="font-size: 50px;"><?= $tdk_lulus; ?></span>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 mb-5 text-center">
      <div class="container">
        <div class="card" style="height: 300px;">
          <div class="">
            <h5 class="font-weight-bold mt-5">DAFTAR YANG LULUS</h5>
          </div>
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-center p-2" style="height: 190px;">
                <div style="border: 1px solid purple; width: 120px; height: 120px; border-radius: 50%;display: flex;justify-content: center;align-items: center;">
                  <span style="font-size: 50px;"><?= $lulus; ?></span>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>