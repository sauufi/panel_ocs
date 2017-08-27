<?php
class Model_Sitemap extends CI_Model {
    function __construct() {
        parent::__construct();
    }
  
    function create() {
        $this->db->select('idp, dateu');
        $this->db->from('produk');
        $this->db->order_by('idp',"DESC");
        $query = $this->db->get();
        return $query->result();
    }
}
?>