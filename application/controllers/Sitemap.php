<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitemap extends CI_Controller {
 public function index(){
     $this->load->helper('url');
     $this->load->model('model_sitemap');
     $data['produk'] = $this->m_sitemap->create();
     $this->load->view('view_sitemap',$data);
 }
}

?>