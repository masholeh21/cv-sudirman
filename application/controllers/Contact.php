<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data = array( 'title'	=> 'Home',
										'isi'	 => 'front/contact/contact');
		$this->load->view('front/layout/wrapper',$data);
	}
}
?>
