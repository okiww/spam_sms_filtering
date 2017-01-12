<?php
class msms extends CI_Model {

    var $tabel = 'master_sms';

    function __construct() {
        parent::__construct();
    }

	function getAllSms() {
        $this->db->from($this->tabel);
        $query = $this->db->get();
        
        return $query->result();
    }
}
?>
