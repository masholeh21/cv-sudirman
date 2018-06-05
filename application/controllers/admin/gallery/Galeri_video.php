<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Galeri_video extends CI_Controller {
      public function index(){

		$site      = $this->mConfig->list_config();
		$Galerivideo = $this->mGaleri->listGalerivideo();

		$data = array(	'title'			=> 'Management Galeri Video - '.$site['namaweb'],
						'galeri_video'	=> $Galerivideo,
						'site'			=> $site,
						'isi'			=> 'admin/gallery/video/list');
		$this->load->view('admin/layout/wrapper',$data);
	}

	// Create Gallery
	public function create() {

		$site = $this->mConfig->list_config();

		$v = $this->form_validation;
		$v->set_rules('judul','Galeri Name','required');

		if($v->run()) {

		$data = array(	'title'			=> 'Create Galeri Video - '.$site['namaweb'],
						'site'			=> $site,
						'error'			=> $this->upload->display_errors(),
						'isi'			=> 'admin/gallery/video/create');
		$this->load->view('admin/layout/wrapper',$data);

				$i = $this->input;
				$slugGalerivideo = url_title($this->input->post('judul'), 'dash', TRUE);
				$data = array(	'slug_gallery'	=> $slugGalerivideo,
								'judul'			=> $i->post('judul'),
								'deskripsi' 	=> $i->post('deskripsi'),
								'image'			=> $upload_data['uploads']['file_name']
				 			 );
				$this->mGaleri->createGalerivideo($data);
				$this->session->set_flashdata('sukses','Success');
				redirect(base_url('admin/Gallery/Galeri_video'));
		}
		// Default page
		$data = array(	'title'		=> 'Create Gallery - '.$site['namaweb'],
						'site'		=> $site,
						'isi'		=> 'admin/Galerry/video/create');
		$this->load->view('admin/layout/wrapper',$data);
	}

	// Edit Gallery
	public function edit($id_galeri_video) {

		$Galerivideo		= $this->mGaleri->detailGalerivideo($id_Galeri_video);
		$endGalerivideo	= $this->mGaleri->endGalerivideo();

		// Validation
		$v = $this->form_validation;
		$v->set_rules('judul','Galeri Name','required');

		if($v->run()) {
		$data = array(	'title'				=> 'Edit Galeri - '.$Galerivideo['judul'],
						'Galeri_video'		=> $Galerivideo,
						'isi'				=> 'admin/gallery/video/edit');
		$this->load->view('admin/layout/wrapper', $data);

			$i = $this->input;
			$slugGalerivideo = $endGalerivideo['id_galeri_video'].'-'.url_title($i->post('judul'),'dash', TRUE);
			$data = array(	'id_galeri_video'		=> $Galerivideo['id_galeri_video'],
							'slug_galeri_video'		=> $slugGalerivideo,
							'judul'					=> $i->post('judul'),
							);

			$this->Galerivideo->editGalerivideo($data);
			$this->session->set_flashdata('sukses','Success');
			redirect(base_url('admin/gallery/Galeri_video'));
		}
		$data = array(	'title'				=> 'Edit Galeri - '.$Galerivideo['judul'],
						'Galeri_video'		=> $Galerivideo,
						'isi'				=> 'admin/gallery/video/edit');
		$this->load->view('admin/layout/wrapper', $data);
	}

	// Delete Gallery
	public function delete($id_Galeri_video) {
		$data = array('id_galeri_video'	=> $id_galeri_video);
		$this->mGaleri->deleteGalerivideo($data);
		$this->session->set_flashdata('sukses','Success');
		redirect(base_url('admin/gallery/Galeri_video'));
	}
}p
