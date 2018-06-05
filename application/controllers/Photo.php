<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo extends CI_Controller {

	public function index()
	{
		$data = array( 'title'	=> 'Home',
										'isi'	 => 'front/gallery/photo');
		$this->load->view('front/layout/wrapper',$data);
	}
}
?>
