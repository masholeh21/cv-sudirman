<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_2 extends CI_Controller {

	public function index()
	{
		$data = array( 'title'	=> 'Home',
										'isi'	 => 'front/product/product_2');
		$this->load->view('front/layout/wrapper',$data);
	}
}
?>
