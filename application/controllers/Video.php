<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	public function index()
	{
		$data = array( 'title'	=> 'Home',
										'isi'	 => 'front/gallery/video');
		$this->load->view('front/layout/wrapper',$data);
	}
}
?>
