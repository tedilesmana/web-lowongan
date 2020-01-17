
  <div class="col-12" style="position: relative;">
      <div class="card mt-4">
          <div class="card-body">



<div class="row">

  <div class="col-6">
      <a class="btn btn-default" href="<?php echo base_url().'admin'; ?>">Kembali
      </a>
      <button id="btnPrintAll" class="btn btn-success">Print All</button>
  </div>


  <div class="col-6 mt-2">
    <form action="" method="post">
      <div class="row float-right">
              <!-- accepted payments column -->
              <div class="col-6">
                <div class="form-group">
                <select class="browser-default custom-select mt-1 ml-2" name="cari">
                  <option>Cari Data Pelamar</option>
                  <option value="SEMUA">Semua Pelamar</option>
                  <option value="LULUS">Pelamar Yang Lulus</option>
                  <option value="GAGAL">Pelamar Tidak Lulus</option>
              </select>
                </div>
              </div>
              <div class="col-6">
              <button type="submit" class="btn btn-block btn-success">CARI</button>
              </div>
            <!-- this row will not appear when printing -->
          </section>
          <!-- /.content -->
      </div>
    </form> 
  </div>


</div>







  













<div class="container text-center">
  <table class="table mt-5">
    <thead class="black white-text">
      <tr>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Agama</th>
        <th scope="col">Status</th>
        <th scope="col">Pendidikan</th>
        <th scope="col">Nilai</th>
        <th scope="col">Hasil Tes</th>
      </tr>
    </thead>
    <tbody class="border">


<?php if($cari=='LULUS'): ?>

  <?php foreach ($pelamar as $pelamar): ?>

    <?php if($pelamar['f_hasil_test']>=60): ?>

      <tr>
        <td><?= $pelamar['f_nama_lengkap'] ?></td>
        <td><?= $pelamar['f_jenis_kelamin'] ?></td>
        <td><?= $pelamar['f_agama'] ?></td>
        <td><?= $pelamar['f_status'] ?></td>
        <td><?= $pelamar['f_pendidikan_terakhir'] ?></td>
        <td><?= $pelamar['f_hasil_test'] ?></td>
        <td>

        
            <a class="btn btn-primary mb-2 mr-3"> LULUS</a>
        

        </td>
      </tr>

      <?php endif; ?>
<?php endforeach; ?>

<?php endif; ?>

<?php if($cari=='GAGAL'): ?>

  <?php foreach ($pelamar as $pelamar): ?>

    <?php if($pelamar['f_hasil_test']<60): ?>

      <tr>
        <td><?= $pelamar['f_nama_lengkap'] ?></td>
        <td><?= $pelamar['f_jenis_kelamin'] ?></td>
        <td><?= $pelamar['f_agama'] ?></td>
        <td><?= $pelamar['f_status'] ?></td>
        <td><?= $pelamar['f_pendidikan_terakhir'] ?></td>
        <td><?= $pelamar['f_hasil_test'] ?></td>
        <td>

        
            <a class="btn btn-primary mb-2 mr-3">GAGAL</a>
        

        </td>
      </tr>

      <?php endif; ?>
<?php endforeach; ?>

<?php endif; ?>


<?php if($cari=='SEMUA'): ?>

<?php foreach ($pelamar as $pelamar): ?>
      <tr>
        <td><?= $pelamar['f_nama_lengkap'] ?></td>
        <td><?= $pelamar['f_jenis_kelamin'] ?></td>
        <td><?= $pelamar['f_agama'] ?></td>
        <td><?= $pelamar['f_status'] ?></td>
        <td><?= $pelamar['f_pendidikan_terakhir'] ?></td>
        <td><?= $pelamar['f_hasil_test'] ?></td>
        <td>

        <?php if($pelamar['f_hasil_test']>=60): ?>
            <a class="btn btn-primary mb-2 mr-3"> LULUS</a></td>
        <?php endif; ?>

        <?php if($pelamar['f_hasil_test']<60): ?>
            <a class="btn btn-primary mb-2 mr-3"> GAGAL</a></tr>
        <?php endif; ?>
        </td>
      </tr>
<?php endforeach; ?>

<?php endif; ?>





    </tbody>
  </table>
</div>













      </div>
          </div>
      </div>
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