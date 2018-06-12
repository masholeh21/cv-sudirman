<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_2 extends CI_Controller {

	public function index()
	{
        $site  		= $this->mConfig->list_config();
        $produk     = $this->mProduk->listIndustriKecil();

		$data = array( 'title'	 => 'Home',
                       'site'    => $site,
                       'produks' => $produk,
				       'isi'	 => 'front/product/product_2');
		$this->load->view('front/layout/wrapper',$data);
	}
}
?>
