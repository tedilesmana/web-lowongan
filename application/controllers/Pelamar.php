<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelamar extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('template');
	}

	public function index()
	{
		$this->template->template('index');
	}

	public function test()
	{
		if ($_POST) {
			
			$e_opt=implode('~//~', $this->input->post('opt[]'));
			$jwb=explode('~//~', $e_opt);
			$email=$this->session->userdata('email');
			$tbl_jawaban=$this->db->get_where('tbl_jawaban', ['f_email'=>$email])->row_array();

			$soal = $this->db->get_where('tbl_soal',['f_kode_soal'=>$this->session->userdata('bagian')])->result_array();
			$a=-1;
			if ($email==$tbl_jawaban['f_email']) {
				$this->db->delete('tbl_jawaban',['f_email'=>$email]);
			}
			foreach ($soal as $soal) {
				$a++;
				if ($soal['f_jawaban']==$jwb[$a]) {
					
					$data=[
						'f_email'=>$this->session->userdata('email'),
						'f_jawaban_pelamar'=>$jwb[$a],
						'f_hasil'=> 1
						];
					$this->db->insert('tbl_jawaban',$data);

				}else{

					$data=[
						'f_email'=>$this->session->userdata('email'),
						'f_jawaban_pelamar'=>$jwb[$a],
						'f_hasil'=> 0
						];
					$this->db->insert('tbl_jawaban',$data);
				}
			}
			redirect('pelamar/hasil_test');
		}else{

			$this->template->template('auth/v_test');

		}
	}

	public function hasil_test()
	{
		if ($_POST) {
			
			$score = $this->input->post('score');
			$email=$this->session->userdata('email');
			$jum_soal=$this->db->get_where('tbl_jawaban', ['f_email'=>$email])->result_array();
			$jum_soal = count($jum_soal);
			$total = $score*100/$jum_soal;
			$data = [
				'f_hasil_test'=>$total
				];
			$this->db->update('tbl_pelamar',$data,['f_email'=>$this->session->userdata('email')]);
			redirect('home');
		}else{
			$this->template->template('auth/v_hasil_test');
		}

	}

	public function pengumuman()
	{
		$this->template->template('home/v_pengumuman');
	}

}
