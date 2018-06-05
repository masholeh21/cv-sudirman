<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  // Main Page
  public function index() {
    $data = array(	'title'		=> 'Dashboard',
    'isi'		=> 'admin/dashboard/list');

    $this->load->view('admin/layout/wrapper',$data);
  }
}
?>
