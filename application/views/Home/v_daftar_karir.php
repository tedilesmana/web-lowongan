<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropify/dist/css/dropify.min.css')?>">
<style>
    .dynamic { list-style-type: none; margin: 0; padding: 0; width: 100%; }
</style>
<link rel="stylesheet" href="<?php echo base_url('assets/jquery-ui/jquery-ui.css') ?>">
<script src="<?php echo base_url('assets/jquery-ui/jquery-ui.js'); ?>"></script>
<script src="<?= base_url('assets/dropify/dist/js/dropify.js'); ?>"></script>
<link href="<?= base_url('assets/'); ?>style_css/toko/upload_produk.css" rel="stylesheet">




<?php if($this->session->flashdata('alert')): ?>
<div class="alert-warning p-5 col-12 text-center">
    <strong><?= $this->session->flashdata('alert'); ?></strong>
</div>
<?php endif; ?>



<form action="<?= base_url('home/daftar_karir/');echo($bagian['f_kode_bag']); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
<div class="col-12 text-center pb-1 mt-2">
    <p class="h4"> PERHATIAN SAAT INI ANDA SEDANG MELAKUKAN LAMARAN UNTUK BAG : <?= $bagian['f_nama_bagian'] ?></p>
    <hr>
</div>
<div class="mt-2 col-6 offset-3">
    <div class="">
        <!-- Default form contact -->
        <div class="text-center border border-light p-5">

            <p class="h4 mb-4">FORMULIR BIODATA PELAMAR</p>

            <!-- Name -->
            <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Nama Lengkap" name="nama_lengkap">

            <!-- Email -->
            <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Email" name="email">

            <!-- Email -->
            <input type="password" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Password" name="password">

            <!-- Email -->
            <input type="text" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Alamat Lengkap" name="alamat">

            <!-- Subject -->
            <label>Jenis Kelamin</label>
            <select class="browser-default custom-select mb-4" name="kelamin">
                <option value="Perempuan">Perempuan</option>
                <option value="Laki-laki">Laki-laki</option>
            </select>

            <!-- Email -->
            <input type="text" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Agama" name="agama">

            <!-- Subject -->
            <label>Status</label>
            <select class="browser-default custom-select mb-4" name="status">
                <option value="Menikah">Menikah</option>
                <option value="Belum Menikah">Belum Menikah</option>
            </select>

            <!-- Email -->
            <input type="text" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Pendidikan Terakhir" name="pendidikan">

            <div class="mb-5">
                <div class="custom-file" style="height: 100px;width: 390px;">
                  <input type="file" class="dropify" id="gambar" name="g_ktp" required="">
                  <label class="custom-file-label" for="customFile">Upload KTP</label>
                </div>
            </div>

            <div class="mb-5">
                <div class="custom-file" style="height: 100px;width: 390px;">
                  <input type="file" class="dropify" id="gambar" name="g_ijazah" required="">
                  <label class="custom-file-label" for="customFile">Upload Ijazah</label>
                </div>
            </div>

            <div class="mb-5">
                <div class="custom-file" style="height: 100px;width: 390px;">
                  <input type="file" class="dropify" id="gambar" name="g_lain" required="">
                  <label class="custom-file-label" for="customFile">Gambar Dokumen Lainnya</label>
                </div>
            </div>

            <!-- Send button -->
            <button class="btn btn-info btn-block" type="submit">Send</button>


        <!-- Default form contact -->
    </div>
</div>
</form>


    <script type="text/javascript" src="<?php echo base_url('assets/dropify/dist/js/dropify.min.js')?>"></script>
    <script type="text/javascript">
        $(function()
        {
            $('.dropify').dropify(
            {
                messages:
                {
                    default: 'Drag atau drop untuk memilih gambar',
                    replace: 'Ganti',
                    remove:  'Hapus',
                    error:   'error'
                }
            });
        });

        var i=0;
        $('#tambah').click(function()
        {
            i++;
            $('.dynamic_step').append(
                


    '<tr class="border'+i+'" id="row_soal">'+
        '<td>'+
            '<div class="">'+
                '<div class="custom-file" style="height: 100px;width: 390px;">'+
                  '<input type="file" class="dropify" id="gambar" name="gambar3" required="">'+
                  '<label class="custom-file-label" for="customFile">Gambar Belakang</label>'+
                '</div>'+
            '</div>'+
            '<textarea name="" rows="19" style="height: 210px;width: 390px;"></textarea>'+
        '</td>'+
        '<td>'+
            '<div class="md-form mt-1">'+
                '<textarea id="materialContactFormName" class="form-control ml-4"></textarea>'+
                '<label for="materialContactFormName" class="">A. </label>'+
            '</div>'+
            '<div class="md-form mt-1">'+
                '<textarea id="materialContactFormName" class="form-control ml-4"></textarea>'+
                '<label for="materialContactFormName" class="">B. </label>'+
            '</div>'+
            '<div class="md-form mt-1">'+
                '<textarea id="materialContactFormName" class="form-control ml-4"></textarea>'+
                '<label for="materialContactFormName" class="">C. </label>'+
            '</div>'+
            '<div class="md-form mt-1">'+
                '<textarea id="materialContactFormName" class="form-control ml-4"></textarea>'+
                '<label for="materialContactFormName" class="">D. </label>'+
            '</div>'+
            '<div class="md-form mt-1">'+
                '<textarea id="materialContactFormName" class="form-control ml-4"></textarea>'+
                '<label for="materialContactFormName" class="">E. </label>'+
            '</div>'+
        '</td>'+
        '<td>'+
            '<div class="form-group">'+
                '<select class="browser-default custom-select mt-1 ml-2">'+
                    '<option>Key</option>'+
                    '<option value="A">A</option>'+
                    '<option value="B">B</option>'+
                    '<option value="C">C</option>'+
                    '<option value="D">D</option>'+
                    '<option value="E">E</option>'+
                '</select>'+
            '</div>'+
        '<button type="button" name="hapus['+i+']" id="'+i+'" class="btn text-danger btn-pink btn-hapus ml-4">'+
            '<i class="fa fa-trash text-white"></i>'+
            '<div class="font-weight-bold text-white">HAPUS</div>'+
        '</button>'+
        '</td>'+
      '</tr>'


            );


        $(function()
        {
            var jum = $('tr').length-1;
            $('.jum_soal').html(jum);
        });


            $('.dropify').dropify(
            {
                messages:
                {
                    default: 'Drag atau drop untuk memilih gambar',
                    replace: 'Ganti',
                    remove:  'Hapus',
                    error:   'error'
                }
            });
        });

        $(document).on('click', '.btn-hapus', function()
        {
            var jum = $('tr').length-2;
            $('.jum_soal').html(jum);
            var id_btn = $(this).attr("id");
            $('.border'+id_btn+'').remove();
        });




    </script>


