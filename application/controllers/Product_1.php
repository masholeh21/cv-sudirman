<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_1 extends CI_Controller {

	public function index()
	{
		$data = array( 'title'	=> 'Home',
										'isi'	 => 'front/product/product_1');
		$this->load->view('front/layout/wrapper',$data);
	}
}
?>
