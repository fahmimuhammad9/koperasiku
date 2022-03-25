<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['title'] = "Koperasi Karyawan | Login";

		$this->load->view('public/pub_header', $data);
		$this->load->view('public/pub_home', $data);
		$this->load->view('public/pub_footer');
	}

	public function register()
	{
		$this->form_validation->set_rules('fullname','Fullname','required|trim', [
			'required' => 'Masukkan Nama Lengkap'
		]);
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user.useremail]',[
			'required' => 'Masukkan Email',
			'valid_email' => 'Email Tidak Valid',
			'is_unique' => 'Email Telah Terdaftar'
		]);
		$this->form_validation->set_rules('password','Password','required|min_length[8]',[
			'required' => 'Masukkan Password',
			'min_length' => 'Password Minimal 8 Karakter'
		]);

		if($this->form_validtion->run() == false ){
			$data['title'] = "Register @Koperasi Karyawan";

			$this->load->view('public/pub_header', $data);
			$this->load->view('public/pub_register', $data);
			$this->load->view('public/pub_footer');	
		} else {
			$in = 
		}


	}
}
