<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
	}

	public function index()
	{
		$this->template->template('home/v_index');
	}

	public function login()
	{
		$this->template->template('auth/v_login');
	}

	public function signup()
	{
		$this->template->template('auth/v_signup');
	}

	public function karir()
	{
		$this->template->template('home/v_karir');
	}

	public function daftar_karir($kode)
	{
		$data['bagian']=$this->db->get_where('tbl_department',['f_kode_bag'=>$kode])->row_array();
		$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required');
		if ($this->form_validation->run()==true) {
		
			$email = $this->input->post('email');

			$nama_lengkap = $this->input->post('nama_lengkap');
			$alamat = $this->input->post('alamat');
			$kelamin = $this->input->post('kelamin');
			$agama = $this->input->post('agama');
			$status = $this->input->post('status');
			$email = $this->input->post('email');
			$pendidikan = $this->input->post('pendidikan');
			$password = $this->input->post('password');


			$config['upload_path'] = './assets/images/upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);
			
			if ( $this->upload->do_upload('g_ktp'))
			{
				$nama_ktp = $this->upload->data('file_name');
			}
			else
			{
				echo $this->upload->display_errors();
			}


			if ( $this->upload->do_upload('g_ijazah'))
			{
				$nama_ijazah = $this->upload->data('file_name');
			}
			else
			{
				echo $this->upload->display_errors();
			}


			if ( $this->upload->do_upload('g_lain'))
			{
				$nama_lain = $this->upload->data('file_name');
			}
			else
			{
				echo $this->upload->display_errors();
			}

			$data = [
				'f_nama_lengkap' => $nama_lengkap,
				'f_jenis_kelamin' => $kelamin,
				'f_agama' => $agama,
				'f_status' => $status,
				'f_email' => $email,
				'f_password' => $password,
				'f_pendidikan_terakhir' => $pendidikan,
				'f_dok_ktp' => $nama_ktp,
				'f_dok_ijazah' => $nama_ijazah,
				'f_dok_lain' => $nama_lain,
				'f_tgl_daftar' => date('Y-m-d'),
				'f_kode_bag' => $kode
			];
			$this->db->delete('tbl_pelamar',['f_email'=>$email]);
			$this->db->insert('tbl_pelamar', $data);
			$this->session->set_flashdata('alert','Data anda berhasil di tambahkan dan sedang di proses');
			redirect('home/daftar_karir/'.$kode);


		}else{
			$this->template->template('home/v_daftar_karir',$data);
		}
	}
}
