<?php
class msmspib extends CI_Model {

    var $tabel = 'master_sms_preprocessing';

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
