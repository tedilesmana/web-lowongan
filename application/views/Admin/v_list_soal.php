<div class="col-12 text-center">
  <a class="col-6"><h3 class="font-weight-bold">DAFTAR SOAL</h3></a>
</div>


<?php if($this->session->flashdata('alert')): ?>
<div class="alert-warning p-5 col-12 text-center">
  <strong><?= $this->session->flashdata('alert'); ?></strong>
</div>
<?php endif; ?>


<div class="container text-center">
  <table class="table mt-5">
    <thead class="black white-text">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Jenis Soal Tes</th>
        <th scope="col">Jumlah Soal</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody class="border">

<?php 
  $jenis= $this->db->get('tbl_department')->result_array();
 ?>     
<?php foreach ($jenis as $jenis): ?>

<?php 
  $soal= $this->db->get_where('tbl_soal',['f_kode_soal'=>$jenis['f_kode_bag']])->result_array();
 ?>
      <tr>
        <th scope="row">1</th>
        <td><?= $jenis['f_kode_bag'] ?></td>
        <td><?= count($soal); ?></td>
        <td class="text-center">
            <a class="btn btn-pink" href="<?= base_url('admin/tambah_soal/') ?><?= $jenis['f_kode_bag'] ?>"><i class="fas fa-plus left"></i> TAMBAH SOAL</a>
            <a class="btn btn-primary" href="<?= base_url('admin/detail_soal/') ?><?= $jenis['f_kode_bag'] ?>"><i class="fas fa-eye left"></i> DETAIL SOAL</a>
        </td>
      </tr>

<?php endforeach; ?>

    </tbody>
  </table>
</div>