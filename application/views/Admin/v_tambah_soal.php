<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropify/dist/css/dropify.min.css')?>">
<style>
	.dynamic { list-style-type: none; margin: 0; padding: 0; width: 100%; }
</style>
<link rel="stylesheet" href="<?php echo base_url('assets/jquery-ui/jquery-ui.css') ?>">
<script src="<?php echo base_url('assets/jquery-ui/jquery-ui.js'); ?>"></script>
<script src="<?= base_url('assets/dropify/dist/js/dropify.js'); ?>"></script>
<link href="<?= base_url('assets/'); ?>style_css/toko/upload_produk.css" rel="stylesheet">

<form action="<?= base_url('admin/tambah_soal/'.$bag); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

<div class="p-5" style="margin-top:-150px;">

  	<div class="fixed-top justify-content-end d-flex col-3" style="top: 145px;left:-150px;">
		<button type="button" name="tambah" id="tambah" class="btn btn-pink text-success">
			<i class="fas fa-plus text-white"> TAMBAH SOAL</i>
		</button>
	</div>
  	<div class="fixed-top justify-content-end d-flex col-2" style="top: 190px;left:-80px;">
		<button type="button" name="tambah" id="tambah" class="btn btn-outline-pink text-success" style="border-radius: 50%;">
				<div class="jum_soal text-pink" style="font-size: 25px;">0</div>
		</button>
	</div>
</div>


<div class="pl-5 pr-5 mt-5 pt-5">




  <table class="table">
    <thead class="black white-text">
      <tr>
        <th scope="col" style="width: 200px;">Soal</th>
        <th scope="col">Optional Jawaban</th>
        <th scope="col" style="width: 100px;">Key</th>
      </tr>
    </thead>
    <tbody id="drag" class="dynamic dynamic_step" name="langkah">


<?php $soal=$this->db->get_where('tbl_soal',['f_kode_soal'=>$bag])->result_array(); ?>














<?php foreach ($soal as $soal): ?>
     	<tr class="border100<?= $soal['f_id_soal'] ?>" id="row_soal">
        <td>
			<textarea value="<?= $soal['f_soal'] ?>" name="soal[100<?= $soal['f_id_soal'] ?>]" rows="19" style="height: 210px;width: 200px;">
				<?= $soal['f_soal'] ?>
			</textarea>
		</td>
        <td>
            <div class="md-form mt-1">
                <textarea id="materialContactFormName" class="form-control ml-4" name="opt_a[100<?= $soal['f_id_soal'] ?>]" value="<?= $soal['f_opt_a'] ?>"><?= $soal['f_opt_a'] ?></textarea>
                <label for="materialContactFormName" class="">A. </label>
            </div>
            <div class="md-form mt-1">
                <textarea id="materialContactFormName" class="form-control ml-4" name="opt_b[100<?= $soal['f_id_soal'] ?>]" value="<?= $soal['f_opt_b'] ?>"><?= $soal['f_opt_b'] ?></textarea>
                <label for="materialContactFormName" class="">B. </label>
            </div>
            <div class="md-form mt-1">
                <textarea id="materialContactFormName" class="form-control ml-4" name="opt_c[100<?= $soal['f_id_soal'] ?>]" value="<?= $soal['f_opt_c'] ?>"><?= $soal['f_opt_c'] ?></textarea>
                <label for="materialContactFormName" class="">C. </label>
            </div>
            <div class="md-form mt-1">
                <textarea id="materialContactFormName" class="form-control ml-4" name="opt_d[100<?= $soal['f_id_soal'] ?>]" value="<?= $soal['f_opt_d'] ?>"><?= $soal['f_opt_d'] ?></textarea>
                <label for="materialContactFormName" class="">D. </label>
            </div>
            <div class="md-form mt-1">
                <textarea id="materialContactFormName" class="form-control ml-4" name="opt_e[100<?= $soal['f_id_soal'] ?>]" value="<?= $soal['f_opt_e'] ?>"><?= $soal['f_opt_e'] ?></textarea>
                <label for="materialContactFormName" class="">E. </label>
            </div>
		</td>
        <td>
			<div class="form-group">
			    <select class="browser-default custom-select mt-1 ml-2" name="jwb[100<?= $soal['f_id_soal'] ?>]">
			        <option>Key</option>
			        <option value="<?= $soal['f_jawaban'] ?>" selected><?= $soal['f_jawaban'] ?></option>
			        <option value="A">A</option>
			        <option value="B">B</option>
			        <option value="C">C</option>
			        <option value="D">D</option>
			        <option value="E">E</option>
			    </select>
			</div>
		<button type="button" name="hapus" id="100<?= $soal['f_id_soal'] ?>" class="btn text-danger btn-pink btn-hapus ml-4" style="margin-top: 295px;">
			<i class="fa fa-trash text-white"></i>
			<div class="font-weight-bold text-white">HAPUS</div>
		</button>
		</td>
      </tr>
<?php endforeach; ?>















    </tbody>
  </table>
</div>

<div class="col-12 text-center">
	<button class="btn btn-success btn-outline-pink text-success" >
		<h4 class="text-black font-weight-bold"> SUBMIT</h4>
	</button>
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

		var i=1;
		$('#tambah').click(function()
		{
			i++;
			$('.dynamic_step').append(
				


	'<tr class="border'+i+'" id="row_soal">'+
        '<td>'+
			'<textarea name="soal['+i+']" rows="19" style="height: 210px;width: 200px;"></textarea>'+
		'</td>'+
        '<td>'+
            '<div class="md-form mt-1">'+
                '<textarea id="materialContactFormName" class="form-control ml-4" name="opt_a['+i+']"></textarea>'+
                '<label for="materialContactFormName" class="">A. </label>'+
            '</div>'+
            '<div class="md-form mt-1">'+
                '<textarea id="materialContactFormName" class="form-control ml-4" name="opt_b['+i+']"></textarea>'+
                '<label for="materialContactFormName" class="">B. </label>'+
            '</div>'+
            '<div class="md-form mt-1">'+
                '<textarea id="materialContactFormName" class="form-control ml-4" name="opt_c['+i+']"></textarea>'+
                '<label for="materialContactFormName" class="">C. </label>'+
            '</div>'+
            '<div class="md-form mt-1">'+
                '<textarea id="materialContactFormName" class="form-control ml-4" name="opt_d['+i+']"></textarea>'+
                '<label for="materialContactFormName" class="">D. </label>'+
            '</div>'+
            '<div class="md-form mt-1">'+
                '<textarea id="materialContactFormName" class="form-control ml-4" name="opt_e['+i+']"></textarea>'+
                '<label for="materialContactFormName" class="">E. </label>'+
            '</div>'+
		'</td>'+
        '<td>'+
			'<div class="form-group">'+
			    '<select class="browser-default custom-select mt-1 ml-2" name="jwb['+i+']">'+
			        '<option>Key</option>'+
			        '<option value="A">A</option>'+
			        '<option value="B">B</option>'+
			        '<option value="C">C</option>'+
			        '<option value="D">D</option>'+
			        '<option value="E">E</option>'+
			    '</select>'+
			'</div>'+
		'<button type="button" name="hapus" id="'+i+'" class="btn text-danger btn-pink btn-hapus ml-4" style="margin-top: 295px;">'+
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

		$(function()
		{
			var jum = $('tr').length-1;
			$('.jum_soal').html(jum);
		});




	</script>

