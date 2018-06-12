<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_1 extends CI_Controller {

	public function index()
	{
        $site  		= $this->mConfig->list_config();
        $produk     = $this->mProduk->listIndustriBesar();

		$data = array( 'title'	=> 'Home',
                       'site'   => $site,
                       'produk' => $produk,
                       'isi'	=> 'front/product/product_1');
		$this->load->view('front/layout/wrapper',$data);
	}
}
?>
