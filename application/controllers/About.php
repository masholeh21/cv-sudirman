<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array( 'title'	=> 'About',
										'isi'	 => 'front/about/about');
		$this->load->view('front/layout/wrapper',$data);
	}
}
?>