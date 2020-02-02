<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
	}

	public function index()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$pelamar = $this->db->get_where('tbl_pelamar',['f_email'=>$email])->num_rows();
		$d_pelamar = $this->db->get_where('tbl_pelamar',['f_email'=>$email])->row_array();

		if($pelamar>0 && $pelamar<2){
						$password = $this->db->get_where('tbl_pelamar',['f_password'=>$password])->num_rows();

						if($password>0){
							$data=[
								'nama_lengkap' => $d_pelamar['f_nama_lengkap'],
								'email' => $email,
								'bagian' => $d_pelamar['f_kode_bag'],
								'password' => $password
							];
							$this->session->set_userdata($data);
							redirect('pelamar/test');
						}else{
							$this->session->set_flashdata('alert','Password anda salah');
							redirect('home/login');
						}
		}else{
			













			$admin = $this->db->get_where('tbl_admin',['f_email'=>$email])->num_rows();
			$d_admin = $this->db->get_where('tbl_admin',['f_email'=>$email])->row_array();

			if($admin>0 && $admin<2){
							$password = $this->db->get_where('tbl_admin',['f_password'=>$password])->num_rows();

							if($password>0){
								$data=[
									'email' => $d_admin['f_email']
								];
								$this->session->set_userdata($data);
								redirect('admin');
							}else{
								$this->session->set_flashdata('alert','Password anda salah');
								redirect('home/login');
							}
			}else{
				$this->session->set_flashdata('alert','Email yang anda masukan tidak terdaftar');
				redirect('home/login');
			}







		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home/login');
	}
}
