<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo extends CI_Controller {

	public function index()
	{
        $site  		= $this->mConfig->list_config();
        $galeri 	= $this->mGaleri->listGaleriFoto();
		$data = array( 'title'	=> 'Home',
                       'site'   => $site,
                       'foto'   => $galeri,
				       'isi'	=> 'front/gallery/photo');
		$this->load->view('front/layout/wrapper',$data);
	}
}
?>
