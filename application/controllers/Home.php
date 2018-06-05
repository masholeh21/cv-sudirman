<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array( 'title'	=> 'Home',
										'isi'	 => 'front/home/home');
		$this->load->view('front/layout/wrapper',$data);
	}
}
?>
