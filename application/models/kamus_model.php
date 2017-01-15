<?php
class kamus_model extends CI_Model {

    var $tabel = 'kamus';

    function __construct() {
        parent::__construct();
    }

	function get() {
        $this->db->from($this->tabel);
        $query = $this->db->get();
        
        return $query->result();
    }

    function insert() {
    	$data['title'] = 'CRUD CodeIgniter Studi Kasus Barang'; //judul title
        $myFile = "kamus.txt";
        $lines = file($myFile);

        foreach ($lines as $value) {
            $data = array('content' => $value);
            $this->db->insert($this->tabel, $data);
        }
    }

    function filter() {
        $this->db->from($this->tabel);
        $data['filter'] = $this->db->get();

        foreach ($data['filter'] as $value) {
            $key = trim($value['content']);
            $where = "content like '%$key%'";
            $this->db->from('master_sms');
            $this->db->where($where);

            return $this->db->get()->result();
        }
    }
}
?>
