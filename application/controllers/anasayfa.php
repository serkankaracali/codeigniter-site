<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function acenteler()
	{
		$this->load->view('acenteler');
	}

	public function teklifal()
	{
		$this->load->view('teklifal');
	}
	public function bireyselgiris()
	{
		$this->load->view('bireysel');
	}

	public function acentegiris()
	{
		$this->load->view('acenteler');
	}
}
